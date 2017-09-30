<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
                parent::__construct();
                $this->load->helper(array('form', 'url'));
    }


	public function index(){
		$header_data['title']="Login";	
		$this->load->view('header2',$header_data);	
		$this->load->view('login');
	}
	
	public function home(){
		$header_data['title']="DTS";		
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	public function docu(){
		$header_data['title']="All Documents";
		
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->model('dts_model');
		$documents = $this->dts_model->getDocuments();
		$this->load->view('documents',['do'=>$documents]);
		$this->load->view('footer');
	}
	
	public function add(){
		$header_data['title']="Add Documents";
		
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('add');
		$this->load->view('footer');
	}
	
	public function profile(){
		$header_data['title']="Profile";
		
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}
	
	public function contacts(){
		$header_data['title']="Contacts";
		
		
		
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('contacts');
		$this->load->view('footer');
	}
	
	public function myd(){
		$header_data['title']="My Documents";
		
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('mydocu');
		$this->load->view('footer');
	}
	
	public function edit(){
		$header_data['title']="Edit Profile";
		
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('edit');
		$this->load->view('footer');
	}
	
	public function offices(){
		$header_data['title']="Offices";
		
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('offices');
		$this->load->view('footer');
	}
	
	public function dept(){
		$header_data['title']="Departments";
		
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('departments');
		$this->load->view('footer');
	}
	
	public function addDept(){
	$header_data['title']="Add Department";
		
	$this->load->view('header2',$header_data);
	$this->load->view('header');
	$this->load->view('addDept');
	$this->load->view('footer');
	}
	
	public function signup(){
		$header_data['title']="Sign Up";	
		$this->load->view('header2',$header_data);	
		$this->load->model('dts_model');
		$lastEmp = $this->dts_model->getLastEmployee();
		$departments = $this->dts_model->getDepartments();
		$this->load->view('signup', ['dp'=>$departments,'le'=>$lastEmp]);

	}

	public function save(){
		$this->form_validation->set_rules('document_id', 'Tracking No', 'required');
	  	$this->form_validation->set_rules('document_title', 'Title', 'required');
	 	$this->form_validation->set_rules('document_desc', 'Description', 'required');
  		$this->form_validation->set_error_delimiters('<div class="text-danger bg-danger">', '</div>');

        if ($this->form_validation->run()){

               	$data = $this->input->post();
               	$url = $this->do_upload();
             	$this->load->model('dts_model');
             	if ($this->dts_model->saveDocuments($data,$url)){
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		$this->session->set_flashdata('response', 'Failed :(');
				 }
				 return redirect('home/add');

        }
        else{
            	$header_data['title']="Add Documents";		
				$this->load->view('header',$header_data);
				$this->load->view('add');
				$this->load->view('footer');
        }
	}

	public function do_upload(){
		$type = explode('.', $_FILES["file"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./uploads/".uniqid(rand()).'.'.$type;

		if(in_array($type, array("doc", "docs", "pdf", "txt")))
					if(is_uploaded_file($_FILES["file"]["tmp_name"]))
						if(move_uploaded_file($_FILES["file"]["tmp_name"],$url))
								return $url;

		return redirect('home/add');					
	}
		
	public function validation(){
		$this->load->model('dts_model');
		$query=$this->dts_model->validate();

		// echo $query;
		
		if($query){
			$data = array(
				'username' => $uname,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('home/home');
		} 
		else{

			$this->index();
		}
	}

	public function create_member(){
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
	 	$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('mname', 'Middle Name', 'trim|required');
	 	$this->form_validation->set_rules('position', 'Position', 'trim|required');
	 	$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|max_length[20]|callback_check_if_username_exists');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]');
	 	$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');
  		$this->form_validation->set_error_delimiters('<div class="text-danger bg-danger">', '</div>');

        if ($this->form_validation->run()){

             	$this->load->model('dts_model');
             	if ($query=$this->dts_model->saveMember()){
             		$data['account_created'] = 'Account Created!';

             		$header_data['title']="Login";	
					$this->load->view('header2',$header_data);	
					$this->load->view('login',$data);
				 }
				 else{
             		$data['account_created'] = 'Failed to Create Account!';
				 }
				 

        }
        else{
            	$header_data['title']="Sign Up";	
				$this->load->view('header2',$header_data);	
				$this->load->model('dts_model');
				$departments = $this->dts_model->getDepartments();
				$this->load->view('signup', ['dp'=>$departments]);
        }
	}

	function check_if_username_exists($requested_username){
		$this->load->model('dts_model');

		$username_available = $this->dts_model->check_if_username_exists($requested_username);

		if($username_available){
			return TRUE;
		}else {
			return FALSE;
		}
	}


	public function saveDept(){
		$this->form_validation->set_rules('department_id', 'Department ID', 'required');
	 	$this->form_validation->set_rules('department_desc', 'Department Name', 'required');
  		$this->form_validation->set_error_delimiters('<div class="text-danger bg-danger">', '</div>');

        if ($this->form_validation->run()){

               	$data = $this->input->post();
             	$this->load->model('dts_model');
             	if ($this->dts_model->saveDepartment($data)){
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		$this->session->set_flashdata('response', 'Failed :(');
				 }
				 return redirect('home/addDept');

        }
        else{
            	$header_data['title']="Add Documents";		
				$this->load->view('header',$header_data);
				$this->load->view('addDept');
				$this->load->view('footer');
        }
	}



}
?>
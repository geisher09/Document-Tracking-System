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
		date_default_timezone_set('Asia/Manila');
		//$time =date("g:i a");// time());
		$time =date("h:i:sa");// time());
		$date = date("Y-m-d");
		$data['time'] = $time;
		$data['date'] = $date;
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('home',$data);
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

	public function signup(){
		$header_data['title']="Sign Up";
		$this->load->view('header2',$header_data);
		$this->load->model('dts_model');
		$lastEmp = $this->dts_model->getLastEmployee();
		$departments = $this->dts_model->getDepartments();
		$this->load->view('signup', ['dp'=>$departments,'le'=>$lastEmp]);

	}

	//OFFICES & EMPLOYEES
		public function offices(){
			$header_data['title']="Offices";
			$this->load->model('dts_model');
			$hold = $this->dts_model->getOffices();
			$data['offices'] = $hold;
			//print_r($data);

			$this->load->view('header2',$header_data);
			$this->load->view('header');
			$this->load->view('offices',$data);
			$this->load->view('footer');
		}

		public function dept($office_id){
			$header_data['title']="Departments";
			$condition = array('office_id'=>$office_id);
			$this->load->model('dts_model');
			$hold = $this->dts_model->getDepartment2($condition);
			//$hold2 = $this->dts_model->getDepartment_id($condition);
			$data['dept'] = $hold;
			$data['office'] = $condition;
			//print_r($data);
			if($office_id == 1)
{
	echo "same";
}			// print_r($office_id);
			// echo "Pasok";
			$this->load->view('header2',$header_data);
			$this->load->view('header');
			$this->load->view('departments',$data);
			$this->load->view('footer');
		}

		public function deptEmployees($department_id){
			$header_data['title']="Department's Employees";
			$condition = array('department_id'=>$department_id);
			$this->load->model('dts_model');
			$hold = $this->dts_model->getEmployee($condition);
			$data['employees'] = $hold;
			$data['title'] = "None";
			//print_r($data);
			// echo "Pasok";
			$this->load->view('header2',$header_data);
			$this->load->view('header');
			$this->load->view('department/employee',$data);
			$this->load->view('footer');
		}

		public function addDept($office_id){
		$header_data['title']="Add Department";
		$data['val'] = $office_id;
		$this->load->model('dts_model');
		$hold = $this->dts_model->getDepartment_id($office_id);
		$data['dept_id'] = $hold;
		$ar = $hold++;
		$ar2 = array(1);
		for($a=0;$a<=99;$a++){
		if(isset($hold[$a])){
		} else {
			$num = $a+1;
			break;
		}
	}
	if($num<=9){
		$id = $office_id.'0'.$num;
	}
 else{
	 $id = $office_id.$num;
 }
		$data['id']=$id;
	//print_r($hold);

		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('addDept',$data);
		$this->load->view('footer');
		}
		public function saveDept($id){
//			$this->form_validation->set_rules('department_id', 'Department ID', 'required');
//echo "pasok";
	 	$this->form_validation->set_rules('department_desc', 'Department Name', 'required');
  		$this->form_validation->set_error_delimiters('<div class="text-danger bg-danger">', '</div>');
			$data['office_id'] = $val;

        if ($this->form_validation->run()){
					for($a=0;$a<=100;$a++){
						for($b=100;$b<=199;$b++){
							if($b==$id){
								echo "same id";
								$data2= 1;
								break;
								$a=100;
							}
						}
						for($b=200;$b<=299;$b++){
							if($b==$id){
								echo "same id";
								$data2= 2;
								break;
								$a=100;
							}
						}
						for($b=300;$b<=399;$b++){
							if($b==$id){
								echo "same id";
								$data2= 3;
								break;
								$a=100;
							}
						}
						for($b=400;$b<=499;$b++){
							if($b==$id){
								echo "same id";
								$data2= 4;
								break;
								$a=100;
							}
						}
						for($b=500;$b<=599;$b++){
							if($b==$id){
								echo "same id";
								$data2= 5;
								break;
								$a=100;
							}
						}
					}
               	$data = $this->input->post();
             	$this->load->model('dts_model');
             	if ($this->dts_model->saveDepartment($data,$data2)){
								print_r($data);
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		$this->session->set_flashdata('response', 'Failed :(');
				 }
					return redirect('home/dept/'.$data2);
        }
        else{
        $header_data['title']="Add Documents";
				$this->load->view('header2',$header_data);
				$this->load->view('header');
				$this->load->view('saveDept');
				$this->load->view('footer');
        }
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
		$uname['uname'] = $this->input->post('uname');
		if($query){
			$data = array(
				'username' => $uname,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);

			date_default_timezone_set('Asia/Manila');  //balak gamitin sa history
			$time =date("h:i:sa");// time());
			$date = date("Y-m-d");
			$uname['time'] = $time;
			$uname['date'] = $date;


			$header_data['title']="DTS";
			$uname['uname'] = $this->input->post('uname');
			$this->load->view('header2',$header_data);
			$this->load->view('header');
			$this->load->view('home',$uname);
			$this->load->view('footer');

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



}
?>

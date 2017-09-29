<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
                parent::__construct();
                $this->load->helper(array('form', 'url'));
    }

	public function index(){
		$header_data['title']="DTS";
		date_default_timezone_set('Asia/Manila');
		//$time =date("g:i a");// time());
		$time =date("h:i:sa");// time());
		$date = date("Y-m-d");
		$data['time'] = $time;
		$data['date'] = $date;
		//print_r($time);
		$this->load->view('header',$header_data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}

	public function docu(){
		$header_data['title']="All Documents";

		$this->load->view('header',$header_data);
		$this->load->model('dts_model');
		$documents = $this->dts_model->getDocuments();
		$this->load->view('documents',['do'=>$documents]);
		$this->load->view('footer');
	}

	public function add(){
		$header_data['title']="Add Documents";

		$this->load->view('header',$header_data);
		$this->load->view('add');
		$this->load->view('footer');
	}

	public function profile(){
		$header_data['title']="Profile";

		$this->load->view('header',$header_data);
		$this->load->view('profile');
		$this->load->view('footer');
	}

	public function contacts(){
		$header_data['title']="Contacts";



		$this->load->view('header',$header_data);
		$this->load->view('contacts');
		$this->load->view('footer');
	}

	public function myd(){
		$header_data['title']="My Documents";

		$this->load->view('header',$header_data);
		$this->load->view('mydocu');
		$this->load->view('footer');
	}

	public function edit(){
		$header_data['title']="Edit Profile";

		$this->load->view('header',$header_data);
		$this->load->view('edit');
		$this->load->view('footer');
	}
//OFFICES & EMPLOYEES
	public function offices(){
		$header_data['title']="Offices";
		$this->load->model('dts_model');
		$hold = $this->dts_model->getOffices();
		$data['offices'] = $hold;
		//print_r($data);

		$this->load->view('header',$header_data);
		$this->load->view('offices',$data);
		$this->load->view('footer');
	}

	public function dept($office_id){
		$header_data['title']="Departments";
		$condition = array('office_id'=>$office_id);
		$this->load->model('dts_model');
		$hold = $this->dts_model->getDepartment($condition);
		$data['dept'] = $hold;
		$data['office'] = $condition;
		// print_r($data);
		// print_r($office_id);
		// // echo "Pasok";
		$this->load->view('header',$header_data);
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
		$this->load->view('header',$header_data);
		$this->load->view('department/employee',$data);
		$this->load->view('footer');
	}

	public function addDept($office_id){
	$header_data['title']="Add Department";
	$data['val'] = $office_id;
	//print_r($data);
	$this->load->view('header',$header_data);
	$this->load->view('addDept',$data);
	$this->load->view('footer');
	}

	public function login(){
		$header_data['title']="Login";
		$this->load->view('login',$header_data);
	}

	public function signup(){
		$header_data['title']="Sign Up";
		$this->load->view('signup',$header_data);
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
				echo "WAAAAAAAAAAAAAa";
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

	public function saveDept($val){
		$this->form_validation->set_rules('department_id', 'Department ID', 'required');
	 	$this->form_validation->set_rules('department_desc', 'Department Name', 'required');
  		$this->form_validation->set_error_delimiters('<div class="text-danger bg-danger">', '</div>');
$data['office_id'] = $val;
//print_r($data);
        if ($this->form_validation->run()){

               	$data = $this->input->post();
             	$this->load->model('dts_model');
             	if ($this->dts_model->saveDepartment($data)){
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		$this->session->set_flashdata('response', 'Failed :(');
				 }
					return redirect('home/offices');
        }
        else{
        $header_data['title']="Add Documents";
				$this->load->view('header',$header_data);
				$this->load->view('saveDept');
				$this->load->view('footer');
        }
	}


}
?>

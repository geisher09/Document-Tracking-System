<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
    }


	public function index(){
			$header_data['title']="Login";
			$this->load->view('header2',$header_data);
			$this->load->view('login');
			$this->load->view('footer');
	}

	public function login_validation(){
		$this->form_validation->set_rules('uname', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run()){
			//true
			$username = $this->input->post('uname');

			//model function
			$this->load->model('dts_model');
			if($this->dts_model->can_login($username)){
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect('home/home');
			}
			else{
				$this->session->set_flashdata('error', 'Invalid username or password!');
				redirect('home/index');
			}
		}

		else{
			//false
			$this->index();
		}


	}


	public function home(){

		if($this->session->userdata('username') != ''){
			$user['username']=$this->session->userdata('username');
			$this->load->model('dts_model');
			$profile = $this->dts_model->get_profile($user);
			$documents = $this->dts_model->getDocuments($user);
			$header_data['title']="DTS";
			date_default_timezone_set('Asia/Manila');
			$time =date("h:i:sa");
			$date = date("Y-m-d");
			$data['time'] = $time;
			$data['date'] = $date;
			$data['username'] = $user;
			$this->load->view('header2',$header_data);
			//$this->load->view('header');
			$this->load->view('home',['do'=>$documents,'pro'=>$profile]);
			$this->load->view('footer');
		}

		else{
			redirect('home/index','refresh');
		}
	}


	//OFFICES & EMPLOYEES
	public function offices(){
			$header_data['title']="Offices";
			$user['username']=$this->session->userdata('username');
			$this->load->model('dts_model');
			$profile = $this->dts_model->get_profile($user);
			$hold = $this->dts_model->getOffices();
			$data['offices'] = $hold;
			//print_r($data);

			$this->load->view('header2',$header_data);
			//$this->load->view('header');
			$this->load->view('offices',['offices'=>$hold,'pro'=>$profile]);
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
			$user['username']=$this->session->userdata('username');
			$profile = $this->dts_model->get_profile($user);
			// print_r($office_id);
			// echo "Pasok";
			$this->load->view('header2',$header_data);
			//$this->load->view('header');
			$this->load->view('departments',['dept'=>$data['dept'],'id'=>$data['id'],'dept_id'=>$data['dept_id'],'pro'=>$profile,'office'=>$office_id]);
			$this->load->view('footer');
	}

	public function deptEmployees($department_id,$office_id){
			$header_data['title']="Department's Employees";
			$condition = array('department_id'=>$department_id);
			$this->load->model('dts_model');
			$hold = $this->dts_model->getEmployee($condition);
			$user['username']=$this->session->userdata('username');
			$profile = $this->dts_model->get_profile($user);
			$data['employees'] = $hold;
			$data['title'] = "None";
			$this->load->view('header2',$header_data);
			//$this->load->view('header');
			$this->load->view('department/employee',['employees'=>$data['employees'],'pro'=>$profile,'office'=>$office_id]);
			$this->load->view('footer');
	}

	public function contacts(){
		$header_data['title']="Contacts";
			$user['username']=$this->session->userdata('username');
			$this->load->model('dts_model');
			$profile = $this->dts_model->get_profile($user);
		$this->load->view('header2',$header_data);
		//$this->load->view('header');
	 	$this->load->view('contacts',['pro'=>$profile]);
		$this->load->view('footer');
	}

	public function profile(){
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$profile = $this->dts_model->get_profile($user);
		$header_data['title']="Profile";
		$this->load->view('header2',$header_data);
		//$this->load->view('header');
		$this->load->view('profile',['pro'=>$profile]);
		$this->load->view('footer');
	}

	public function edit(){
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$profile = $this->dts_model->get_profile($user);
		$header_data['title']="Edit Profile";
		$this->load->view('header2',$header_data);
		$this->load->view('accountsettings', ['pro'=>$profile]);
		$this->load->view('footer');
	}

	public function edit_list(){
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$userprof = $this->dts_model->get_user($user);
		$departments = $this->dts_model->getDepartments();

		$output = array(

						"userprof" => $userprof,
						"departments" => $departments

				);
		echo json_encode($output);
	}

	public function update_user(){

		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
	 	$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('mname', 'Middle Name', 'trim|required');
	 	$this->form_validation->set_rules('position', 'Position', 'trim|required');
	 	$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|max_length[20]|callback_check_if_username_exists2');

        if ($this->form_validation->run()){
        		$user['username']=$this->session->userdata('username');
             	$this->load->model('dts_model');
       			$this->dts_model->saveUpdate_user($user);
       			$_SESSION['username'] = $this->input->post('username');
       			return redirect('home/profile');


        }
        else{
            	$user['username']=$this->session->userdata('username');
				$this->load->model('dts_model');
				$profile = $this->dts_model->get_profile($user);



				$header_data['title']="Edit Profile";
				$this->load->view('header2',$header_data);
				//$this->load->view('header');
				$this->load->view('accountsettings', ['pro'=>$profile]);
				$this->load->view('footer');
        }

	}

	public function upload_pic(){
		$type = explode('.', $_FILES["photo"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./images/".uniqid(rand()).'.'.$type;

		if(in_array($type, array("jpeg", "jpg", "png")))
					if(is_uploaded_file($_FILES["photo"]["tmp_name"]))
						if(move_uploaded_file($_FILES["photo"]["tmp_name"],$url))
								//return $url;
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$this->dts_model->savePic($url,$user);

		return redirect('home/profile');
	}

	public function password_change(){
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$profile = $this->dts_model->get_profile($user);
		$header_data['title']="Change Password";
		$this->load->view('header2',$header_data);
		//$this->load->view('header');
		$this->load->view('password_change',['pro'=>$profile]);
		$this->load->view('footer');

	}

	public function change_pass(){

		$user['username']=$this->session->userdata('username');
		$this->form_validation->set_rules('password', 'Current Password', 'trim|required|min_length[6]|max_length[32]|callback_check_if_password_match');
		$this->form_validation->set_rules('password_change', 'New Password', 'trim|required|min_length[6]|max_length[32]');
	 	$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password_change]');

  		if ($this->form_validation->run()){

             	$this->load->model('dts_model');
       			$this->dts_model->saveUpdate_pass($user);

       			return redirect('home/home');


        }
        else{
        		$user['username']=$this->session->userdata('username');
				$this->load->model('dts_model');
				$profile = $this->dts_model->get_profile($user);
            	$header_data['title']="Change Password";
				$this->load->view('header2',$header_data);
				//$this->load->view('header');
				$this->load->view('password_change',['pro'=>$profile]);
				$this->load->view('footer');
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

	function check_if_password_match($requested_pass){
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');

		$password_match = $this->dts_model->check_if_password_match($requested_pass,$user);

		if($password_match){
			return TRUE;
		}else {
			return FALSE;
		}
	}

	function check_if_username_exists2($requested_username){
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');

		$username_available = $this->dts_model->check_if_username_exists2($requested_username,$user);

		if($username_available){
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->session_destroy();
		redirect('home/index','refresh');
	}




}

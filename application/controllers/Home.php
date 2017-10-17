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

	public function track_docu(){
		$this->form_validation->set_rules('track_num', 'track_num', 'trim|required');
		if($this->form_validation->run()){
			$track_num = $this->input->post('track_num');
			$this->load->model('dts_model');
			$doc_date = $this->dts_model->track_docu_latest_date($track_num);
			if($doc_date!=null){
        foreach ($doc_date as $d) {
          $dates = array(
            'date_of_action' => $d['date_of_action']
          );
          $dates2[]=$dates;
        }
        asort($dates2);
        $date_close=($dates2);
        $cdate = $date_close[0];

        foreach ($date_close as $d) {
          $cdates = array(
            'date_of_action' => $d['date_of_action']
          );
          $dates3[]=$cdates;
        }
        $use_date = $cdates['date_of_action'];
        $info = $this->dts_model->track_docu_info($use_date,$track_num);
				foreach ($info as $r) {
					$emp2 = array(
						'employee_id' => $r['employee_id'],
						'document_id' => $r['document_id'],
						'document_status' => $r['document_status'],
						'action' => $r['action'],
						'date_of_action' => $r['date_of_action'],
						'signatory' => $r['signatory'],
						'document_title' => $r['document_title'],
					  'document_desc' => $r['document_desc']
					);
            $rec[]=$emp2;
        }
      	$employee=$emp2['employee_id'];
				$title=$emp2['document_title'];
				$action=$emp2['action'];
				$date=$emp2['date_of_action'];
				$from=$this->dts_model->track_docu_from($employee);
				foreach ($from as $r) {
 					$track_from = array(
 						'employee_id' => $r['employee_id'],
 						'department_id' => $r['department_id'],
 						'department_desc' => $r['department_desc']
 					);
				}
			 	$dept_desc = $track_from['department_desc'];
			 	$dept_id = $track_from['department_id'];
				$this->session->set_flashdata('track',
				'The File: '.$title. '<br/>Is in: '.$dept_desc.'<br/>Date Submitted: '.$date.'<br/>File is: '.$action);//.'<br/>Last handled by: '.$employee);
				redirect('home/index');
			}
			else if($emp['document_status']!='sent'){
				$this->session->set_flashdata('error1', 'File not yet accepted or invalid!');
				redirect('home/index');
			}
			}
			else{
				$this->session->set_flashdata('error1', 'Please Enter a Document ID!');
				redirect('home/index');
			}
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

			$user=$this->session->userdata('username');
			$header_data['title']="DTS";
			date_default_timezone_set('Asia/Manila');
			$time =date("h:i:sa");
			$date = date("Y-m-d");
			$data['time'] = $time;
			$data['date'] = $date;
			$data['username'] = $user;
			$this->load->view('header2',$header_data);
			$this->load->view('header');
			$this->load->view('home',$data);
			$this->load->view('footer');
		}

		else{
			redirect('home/index','refresh');
		}

	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->session_destroy();
		redirect('home/index','refresh');
	}

	public function docu(){
		$header_data['title']="All Documents";
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->model('dts_model');
		$documents = $this->dts_model->getDocuments();
		foreach($documents as $a){
			$as = array('document_file' => $a['document_file']);
			$type = explode('.', $a['document_title']);
			$type = strtolower($type[count($type)-1]);
			$url = "./uploads/".$a['document_title'];
//			print_r($as);
		}
		$this->load->view('documents',['do'=>$documents]);
		$this->load->view('footer');
	}

	// public function add(){
	// 	$header_data['title']="Add Documents";

	// 	$this->load->view('header2',$header_data);
	// 	$this->load->view('header');
	// 	$this->load->view('add');
	// 	$this->load->view('footer');
	// }

	public function profile(){
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$profile = $this->dts_model->get_profile($user);
		$inbox = $this->dts_model->get_profile_inbox($user);
		// $employid = $profile['employee_id'];
		$ul = array();
		foreach($inbox as $a){
			$as = array('document_file' => $a['document_file']);
			// print_r($as);
			$ul[] = $as;
		}
		$sent = $this->dts_model->get_profile_sent($user);
		$pending = $this->dts_model->get_inbox_pending($user);
		$employees = $this->dts_model->getEmployees($user);
		$header_data['title']="Profile";
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('profile',['pro'=>$profile,'inb'=>$inbox,'snt'=>$sent,'pen'=>$pending,'emp'=>$employees,'docu'=>$ul]);
		$this->load->view('footer');
	}
	public function download_docu(){

		//echo $this->input->post('track_num');
		// echo "hahaha";
		// if(isset($title)){
		//
		// 		$data = $this->input->post();
			if(isset($_GET['file'])){
				$filenam = array();
				$fileName = array('file' => $_GET['file']);
				print_r($fileName);
				echo "<br/>";
		//		print_r($title);
				$name = basename($_GET['file']);
				echo "<br/> basenaname <br/>";
				//print_r($name);
				$filePath = 'uploads/'.$name;
				echo "<br/>";
				print_r($filePath);
				$this->load->model('dts_model');
				if(!empty($fileName) && file_exists($filePath)){
					$name_dl= $name	;
					header('Content-Description: File Transfer');
					header('Content-Type: application/force-download');
					header("Content-Disposition: attachment; filename=\"" . $name_dl . "\";");
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate');
					header('Pragma: public');
					ob_clean();
					flush();
					readfile("uploads/".$name_dl); //show the path where the file is to be download
					exit;
				}
				else {
				//	$this->session->set_flashdata('error', 'Missing file!');
					return redirect('home/profile');
				}
			}
			else{
				return redirect('home/home');
			}

	}


	public function ajax_list()
	{
		$this->load->model('dts_model');
		$sent = $this->dts_model->get_by_id($this->input->post('id'));
		$signatories = $this->dts_model->get_ownSignatories($this->input->post('id'));
		$signatory = $this->dts_model->getSignatory_by_id($this->input->post('id'));
		$inbox = $this->dts_model->getInbox_by_id($this->input->post('id'));
		$output = array(

						"sent" => $sent,
						"signatories" => $signatories,
						"signatory" => $signatory,
						"inbox" => $inbox

				);
		//output to json format
		echo json_encode($output);
	}


	public function savesig(){

		$this->load->model('dts_model');
		$id = $this->input->post('docuno');
        $this->dts_model->saveAddSig();
        // $this->session->set_flashdata('response', 'Saved Succesfully!');

		return redirect('home/profile');
	}

	public function saverespond(){

		$this->load->model('dts_model');
        $this->dts_model->saveAddRes();
        // $this->session->set_flashdata('response', 'Saved Succesfully!');

		return redirect('home/profile');
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
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$profile = $this->dts_model->get_profile($user);

		// $userprof = $this->dts_model->get_user($user);
		// $output = array(

		// 				"userprof" => $userprof

		// 		);

		$header_data['title']="Edit Profile";
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('accountsettings', ['pro'=>$profile]);
		$this->load->view('footer');

		//output to json format
		//echo json_encode($output);
	}
	
	public function password_change(){
		
		$header_data['title']="Change Password";
		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('password_change');
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

             	$this->load->model('dts_model');
       			$this->dts_model->saveUpdate_user();

       			return redirect('home/profile');


        }
        else{
            	$user['username']=$this->session->userdata('username');
				$this->load->model('dts_model');
				$profile = $this->dts_model->get_profile($user);

		

				$header_data['title']="Edit Profile";
				$this->load->view('header2',$header_data);
				$this->load->view('header');
				$this->load->view('accountsettings', ['pro'=>$profile]);
				$this->load->view('footer');
        }
		
	}

	public function signup(){
		$header_data['title']="Sign Up";
		$this->load->view('header2',$header_data);
		$this->load->model('dts_model');
		$lastEmp = $this->dts_model->getLastEmployee();
		$departments = $this->dts_model->getDepartments();
		$this->load->view('signup', ['dp'=>$departments,'le'=>$lastEmp]);
		$this->load->view('footer');
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

			// print_r($office_id);
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

 // 	public function addDept($office_id){
 // 	$header_data['title']="Add Department";
 // 	$data['val'] = $office_id;
 // 	$this->load->model('dts_model');
 // 	$hold = $this->dts_model->getDepartment_id($office_id);
 // 	$data['dept_id'] = $hold;
 // 	$ar = $hold++;
 // 	$ar2 = array(1);
 // 	for($a=0;$a<=99;$a++){
 // 	if(isset($hold[$a])){
 // 	} else {
 // 		$num = $a+1;
 // 		break;
 // 	}
 // }
 // if($num<=9){
 // 	$id = $office_id.'0'.$num;
 // }
 // else{
 //  $id = $office_id.$num;
 // }
 // 	$data['id']=$id;
 // //print_r($hold);
 //
 // 	$this->load->view('header2',$header_data);
 // 	$this->load->view('header');
 // 	$this->load->view('addDept',$data);
 // 	$this->load->view('footer');
 // 	}
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
		//$this->form_validation->set_rules('document_id', 'Tracking No', 'required');
	  	//$this->form_validation->set_rules('document_title', 'Title', 'required');
	 	$this->form_validation->set_rules('document_desc', 'Description', 'required');
  		$this->form_validation->set_error_delimiters('<div class="text-danger bg-danger">', '</div>');

        if ($this->form_validation->run()){

               	//$data = $this->input->post();
               	$url = $this->do_upload();
             	$this->load->model('dts_model');
             	if (($this->dts_model->saveDocuments($url))&&($this->dts_model->saveDocumentation())){
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		// $this->session->set_flashdata('response', 'Failed to save!');
				 }
				return redirect('home/profile');

        }
        else{
        		$this->session->set_flashdata('responsed', 'Failed to save!(Please input necessary details)');
            	return redirect('home/profile');
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

		return redirect('home/profile');
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
            	$header_data['title']="Change Password";
				$this->load->view('header2',$header_data);
				$this->load->view('header');
				$this->load->view('password_change');
				$this->load->view('footer');
        }

	}

	public function create_member(){
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
	 	$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('mname', 'Middle Name', 'trim|required');
	 	$this->form_validation->set_rules('position', 'Position', 'trim|required');
	 	$this->form_validation->set_rules('sex', 'Sex', 'required');
	 	$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|max_length[20]|callback_check_if_username_exists');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]');
	 	$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');

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



}

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
			$employees = $this->dts_model->getEmployees($user);
			$inbox = $this->dts_model->get_profile_inbox($user);
			$status_count = $this->dts_model->getstatuscount();
			$stat=1;
			foreach($status_count as $s){
				$st = array(
					'status' => $s['status_id']
				);
				$stat=$stat+1;
			}
			$st[]=$status_count;
			$header_data['title']="DTS";
			date_default_timezone_set('Asia/Manila');
			$time =date("h:i:sa");
			$date = date("Y-m-d");
			$data['time'] = $time;
			$data['date'] = $date;
			$data['username'] = $user;
			$this->load->view('header2',$header_data);
			$this->load->view('home',['inb'=>$inbox,'emp'=>$employees,'do'=>$documents,'pro'=>$profile, 'sta'=>$stat]);
			$this->load->view('footer');
		}

		else{
			redirect('home/index','refresh');
		}
	}

	public function docu(){
		$header_data['title']="All Documents";
		$this->load->view('header2',$header_data);
		//$this->load->view('header');
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$profile = $this->dts_model->get_profile($user);
		$employees = $this->dts_model->getEmployees($user);
		$sent = $this->dts_model->get_profile_sent($user);
		$inbox = $this->dts_model->get_profile_inbox($user);
		$status_count = $this->dts_model->getstatuscount();
		$stat=1;
		foreach($status_count as $s){
			$st = array(
				'status' => $s['status_id']
			);
			$stat=$stat+1;
		}
		$st[]=$status_count;
		$this->load->view('documents',['pro'=>$profile,'emp'=>$employees,'snt'=>$sent,'inb'=>$inbox, 'sta'=>$stat]);
		$this->load->view('footer');
	}

	public function sent($id){
		$header_data['title']="Sent File";
			$user['username']=$this->session->userdata('username');
			$this->load->model('dts_model');
			$profile = $this->dts_model->get_profile($user);
			$sent = $this->dts_model->get_by_id($id);
			$employees = $this->dts_model->getEmployees($user);
			$inbox = $this->dts_model->get_profile_inbox($user);
		$this->load->view('header2',$header_data);
	 	$this->load->view('sent',['inb'=>$inbox,'emp'=>$employees,'pro'=>$profile,'idno'=>$id,'snt'=>$sent]);
		$this->load->view('footer');
	}

	public function inbox($id,$employ){
		$header_data['title']="Inbox File";
			$user['username']=$this->session->userdata('username');
			$this->load->model('dts_model');
			$profile = $this->dts_model->get_profile($user);
			$inbox = $this->dts_model->getInbox_by_id($id,$employ);
			$origin = $this->dts_model->get_origin($id);
			$status = $this->dts_model->getStatus();
			//$sent = $this->dts_model->get_by_id($id);
			$employees = $this->dts_model->getEmployees($user);
		$this->load->view('header2',$header_data);
	 	$this->load->view('inbox',['stat'=>$status,'emp'=>$employees,'pro'=>$profile,'idno'=>$id,'employee'=>$employ,'inb'=>$inbox,'orig'=>$origin]);
		$this->load->view('footer');
	}


	//OFFICES & EMPLOYEES
	public function offices(){
			$header_data['title']="Offices";
			$user['username']=$this->session->userdata('username');
			$this->load->model('dts_model');
			$profile = $this->dts_model->get_profile($user);
			$hold = $this->dts_model->getOffices();
			$employees = $this->dts_model->getEmployees($user);
			$data['offices'] = $hold;
			//print_r($data);
			$inbox = $this->dts_model->get_profile_inbox($user);
			$status_count = $this->dts_model->getstatuscount();
			$stat=1;
			foreach($status_count as $s){
				$st = array(
					'status' => $s['status_id']
				);
				$stat=$stat+1;
			}
			$this->load->view('header2',$header_data);
			//$this->load->view('header');
			$this->load->view('offices',['inb'=>$inbox,'offices'=>$hold,'pro'=>$profile,'emp'=>$employees, 'sta'=>$stat]);
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
						$employees = $this->dts_model->getEmployees($user);
			// print_r($office_id);
			// echo "Pasok";
			$inbox = $this->dts_model->get_profile_inbox($user);
			$this->load->view('header2',$header_data);
			//$this->load->view('header');
			$this->load->view('departments',['inb'=>$inbox,'emp'=>$employees,'dept'=>$data['dept'],'id'=>$data['id'],'dept_id'=>$data['dept_id'],'pro'=>$profile,'office'=>$office_id]);
			$this->load->view('footer');
	}

	public function deptEmployees($department_id,$office_id){
			$header_data['title']="Department's Employees";
			$condition = array('department_id'=>$department_id);
			$this->load->model('dts_model');
			$hold = $this->dts_model->getEmployee($condition);
			$user['username']=$this->session->userdata('username');
			$profile = $this->dts_model->get_profile($user);
			$employees = $this->dts_model->getEmployees($user);
			$data['employees'] = $hold;
			$data['title'] = "None";
			$inbox = $this->dts_model->get_profile_inbox($user);
			$this->load->view('header2',$header_data);
			//$this->load->view('header');
			$this->load->view('department/employee',['inb'=>$inbox,'emp'=>$employees,'employees'=>$data['employees'],'pro'=>$profile,'office'=>$office_id]);
			$this->load->view('footer');
	}

	public function contacts(){
		$header_data['title']="Contacts";
			$user['username']=$this->session->userdata('username');
			$this->load->model('dts_model');
			$profile = $this->dts_model->get_profile($user);
			$employees = $this->dts_model->getEmployees($user);
		$this->load->view('header2',$header_data);
		//$this->load->view('header');
		$inbox = $this->dts_model->get_profile_inbox($user);
		$status_count = $this->dts_model->getstatuscount();
		$stat=1;
		foreach($status_count as $s){
			$st = array(
				'status' => $s['status_id']
			);
			$stat=$stat+1;
		}
	 	$this->load->view('contacts',['inb'=>$inbox,'emp'=>$employees,'pro'=>$profile, 'sta'=>$stat]);
		$this->load->view('footer');
	}

	public function profile(){
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$profile = $this->dts_model->get_profile($user);
		$employees = $this->dts_model->getEmployees($user);
		$header_data['title']="Profile";
		$this->load->view('header2',$header_data);
		$inbox = $this->dts_model->get_profile_inbox($user);
		$status_count = $this->dts_model->getstatuscount();
		$stat=1;
		foreach($status_count as $s){
			$st = array(
				'status' => $s['status_id']
			);
			$stat=$stat+1;
		}
		$this->load->view('profile',['inb'=>$inbox,'emp'=>$employees,'pro'=>$profile, 'sta'=>$stat]);
		$this->load->view('footer');
	}

	public function edit(){
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$profile = $this->dts_model->get_profile($user);
		$employees = $this->dts_model->getEmployees($user);
		$header_data['title']="Edit Profile";
		$inbox = $this->dts_model->get_profile_inbox($user);
		$this->load->view('header2',$header_data);
		$this->load->view('accountsettings', ['inb'=>$inbox,'emp'=>$employees,'pro'=>$profile]);
		$this->load->view('footer');
	}

	public function ajax_list()
	{
		$this->load->model('dts_model');
		$status = $this->dts_model->getStatus();
		// $sent = $this->dts_model->get_by_id($this->input->post('id'));
		// $signatories = $this->dts_model->get_ownSignatories($this->input->post('id'));
		// $signatory = $this->dts_model->getSignatory_by_id($this->input->post('id'));
		// $inbox = $this->dts_model->getInbox_by_id($this->input->post('id'));
		$output = array(

						"stat" => $status

				);
		//output to json format
		echo json_encode($output);
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


				$inbox = $this->dts_model->get_profile_inbox($user);
				$header_data['title']="Edit Profile";
				$this->load->view('header2',$header_data);
				$employees = $this->dts_model->getEmployees($user);
				//$this->load->view('header');
				$this->load->view('accountsettings', ['inb'=>$inbox,'emp'=>$employees,'pro'=>$profile]);
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
		$employees = $this->dts_model->getEmployees($user);
		$inbox = $this->dts_model->get_profile_inbox($user);
		$header_data['title']="Change Password";
		$this->load->view('header2',$header_data);
		//$this->load->view('header');
		$this->load->view('password_change',['inb'=>$inbox,'emp'=>$employees,'pro'=>$profile]);
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
				$employees = $this->dts_model->getEmployees($user);
            	$header_data['title']="Change Password";
				$this->load->view('header2',$header_data);
				$inbox = $this->dts_model->get_profile_inbox($user);
				//$this->load->view('header');
				$this->load->view('password_change',['inb'=>$inbox,'emp'=>$employees,'pro'=>$profile]);
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

	public function do_upload(){
		$type = explode('.', $_FILES["file"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./uploads/".uniqid(rand()).'.'.$type;

		if(in_array($type, array("pdf")))
					if(is_uploaded_file($_FILES["file"]["tmp_name"]))
						if(move_uploaded_file($_FILES["file"]["tmp_name"],$url))
								return $url;

		return redirect('home/docu');
	}

	public function save(){
	  	$this->form_validation->set_rules('document_title', 'Title', 'required');
	 	$this->form_validation->set_rules('document_desc', 'Description', 'required');
  		$this->form_validation->set_error_delimiters('<div class="text-danger bg-danger">', '</div>');

        if ($this->form_validation->run()){

               	//$data = $this->input->post();
               	$url = $this->do_upload();
             	$this->load->model('dts_model');
             	if (($this->dts_model->saveDocuments($url))&&($this->dts_model->saveDocumentation())&&($this->dts_model->saveHistory())){
             		$this->session->set_flashdata('response', 'Sent Succesfully!');
				 }
				 else{
             		// $this->session->set_flashdata('response', 'Failed to save!');
				 }
				return redirect('home/docu');

        }
        else{
        		$this->session->set_flashdata('responsed', 'Failed to send!(Please input necessary details)');
            	return redirect('home/docu');
        }
	}

	public function update_file(){
	  	$this->load->model('dts_model');
        $this->dts_model->update_history();
        $this->dts_model->update_documentation();
        return redirect('home/docu');
	}

	public function forward_file(){
	  	$this->load->model('dts_model');
        $this->dts_model->forward_history();
        $this->dts_model->forward_documentation();
        return redirect('home/docu');
	}

	public function return_file(){
	  	$this->load->model('dts_model');
        $this->dts_model->return_history();
        $this->dts_model->return_documentation();
        return redirect('home/docu');
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->session_destroy();
		redirect('home/index','refresh');
	}

	//track docu not ajax :(
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
						'tracking_no' => $r['tracking_no'],
						'document_status' => $r['document_status'],
						'status' => $r['status'],
						'date_of_action' => $r['date_of_action'],
						'document_title' => $r['document_title'],
					  'document_desc' => $r['document_desc'],
					  'date_created' => $r['date_created'],
					);
            $rec[]=$emp2;
        }
      	$employee=$emp2['employee_id'];
				$title=$emp2['document_title'];
				$action=$emp2['status'];
				$date=$emp2['date_created'];
				$tracking_no=$emp2['tracking_no'];
				$from=$this->dts_model->track_docu_from($employee);
				foreach ($from as $r) {
 					$track_from = array(
 						'employee_id' => $r['employee_id'],
 						'department_id' => $r['department_id'],
 						'department_desc' => $r['department_desc']
 					);
				}
				print_r($action);
			 	$dept_desc = $track_from['department_desc'];
			 	$dept_id = $track_from['department_id'];
				$this->session->set_flashdata('track',
				'The File: '.$tracking_no. '<br/>Title: '.$title.'<br/>Is in: '.$dept_desc.'<br/>Date Submitted: '.$date.'<br/>File is: '.$action);//.'<br/>Last handled by: '.$employee);
				// 'The File: '.$tracking_no. '<br/>Title: '.$title.'<br/>Is in: '.$dept_desc.'<br/>Date Submitted: '.$date);//.'<br/>Last handled by: '.$employee);
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

		//veiw document new table
	public function view_docu(){
		if(isset($_GET['file'])){
			// $filenam = array();
			$fileName = array('file' => $_GET['file']);
			// print_r($fileName);
			// echo "<br/>";
			$name = basename($_GET['file']);
			// echo "<br/> basenaname <br/>";
			$filePath = 'uploads/'.$name;
			$filenam = $name.'.pdf';
			// echo "<br/>";
			// print_r($filePath);
			$this->load->model('dts_model');
			if(!empty($fileName) && file_exists($filePath)){
				// $file = $filepath;
				$filename = $name;
				header('Content-type: application/pdf');
				header('Content-Disposition: inline; filename="'.$filename.'"');
				header('Content-Transfer-Encoding: binary');
				header('Accept-Ranges: bytes');
				ob_clean();
				flush();
				readfile("uploads/".$filename);
				exit;

			}
			else {
				// return redirect('home/docu');
			}
		}
		else{
			// return redirect('home/docu');
		}

	}
	public function history(){
	$user['username']=$this->session->userdata('username');
	$this->load->model('dts_model');
	// $origin = $this->dts_model->sender($this->input->post('id'));
	$track_no = $this->input->post('id');
	$origin = $this->dts_model->sender($track_no,$user);
	$recipient = $this->dts_model->docu_flow($track_no,$user);
	$end = $this->dts_model->end($track_no,$user);
	if($origin != null){
	$output = array(
		'origin' => $origin,
		'recipient' => $recipient,
		'end' => $end,
		'con' => "true"
		// 'user' => $user
	);
	}
	else if ($origin==null){
		$output = array(
			'con'=> "false"
			// 'user' => $user
		);
	}
	// print_r($user);
	// echo $user;
	echo json_encode($output);
	}
	public function new_status(){
	  	$this->form_validation->set_rules('status_id', 'status_id', 'required');
	 	$this->form_validation->set_rules('status_desc', 'status_desc', 'required');
			// $this->form_validation->set_rules('forward', 'forward', 'required');
  		// $this->form_validation->set_error_delimiters('<div class="text-danger bg-danger">', '</div>');

        if ($this->form_validation->run()){
					$statusnew = array(
						'status_desc' => $_POST['status_desc']
						// 'forward' => $_POST['forward']
					);
					$this->load->model('dts_model');
						// $new_status = $this->dts_model->make_status($statusnew);
						if($this->dts_model->make_status($statusnew)){
							// $this->session->set_flashdata('response', 'Save success!');
							return redirect('home/home');
					}
				 }
				//  else{
					//  echo("asas");
				//  }
				// return redirect('home/docu');

        }

}

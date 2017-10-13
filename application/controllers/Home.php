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

	public function add(){
		$header_data['title']="Add Documents";

		$this->load->view('header2',$header_data);
		$this->load->view('header');
		$this->load->view('add');
		$this->load->view('footer');
	}

	public function profile(){
		$user['username']=$this->session->userdata('username');
		$this->load->model('dts_model');
		$profile = $this->dts_model->get_profile($user);
		$inbox = $this->dts_model->get_profile_inbox($user);
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
	public function download_docu($inbox){
		if(isset($inbox)){
				$data = $this->input->post();
			if(isset($_GET['file'])){
				$filenam = array();
				$fileName = array('file' => $_GET['file']);
				print_r($fileName);
				echo "<br/>";
				print_r($inbox);
				$name = basename($_GET['file']);
				echo "<br/> basenaname <br/>";
				print_r($name);
				$filePath = 'uploads/'.$name;
				echo "<br/>";
				print_r($filePath);
				$this->load->model('dts_model');
				//$DL = $this->dts_model->download_file($fileName,$inbox);
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
					return redirect('home/profile');
				}
	//			print_r($ul);
			}
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


	public function contacts(){
		$header_data['title']="Contacts";



		$this->load->view('header2',$header_data);
		$this->load->view('header');
	 		$this->load->view('contacts');
		$this->load->view('footer');
	}
}

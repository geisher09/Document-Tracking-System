<?php

	class dts_model extends CI_Model{

		public function getDocuments(){
			$this->db->select('d.document_id,d.document_title,d.document_file,d.tracking_no,do.action,do.approved,do.rejected');
		    $this->db->from('document d');
		    $this->db->join('documentation do', 'do.document_id=d.document_id');
		    // $stat="sent";
		    // $this->db->where('do.document_status', $stat);
		    $query = $this->db->get();
		    if($query->num_rows() != 0)
		    {
		        return $query->result_array();
		    }
		    else
		    {
		        return false;
		    }

		}
		public function download_file($fileName,$inbox){
			$this->db->select('document_file');
		    $this->db->from('document');
		    $this->db->where('document_title', $inbox);
		    $query = $this->db->get();
				return $query->result_array();
		}

		public function getLastDoc(){
			$query = $this->db->get('document');

			return $query->num_rows();
		}

		public function saveDocuments($url){
			$id = ($this->getLastDoc())+1;
			date_default_timezone_set('Asia/Manila');
			$yr=date('ymd');
			$length = 5;
			$randomletter = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

			$ddata = array(
				  'document_id' => $id,
				  'tracking_no' => $yr.'-'.$randomletter.'-'.$id,
			      'document_title' => $this->input->post('document_title') ,
			      'document_desc' => $this->input->post('document_desc') ,
			      'document_file' => $url
			   );

			return $this->db->insert('document', $ddata);
		}

		public function saveDocumentation(){
			$id = ($this->getLastDoc());

			$docdata = array(
				  'employee_id' =>	$this->input->post('empid'),
				  'document_id' => $id,
				  'action' => 'Pending',
				  'signatory' => 0
			   );

			return $this->db->insert('documentation', $docdata);
		}

		public function saveDepartment($data,$data2){
			$this->db->set('office_id',$data2);
			return $this->db->insert('department', $data);
		}

		public function getLastEmployee(){
			$query = $this->db->get('employee');
			$maxid = $query->num_rows();
			return $maxid+1;

		}

		public function check_if_username_exists($username){
			$this->db->where('username', $username);
			$result = $this->db->get('employee');

			if ($result->num_rows()>0) {
				return FALSE;
			} else{
				return TRUE;
			}
		}

		public function check_if_password_match($password,$user){
			$pass = (md5($password));
			$this->db->select('*');
			$this->db->from('employee');
			$this->db->where('username',$user['username']);
			$this->db->where('password',$pass);
			$query = $this->db->get('');

			if ($query->num_rows()==1) {
				return TRUE;
			} else{
				return FALSE;
			}
		}

		public function check_if_username_exists2($username,$user){

			$this->db->where('username', $username);
			$this->db->where_not_in('username', $user['username']);
			$result = $this->db->get('employee');

			if ($result->num_rows()>=1) {
				return FALSE;
			} else{
				return TRUE;
			}
		}

		// public function login($username,$password){
		// 	$this->db->select('employee_id,username,lname,fname,mname,password');
		// 	$this->db->from('employee');
		// 	$this->db->where('username',$username);
		// 	$this->db->where('password',$password)
		// }

		public function can_login($username){
			$password = md5($this->input->post('password'));
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get('employee');
			//Select * from employee table

			if($query->num_rows() == 1){
				return true;
			}

			else{
				return false;
			}

		}

		public function get_profile($user){

			$this->db->select('a.username,a.image,a.lname,a.fname,a.mname,b.department_desc,a.employee_id,a.department_id,b.department_id,a.position');
			$this->db->from('employee a');
			$this->db->join('department b','a.department_id = b.department_id');
			$this->db->where('a.username',$user['username']);
			$result = $this->db->get();


			// $this->db->where('username', $user['username']);
			// $result = $this->db->get('employee');

			 return $result->result_array();
		}

		public function get_profile2($user){

			$this->db->select('a.username,a.image,a.lname,a.fname,a.mname,b.department_desc,a.employee_id,a.department_id,b.department_id,a.position');
			$this->db->from('employee a');
			$this->db->join('department b','a.department_id = b.department_id');
			$this->db->where('a.username',$user);
			$result = $this->db->get();


			// $this->db->where('username', $user['username']);
			// $result = $this->db->get('employee');

			 return $result->result_array();
		}

		public function get_user($user){

			$this->db->select('a.username,a.image,a.lname,a.fname,a.mname,b.department_desc,a.employee_id,a.department_id,b.department_id,a.position');
			$this->db->from('employee a');
			$this->db->join('department b','a.department_id = b.department_id');
			$this->db->where('a.username',$user['username']);
			$result = $this->db->get();

			 return $result->row();
		}

		public function get_profile_inbox($user){

			$this->db->where('username', $user['username']);
			$result = $this->db->get('employee');

			$id = $result->row('employee_id');

			// $stat = "received";

			$this->db->select('a.signatory_id,a.employee_id,a.document_id,a.response,a.comment,b.tracking_no,b.document_desc, b.document_id,b.document_title,b.document_file'); //for download
			$this->db->from('signatory a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->where('a.employee_id', $id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_profile_sent($user){

			$this->db->where('username', $user['username']);
			$result = $this->db->get('employee');

			$id = $result->row('employee_id');



			$this->db->select('a.employee_id,a.document_id,b.tracking_no,b.document_id,b.document_title,b.document_file,a.action');
			$this->db->from('documentation a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->where('a.employee_id', $id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getEmployees($user){
			$this->db->select('*');
			$this->db->from('employee');
			$this->db->where_not_in('username', $user['username']);
			$query = $this->db->get();
			return $query->result();

		}

		public function get_by_id($id)
		{

			$this->db->select('a.document_id,b.document_id,b.tracking_no,b.document_desc,a.signatory,a.action,a.date_of_action,b.document_title');
			$this->db->from('documentation a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->where('a.document_id',$id);
			$query = $this->db->get();

			return $query->row();
		}

		public function getSignatory_by_id($id)
		{

			$this->db->select('a.signatory_id,a.employee_id,b.employee_id,a.response,a.comment,a.document_id,b.lname,b.fname,b.mname,a.date_responded');
			$this->db->from('signatory a');
			$this->db->join('employee b','a.employee_id = b.employee_id');
			$this->db->where('a.signatory_id',$id);
			$query = $this->db->get();



			return $query->row();
		}

		public function get_ownSignatories($id){
			$this->db->select('a.document_id,b.document_id,b.response,b.employee_id,b.signatory_id');
			$this->db->from('documentation a');
			$this->db->join('signatory b','a.document_id = b.document_id');
			$this->db->where('a.document_id',$id);
			$query = $this->db->get();

			return $query->result_array();
		}

		public function getInbox_by_id($id){
			$this->db->select('a.signatory_id,a.response,a.comment,a.document_id,a.date_responded,b.tracking_no,b.document_id,b.document_title,b.document_desc,c.employee_id,c.document_id,d.employee_id,d.lname,d.fname,d.mname');
			$this->db->from('signatory a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->join('documentation c', 'a.document_id = c.document_id');

			$this->db->join('employee d', 'c.employee_id = d.employee_id');
			$this->db->where('a.signatory_id',$id);
			$query = $this->db->get();

			return $query->row();
		}


		public function get_inbox_pending($user){
			$this->db->where('username', $user['username']);
			$result = $this->db->get('employee');

			$id = $result->row('employee_id');

			$stat = "received";
			$act = "Pending";
			$this->db->select('a.employee_id,a.document_id,b.document_id,b.document_title,a.action,');
			$this->db->from('documentation a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->where('a.employee_id', $id);
			$this->db->where('a.action', $act);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function saveMember(){
			$username = $this->input->post('username');
			$lastid = $this->getLastEmployee();
			$sex = $this->input->post('sex');
			$now = date('y');
			if($sex=='male'){
				$data = array(
				'fname' =>$this->input->post('fname'),
				'lname'	=>$this->input->post('lname'),
				'mname'	=>$this->input->post('mname'),
				'sex'	=>$this->input->post('sex'),
				'position'	=>$this->input->post('position'),
				'department_id'	=>$this->input->post('department'),
				'employee_id'	=>$now.'-'.$this->input->post('department').'-'.$lastid,
				'password'	=>md5($this->input->post('password')),
				'username'	=>$this->input->post('username'),
				'image' => './images/male.png'
			);

			$insert = $this->db->insert('employee', $data);
			return $insert;
			}else{
				$data = array(
				'fname' =>$this->input->post('fname'),
				'lname'	=>$this->input->post('lname'),
				'mname'	=>$this->input->post('mname'),
				'sex'	=>$this->input->post('sex'),
				'position'	=>$this->input->post('position'),
				'department_id'	=>$this->input->post('department'),
				'employee_id'	=>$now.'-'.$this->input->post('department').'-'.$lastid,
				'password'	=>md5($this->input->post('password')),
				'username'	=>$this->input->post('username'),
				'image' => './images/female.png'
			);

			$insert = $this->db->insert('employee', $data);
			return $insert;
			}


		}

		public function saveUpdate_user($user){
			//$_SESSION['username'] = $this->input->post('username');
			$id = $this->input->post('user_id');
			$user = array(
				'fname' =>$this->input->post('fname'),
				'lname'	=>$this->input->post('lastname'),
				'mname'	=>$this->input->post('mname'),
				'position'	=>$this->input->post('position'),
				'department_id'	=>$this->input->post('dept'),
				'username'	=>$this->input->post('username')
			);
			$this->db->set('lname',$user['lname']);
			$this->db->set('fname',$user['fname']);
			$this->db->set('mname',$user['mname']);
			$this->db->set('position',$user['position']);
			$this->db->set('username',$user['username']);
			$this->db->set('department_id',$user['department_id']);
			$this->db->where('employee_id', $id);
			$this->db->update('employee');

		}

		public function saveUpdate_pass($user){
			$data = array(
				'password' => $this->input->post('password_change')
			);
			$password = md5($data['password']);
			$this->db->set('password',$password);
			$this->db->where('username', $user['username']);
			$this->db->update('employee');
		}

		public function savePic($url,$user){
			$data = array(
				'image' => $url
			);

			$this->db->set('image',$data['image']);
			$this->db->where('username', $user['username']);
			$this->db->update('employee');
		}

		public function saveAddSig(){
			$id = $this->input->post('adddocuno');
			$sigdata = $this->get_by_id($this->input->post('adddocuno'));
			date_default_timezone_set('Asia/Manila');
			$time =date("h:i:sa");
			$date = date("Y-m-d");
			$data['date'] = $date;
			$data['time'] = $time;
			$sdata = array(
				  'signatory_id' => '',
			      'employee_id' => $this->input->post('employee'),
			      'document_id' => $this->input->post('adddocuno') ,
			      'response' => 'Pending' ,
			      'comment' => 'none' ,
			      'date_responded' => $data['date'].' '.$data['time']
			   );
			//print_r($pdata);
			$this->db->set('signatory',((int)($sigdata->signatory)+1));
			$this->db->where('document_id', $id);
			$this->db->update('documentation');


			return $this->db->insert('signatory', $sdata);
		}


		public function saveAddRes(){
			$id = $this->input->post('doc_id');
			$rid = $this->input->post('sig_id');
			$resdata = $this->get_by_id($this->input->post('doc_id'));
			date_default_timezone_set('Asia/Manila');
			$time =date("h:i:sa");
			$date = date("Y-m-d");
			$data['date'] = $date;
			$data['time'] = $time;

			$response = $this->input->post('response');
			$comment = $this->input->post('comment');
			$date = $data['date'].' '.$data['time'];
			$app="Approved";
			$rej="Rejected";
			//print_r($pdata);



			if($response=="Approved"){
				$this->db->set('approved', 'approved + 1', FALSE);
				$this->db->where('document_id', $id);
				$this->db->update('documentation');

				$this->db->select('*');
			    $this->db->from('documentation');
			    $this->db->where('document_id',$id);
			    $query = $this->db->get();
				$result = ((int)($query->row('approved')));
				$signs = ((int)($query->row('signatory')));
				$resultrej = ((int)($query->row('rejected')));

				if(($result)+1==($signs+1)){
					$this->db->set('action',$app);
					$this->db->set('date_of_action',$date);
					$this->db->where('document_id', $id);
					$this->db->update('documentation');
				}
				elseif(((($result)+1)+($resultrej))==($signs+1)){
					$this->db->set('action',$rej);
					$this->db->set('date_of_action',$date);
					$this->db->where('document_id', $id);
					$this->db->update('documentation');
				}
			}

			elseif($response=="Rejected"){
				$this->db->set('rejected', 'rejected + 1', FALSE);
				$this->db->where('document_id', $id);
				$this->db->update('documentation');

				$this->db->select('*');
			    $this->db->from('documentation');
			    $this->db->where('document_id',$id);
			    $query = $this->db->get();
				$result = ((int)($query->row('rejected')));
				$signs = ((int)($query->row('signatory')));
				$resultapp = ((int)($query->row('approved')));

				if(($result)+1==($signs+1)){
					$this->db->set('action',$rej);
					$this->db->set('date_of_action',$date);
					$this->db->where('document_id', $id);
					$this->db->update('documentation');
				}
				elseif(((($result)+1)+($resultapp))==($signs+1)){
					$this->db->set('action',$rej);
					$this->db->set('date_of_action',$date);
					$this->db->where('document_id', $id);
					$this->db->update('documentation');
				}
			}

			$this->db->set('response',$response);
			$this->db->set('comment',$comment);
			$this->db->set('date_responded',$date);
			$this->db->where('signatory_id', $rid);
			$this->db->update('signatory');
		}

		public function getDepartments(){
			$query = $this->db->get('department');
			return $query->result();

		}

		public function getOffices()
		{
			$this->db->select('*');
			$this->db->from('office');
			// $this->db->from('department');
			$query= $this->db->get();
			return $query-> result_array();
		}

		public function getDepartment2($condition) //for offices and employees
		{
			$this->db->select('*');
			$this->db->from('department');
			// $this->db->from('department');

			if ( isset($condition)) $this->db->where($condition);
			$query= $this->db->get();
			return $query-> result_array();
		}

		public function getDepartment_id($condition)
		{
			$this->db->select('department_id');
			$this->db->where('office_id', $condition);
			$this->db->from('department');
			$query= $this->db->get();
			return $query-> result_array();
		}

		public function getEmployee($condition){
			$this->db->select('*');
			$this->db->from('employee');
			if ( isset($condition)) $this->db->where($condition);
			$query= $this->db->get();
			return $query-> result_array();
		}
		public function track_docu_latest_date($track_num){ //get the latest date of the file
			$this->db->select('*');
			$this->db->from('documentation');
			if ( isset($track_num)) {
				$this->db->where('document_id',$track_num);
			}
			$query= $this->db->get();
			return $query-> result_array();
		}
		public function track_docu_info($cdate,$track_num){  //track the file with the latest date and info
			$this->db->select('*');
			$this->db->from('documentation');
			$this->db->join('document', 'documentation.document_id=document.document_id');
			if ( isset($cdate,$track_num)) {
				$this->db->where('documentation.document_id',$track_num);
				$this->db->where('documentation.date_of_action',$cdate);
			}
			$query= $this->db->get();
			return $query-> result_array();
		}
		public function track_docu_from($employee){ //track the department
			$this->db->select('*');
			$this->db->from('employee');
			$this->db->join('department', 'employee.department_id=department.department_id');
			if ( isset($employee)) {
				$this->db->where('employee.employee_id',$employee);
			}
			$query= $this->db->get();
			return $query-> result_array();
		}

		//proper tracking of document
		public function countSigantories($document_id){
			//DOCUMENTATION.REJECTED | DOCUMENTATION.APPROVED | DOCUMENTATION.DOCUMENT_ID | SIGNATORY.SIGNATORY_ID | SIGNATORY.RESPONSE
			$this->db->select('*');
			$this->db->from('sigantory');
			$this->db->insert('documentation', 'signatory.document_id = documentation.document_id');
			if ( isset($employee)) {
      	$this->db->where('signatory.document_id',$document_id);
			}
			$query= $this->db->get();
			return $query-> result_array();


		}

		//File History
	public function get_file_status($track_num){
		$this->db->select('documentation.action');
		$this->db->from('documentation');
		$this->db->join('document', 'document.document_id = documentation.document_id');  //document's info
		$this->db->join('employee', 'employee.employee_id = documentation.employee_id');
		$this->db->where('documentation.document_id', $track_num);
		$query = $this->db->get();
		return $query-> result_array();
		// return $query->row();
	}

	public function get_file_origin($track_num){
		$this->db->select('documentation.document_id, documentation.employee_id, documentation.action, documentation.date_of_action,
											document.document_title, document.document_desc,
											employee.lname, employee.fname, employee.mname,
											department.department_desc');
		$this->db->from('documentation');
		$this->db->join('document', 'document.document_id = documentation.document_id');  //document's info
		$this->db->join('employee', 'employee.employee_id = documentation.employee_id');
		$this->db->join('department', 'department.department_id = employee.department_id');
		$this->db->where('documentation.document_id', $track_num);
		$query = $this->db->get();
		// return $query-> result_array();
		return $query->row();

	}

	public function signa_date($track_num){
		$this->db->select('signatory.date_responded');
		$this->db->from('signatory');
		$this->db->join('documentation', 'signatory.document_id = documentation.document_id');
		$this->db->join('employee', 'employee.employee_id = signatory.employee_id');
		$this->db->join('department', 'department.department_id = employee.department_id');
		$this->db->where('documentation.document_id',$track_num);
		$query = $this->db->get();
		return $query-> result_array();

	}
	public function rejected($track_num){
		$this->db->select('documentation.document_id,,
											signatory.employee_id, signatory.response, signatory.comment, signatory.date_responded,
											employee.department_id,employee.lname, employee.fname, employee.mname,
											department.department_desc');
		$this->db->from('signatory');
		$this->db->join('documentation', 'signatory.document_id = documentation.document_id');
		$this->db->join('employee', 'employee.employee_id = signatory.employee_id');
		$this->db->join('department', 'department.department_id = employee.department_id');
		$this->db->where('documentation.document_id',$track_num);
		$this->db->where('signatory.response', "Rejected");
		$query = $this->db->get();
		return $query->row();
	}
	public function approved($track_num){
		$this->db->select('documentation.document_id,,
											signatory.employee_id, signatory.response, signatory.comment, signatory.date_responded,
											employee.department_id,employee.lname, employee.fname, employee.mname,
											department.department_desc');
		$this->db->from('signatory');
		$this->db->join('documentation', 'signatory.document_id = documentation.document_id');
		$this->db->join('employee', 'employee.employee_id = signatory.employee_id');
		$this->db->join('department', 'department.department_id = employee.department_id');
		$this->db->where('documentation.document_id',$track_num);
		$this->db->where('signatory.response', "Approved");
		$query = $this->db->get();
		// return $query-> result_array();
		return $query-> row();
	}
	public function pending($track_num){
		$this->db->select('documentation.document_id,,
											signatory.employee_id, signatory.response, signatory.comment, signatory.date_responded,
											employee.department_id,employee.lname, employee.fname, employee.mname,
											department.department_desc');
		$this->db->from('signatory');
		$this->db->join('documentation', 'signatory.document_id = documentation.document_id');
		$this->db->join('employee', 'employee.employee_id = signatory.employee_id');
		$this->db->join('department', 'department.department_id = employee.department_id');
		$this->db->where('documentation.document_id',$track_num);
		$this->db->where('signatory.response', "Pending");
		$query = $this->db->get();
		return $query->row();
	}
	}

?>

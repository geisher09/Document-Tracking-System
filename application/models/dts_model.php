<?php

	class dts_model extends CI_Model{

		public function getDocuments($user){
			$this->db->select('a.document_id,a.document_title,a.document_file,a.tracking_no,b.status,b.employee_id,c.employee_id,c.username');
		    $this->db->from('document a');
		    $this->db->join('documentation b', 'b.document_id=a.document_id');
		    $this->db->join('employee c', 'b.employee_id=c.employee_id');
		    $this->db->where('c.username',$user['username']);
		    $query = $this->db->get();
		   	return $query->result_array();

		}

		public function can_login($username){
			$user=0;
			$password = md5($this->input->post('password'));
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$this->db->where('isAdmin',$user);
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

		public function getEmployees($user){
			$this->db->select('*');
			$this->db->from('employee');
			$this->db->where_not_in('username', $user['username']);
			$query = $this->db->get();
			return $query->result();

		}

		public function getDepartments(){
			$query = $this->db->get('department');
			return $query->result();

		}

		public function getStatus(){
			$this->db->select('*');
			$this->db->from('status');
			$query = $this->db->get();
			return $query->result();

		}

		public function get_user($user){

			$this->db->select('a.username,a.image,a.lname,a.fname,a.mname,b.department_desc,a.employee_id,a.department_id,b.department_id,a.position');
			$this->db->from('employee a');
			$this->db->join('department b','a.department_id = b.department_id');
			$this->db->where('a.username',$user['username']);
			$result = $this->db->get();

			 return $result->row();
		}

		public function get_profile_sent($user){
			$this->db->select('a.document_id,a.document_title,a.document_file,a.tracking_no,a.date_created,b.status,b.employee_id,c.employee_id,c.username');
		    $this->db->from('document a');
		    $this->db->join('documentation b', 'b.document_id=a.document_id');
		    $this->db->join('employee c', 'b.employee_id=c.employee_id');
		    $this->db->order_by('a.date_created','DESC');
		    $this->db->where('c.username',$user['username']);
		    $query = $this->db->get();

		    return $query->result_array();
		}

		public function get_profile_inbox($user){

			$this->db->where('username', $user['username']);
			$result = $this->db->get('employee');

			$id = $result->row('employee_id');

			$this->db->select('a.document_id,a.status,a.date_of_action,a.recipient,
				b.document_id,b.tracking_no,b.document_title,b.document_desc,b.document_file,b.date_created,
				c.document_id,c.response,c.employee_id,c.comment,c.date_responded,c.sender,c.history_no,
				d.employee_id,d.department_id,d.username,d.lname,d.fname,d.image,d.mname,f.history_no
			');
			$this->db->from('documentation a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->join('history c','a.document_id = c.document_id');
			$this->db->join('history f','c.document_id = f.document_id AND c.history_no < f.history_no','left');
			$this->db->join('employee d','c.sender = d.employee_id');
 			$this->db->where('c.employee_id', $id);
 			$this->db->where('f.history_no IS NULL');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getInbox_by_id($id,$employ){
			$this->db->where('tracking_no', $id);
			$result = $this->db->get('document');

			$doc = $result->row('document_id');

			$this->db->select('a.document_id,a.status,a.date_of_action,a.recipient,a.employee_id,
				b.document_id,b.tracking_no,b.document_title,b.document_desc,b.document_file,b.date_created,
				c.document_id,c.response,c.employee_id,c.comment,c.date_responded,c.sender,c.history_no,
				d.employee_id,d.department_id,d.username,d.lname,d.fname,d.image,d.mname,f.history_no
			');
			$this->db->from('documentation a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->join('history c','a.document_id = c.document_id');
			$this->db->join('history f','c.document_id = f.document_id AND c.history_no < f.history_no','left');
			$this->db->join('employee d','c.sender = d.employee_id');
 			$this->db->where('c.sender', $employ);
 			$this->db->where('c.document_id', $doc);
 			$this->db->where('f.history_no IS NULL');
			$query = $this->db->get();
			return $query->result_array();

			//return $query->row();
		}

		public function get_origin($id){
			$this->db->where('tracking_no', $id);
			$result = $this->db->get('document');

			$doc = $result->row('document_id');

			$this->db->select('a.document_id,a.status,a.date_of_action,a.recipient,a.employee_id,
				b.document_id,b.tracking_no,b.document_title,b.document_desc,b.document_file,b.date_created,
				c.employee_id,c.department_id,c.username,c.lname,c.fname,c.image,c.mname,
				d.department_id,d.department_id
			');
			$this->db->from('documentation a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->join('employee c','a.employee_id = c.employee_id');
			$this->db->join('department d','c.department_id = d.department_id');
 			$this->db->where('a.document_id', $doc);
			$query = $this->db->get();
			return $query->result_array();

			//return $query->row();
		}

		public function get_by_id($id)
		{
			$this->db->select('a.document_id,a.status,a.date_of_action,a.recipient,b.employee_id,b.lname,b.fname,b.mname,b.department_id,
				c.document_id,c.tracking_no,c.document_title,c.document_file,c.document_desc,c.date_created,d.department_desc,d.department_id');
			$this->db->from('documentation a');
			$this->db->join('employee b','a.recipient = b.employee_id');
			$this->db->join('document c','a.document_id = c.document_id');
			$this->db->join('department d','b.department_id = d.department_id');
			$this->db->where('c.tracking_no',$id);
			$query = $this->db->get();

			return $query->result_array();
		}

		public function savePic($url,$user){
			$data = array(
				'image' => $url
			);

			$this->db->set('image',$data['image']);
			$this->db->where('username', $user['username']);
			$this->db->update('employee');
		}

		public function update_history(){
			date_default_timezone_set('Asia/Manila');
			$time =date("Y-m-d h:i:s");

			$update = array(
				'document_id' =>$this->input->post('document_id'),
				'response'	=>$this->input->post('status'),
				'employee_id'	=>$this->input->post('employee_id'),
				'comment'	=>$this->input->post('comment'),
				'sender'	=>$this->input->post('sender')
			);
			return $this->db->insert('history', $update);
		}

		public function update_documentation(){
			date_default_timezone_set('Asia/Manila');
			$time =date("Y-m-d h:i:s");
			$id=$this->input->post('document_id');
			$update = array(
				'status' =>$this->input->post('status'),
				'recipient'	=>$this->input->post('employee_id')
			);
			$this->db->set('status',$update['status']);
			$this->db->set('date_of_action','DATE_ADD(NOW(), INTERVAL 1 SECOND)', FALSE);
			$this->db->set('recipient',$update['recipient']);
			$this->db->where('document_id', $id);
			$this->db->update('documentation');

		}

		public function forward_history(){
			date_default_timezone_set('Asia/Manila');
			$time =date("Y-m-d h:i:s");

			$update = array(
				'document_id' =>$this->input->post('document_id'),
				'response'	=>'For Approval',
				'employee_id' =>$this->input->post('employee'),
				'comment'	=>'none',
				'sender'	=>$this->input->post('employee_id')
			);
			return $this->db->insert('history', $update);
		}

		public function forward_documentation(){
			date_default_timezone_set('Asia/Manila');
			$time =date("Y-m-d h:i:s");
			$id=$this->input->post('document_id');
			$update = array(
				'status' =>'For Approval',
				'recipient'	=>$this->input->post('employee')
			);
			$this->db->set('status',$update['status']);
			$this->db->set('date_of_action','DATE_ADD(NOW(), INTERVAL 1 SECOND)', FALSE);
			$this->db->set('recipient',$update['recipient']);
			$this->db->where('document_id', $id);
			$this->db->update('documentation');

		}

		public function return_history(){
			date_default_timezone_set('Asia/Manila');
			$time =date("Y-m-d h:i:s");

			$update = array(
				'document_id' =>$this->input->post('document_id'),
				'response'	=>'Returned',
				'employee_id' =>$this->input->post('recipient'),
				'comment'	=>$this->input->post('comment'),
				'sender'	=>$this->input->post('employee_id')
			);
			return $this->db->insert('history', $update);
		}

		public function return_history2(){
			date_default_timezone_set('Asia/Manila');
			$time =date("Y-m-d h:i:s");

			$update = array(
				'document_id' =>$this->input->post('document_id'),
				'response'	=>'Returned',
				'employee_id' =>$this->input->post('employee_id'),
				'comment'	=>$this->input->post('comment'),
				'sender'	=>$this->input->post('sender')
			);
			return $this->db->insert('history', $update);
		}

		public function return_documentation(){
			date_default_timezone_set('Asia/Manila');
			$time =date("Y-m-d h:i:s");
			$id=$this->input->post('document_id');
			$update = array(
				'status' =>'Returned',
				'recipient'	=>$this->input->post('recipient')
			);
			$this->db->set('status',$update['status']);
			$this->db->set('date_of_action','DATE_ADD(NOW(), INTERVAL 1 SECOND)', FALSE);
			$this->db->set('recipient',$update['recipient']);
			$this->db->where('document_id', $id);
			$this->db->update('documentation');

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
				  'status' => "For Approval",
				  'recipient' => $this->input->post('employee')
			   );

			return $this->db->insert('documentation', $docdata);
		}

		public function saveHistory(){
			$id = ($this->getLastDoc());
			date_default_timezone_set('Asia/Manila');
			$time =date("Y-m-d h:i:s");
			$hisdata = array(
				  'employee_id' =>	$this->input->post('employee'),
				  'document_id' => $id,
				  'response' => 'For Approval',
				  'comment' => 'none',
				  'sender' => $this->input->post('empid')
			   );

			return $this->db->insert('history', $hisdata);
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

		//track docu Login
		public function track_docu_latest_date($track_num){ //get the latest date of the file
			$this->db->select('*');
			$this->db->from('documentation');
			$this->db->join('document', 'document.document_id = documentation.document_id');
			if ( isset($track_num)) {
				$this->db->where('document.tracking_no',$track_num);
			}
			$query= $this->db->get();
			return $query-> result_array();
		}
		public function track_docu_info($cdate,$track_num){  //track the file with the latest date and info
			$this->db->select('*');
			$this->db->from('documentation');
			$this->db->join('document', 'documentation.document_id=document.document_id');
			if ( isset($cdate,$track_num)) {
				$this->db->where('document.tracking_no',$track_num);
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
		//history
	public function sender($track_no){
		$this->db->select('document.document_id, document.date_created, document.document_title, document.document_desc, document.tracking_no,
											employee.employee_id, employee.lname, employee.fname, employee.mname,
											department.department_desc');
		$this->db->from('document');
		$this->db->join('documentation','document.document_id=documentation.document_id');
		$this->db->join('employee','employee.employee_id=documentation.employee_id');
		$this->db->join('department','department.department_id=employee.department_id');
		$this->db->where('document.tracking_no',$track_no);
		$query= $this->db->get();
		return $query-> row();
	}

	public function docu_flow($track_no){
		// $this->db->select('*');
		$this->db->select('documentation.document_id, documentation.status, documentation.date_of_action, documentation.status, documentation.recipient,
											document.tracking_no, document.document_title,
											history.employee_id, history.response, history.comment, history.date_responded,
											employee.employee_id, employee.lname, employee.fname, employee.mname,
											department.department_desc');
		$this->db->from('document');
		$this->db->join('documentation','document.document_id=documentation.document_id');
		$this->db->join('history','history.document_id=documentation.document_id');
		$this->db->join('employee', 'employee.employee_id=history.employee_id');
		$this->db->join('department','department.department_id=employee.department_id');
		$this->db->where('document.tracking_no',$track_no);
		$query= $this->db->get();
		return $query-> result_array();
	}
	public function end($track_no){
		$this->db->select('documentation.document_id, documentation.status, documentation.date_of_action, documentation.recipient,
											employee.lname, employee.fname, employee.mname,
											department.department_desc');
		// $this->db->select('*');
		$this->db->from('document');
		$this->db->join('documentation', 'documentation.document_id=document.document_id');
		$this->db->join('employee', 'employee.employee_id=documentation.recipient');
		$this->db->join('department', 'department.department_id=employee.department_id');
		$this->db->where('document.tracking_no',$track_no);
		$query= $this->db->get();
		return $query-> row();
	}
	public function getstatuscount(){
	$this->db->select('status_id');
	$this->db->from('status');
	$query= $this->db->get();
	return $query-> result_array();
}
//add new status
public function make_status($statusnew){
	return $this->db->insert('status', $statusnew);
}



	}

?>

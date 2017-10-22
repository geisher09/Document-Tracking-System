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

		public function get_by_id($id)
		{
			$this->db->select('a.document_id,a.status,a.date_of_action,a.recipient,b.employee_id,b.lname,b.fname,b.mname,b.department_id,
				c.document_id,c.tracking_no,c.document_title,c.document_desc,c.date_created,d.department_desc,d.department_id');
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
			$time =date("h:i:sa");
			$date = date("Y-m-d");
			$data['date'] = $date;
			$data['time'] = $time;
			$hisdata = array(
				  'employee_id' =>	$this->input->post('employee'),
				  'document_id' => $id,
				  'response' => 'For Approval',
				  'comment' => 'none',
				  'date_responded' => $data['date'].' '.$data['time'],
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

		
	}

?>

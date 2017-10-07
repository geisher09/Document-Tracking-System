<?php

	class dts_model extends CI_Model{

		public function getDocuments(){
			$this->db->select('d.document_id,d.document_title,do.action,do.document_status');
		    $this->db->from('document d');
		    $this->db->join('documentation do', 'do.document_id=d.document_id');
		    $stat="received";
		    $this->db->where('do.document_status', $stat);
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

		public function saveDocuments($data,$url){
			$this->db->set('document_file',$url);
			return $this->db->insert('document', $data,$url);
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

			$this->db->select('a.username,b.department_desc,a.employee_id,a.department_id,b.department_id,a.position');
			$this->db->from('employee a');
			$this->db->join('department b','a.department_id = b.department_id');    
			$this->db->where('a.username',$user['username']);
			$result = $this->db->get();


			// $this->db->where('username', $user['username']);
			// $result = $this->db->get('employee');

			 return $result->result_array();
		}

		public function get_profile_inbox($user){

			$this->db->where('username', $user['username']);
			$result = $this->db->get('employee');

			$id = $result->row('employee_id');

			$stat = "received";

			$this->db->select('a.employee_id,a.document_id,a.document_status,b.document_id,b.document_title,a.action,');
			$this->db->from('documentation a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->where('a.employee_id', $id);
			$this->db->where('a.document_status', $stat);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_profile_sent($user){  

			$this->db->where('username', $user['username']);
			$result = $this->db->get('employee');

			$id = $result->row('employee_id');

			$stat = "sent";

			$this->db->select('a.employee_id,a.document_id,a.document_status,b.document_id,b.document_title,a.action,');
			$this->db->from('documentation a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->where('a.employee_id', $id);
			$this->db->where('a.document_status', $stat);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_inbox_pending($user){ 

			$this->db->where('username', $user['username']);
			$result = $this->db->get('employee');

			$id = $result->row('employee_id');

			$stat = "sent";
			$act = "Pending";
			$this->db->select('a.employee_id,a.document_id,a.document_status,b.document_id,b.document_title,a.action,');
			$this->db->from('documentation a');
			$this->db->join('document b','a.document_id = b.document_id');
			$this->db->where('a.employee_id', $id);
			$this->db->where('a.document_status', $stat);
			$this->db->where('a.action', $act);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function saveMember(){
			$username = $this->input->post('username');
			$lastid = $this->getLastEmployee();
			$now = date('y');
			$data = array(
				'fname' =>$this->input->post('fname'),
				'lname'	=>$this->input->post('lname'),
				'mname'	=>$this->input->post('mname'),
				'sex'	=>$this->input->post('sex'),
				'position'	=>$this->input->post('position'),
				'department_id'	=>$this->input->post('department'),
				'employee_id'	=>$now.'-'.$this->input->post('department').'-'.$lastid,
				'password'	=>md5($this->input->post('password')),
				'username'	=>$this->input->post('username')
			);

			$insert = $this->db->insert('employee', $data);
			return $insert;

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


	}

?>

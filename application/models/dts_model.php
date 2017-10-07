<?php

	class dts_model extends CI_Model{

		public function getDocuments(){
			$this->db->select('d.document_id,d.document_title,do.action');
		    $this->db->from('document d');
		    $this->db->join('documentation do', 'do.document_id=d.document_id');
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


		public function validate(){
			$uname = $this->input->post('uname');
			$pword = md5($this->input->post('password'));
			$this->db->where('username',$uname);
			$this->db->where('password',$pword);
			$query = $this->db->get('employee');

			return $query->num_rows();



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

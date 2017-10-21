<?php

	class dts_model extends CI_Model{

		public function getDocuments($user){
			$this->db->select('a.document_id,a.document_title,a.document_file,a.tracking_no,b.status,b.employee_id,c.employee_id,c.username');
		    $this->db->from('document a');
		    $this->db->join('documentation b', 'b.document_id=a.document_id');
		    $this->db->join('employee c', 'b.employee_id=c.employee_id');
		    $this->db->where('c.username',$user['username']);
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

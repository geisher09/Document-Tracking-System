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
		
		public function saveDepartment($data){
			return $this->db->insert('department', $data);
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

		public function validate($uname,$pword){
			$this->db->where('username',$uname);
			$this->db->where('password',$pword);
			$query = $this->db->get('employee');

			return $query->num_rows();

		}
		public function saveMember(){
			$username = $this->input->post('username');
			$now = date('y');
			$data = array(
				'fname' =>$this->input->post('fname'),
				'lname'	=>$this->input->post('lname'),
				'mname'	=>$this->input->post('mname'),
				'sex'	=>$this->input->post('sex'),
				'position'	=>$this->input->post('position'),
				'department_id'	=>$this->input->post('department'),
				'employee_id'	=>$now.'-'.$this->input->post('department'),
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


	}

?>
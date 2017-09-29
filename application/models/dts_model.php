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

		public function getOffices()
		{
			$this->db->select('*');
			$this->db->from('office');
			// $this->db->from('department');
			$query= $this->db->get();
			return $query-> result_array();
		}

		public function getDepartment($condition)
		{
			$this->db->select('*');
			$this->db->from('department');
			// $this->db->from('department');

			if ( isset($condition)) $this->db->where($condition);
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

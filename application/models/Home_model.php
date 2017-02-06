<?php
class Home_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function get_grades(){

		$query = $this->db->get('grades');

		if($query->num_rows() >  0){
			return $query->result();
		}

		return NULL;
	}

	public function get_departments(){

		$query = $this->db->get('departments');

		if($query->num_rows() >  0){
			return $query->result();
		}

		return NULL;
	}

	public function get_departmental_budget($department){

		$this->db->where('department',$department);

		$query = $this->db->get('budget_allocations');

		if($query->num_rows() == 1){
			return $query->row();
		}

		return NULL;
	}

	
}
?>
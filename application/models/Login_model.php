<?php
class Login_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function login($email,$password){

		$this->db->where('email',$email);
		$this->db->where('password',md5($password));

		$query = $this->db->get('users');

		if($query->num_rows() == 1){
			return $query->result();
		}

		return NULL;
	}

	
}
?>
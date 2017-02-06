<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Dashboard";

		$this->load->view('header',$data);
		$this->load->view('login');
		$this->load->view('footer');
	}
}

?>
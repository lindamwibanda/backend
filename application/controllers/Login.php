<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Login";

		$this->load->view('header',$data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function login() {
		
		// set validation rules
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation failed
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
			
		} else {
			
			// set variables from the form
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$result = $this->login_model->login($email, $password);
			
			if (is_array($result)) {
				
				$data = array(
				        'name'  => $result[0]->name,
				        'email' => $result[0]->email,
				        'logged_in' => TRUE
				);

				$this->session->set_userdata($data);

				if($result->is_admin)
					redirect('dashboard');
				else
					redirect('home');
				
			} else {
				
				// login failed
				$data['error'] = 'Invalid username or password.';
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('login', $data);
				$this->load->view('footer');
				
			}
			
		}
		
	}

	public function logout(){

		$data = array('name', 'email', 'logged_in');

		$this->session->unset_userdata($data);

		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
}

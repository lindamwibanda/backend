<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Dashboard";

		$this->load->view('header',$data);
		$this->load->view('navigation');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function new_plan($id = NULL)
	{
		$data['title'] = "New Plan";
		$data['grades'] = $this->home_model->get_grades();
		$data['departments'] = $this->home_model->get_departments();

		$this->load->view('header',$data);
		$this->load->view('navigation');
		$this->load->view('new_plan',$data);
		$this->load->view('footer');
	}

	public function get_departmental_budget(){

		$department = $this->input->get('department');

		$result = $this->home_model->get_departmental_budget($department);

		echo json_encode($result);
	}

	public function save_travel_details(){

		$data['project_name'] = $this->input->post('department');
		$data['grade'] = $this->input->post('department');
		$data['institution'] = $this->input->post('department');
		$data['venue'] = $this->input->post('department');
		$data['dates'] = $this->input->post('department');
		$data['days_away'] = $this->input->post('department');
		$data['justification'] = $this->input->post('department');

		$action = $this->input->post('action');

		$result = $this->home_model->save_travel_details($action,$data);

		//echo json_encode($result);
	}

	public function save_project_details(){

		$data['project_name'] = $this->input->post('project_name');
		$data['budget_line'] = $this->input->post('budget_line');
		$data['travel_costs'] = $this->input->post('travel_costs');

		$action = $this->input->post('action');

		$result = $this->home_model->save_travel_details($action,$data);
		//echo json_encode($result);
	}

	public function save_added_details(){

		$department = $this->input->get('department');

		$result = $this->home_model->get_departmental_budget($department);

		echo json_encode($result);
	}

	public function save_budget_details(){

		$department = $this->input->get('department');

		$result = $this->home_model->get_departmental_budget($department);

		echo json_encode($result);
	}

	public function send_to_director(){

		$department = $this->input->get('department');

		$result = $this->home_model->get_departmental_budget($department);

		echo json_encode($result);
	}

	public function send_to_assistant(){

		$department = $this->input->get('department');

		$result = $this->home_model->get_departmental_budget($department);

		echo json_encode($result);
	}

	public function director_approval(){

		$department = $this->input->get('department');

		$result = $this->home_model->get_departmental_budget($department);

		echo json_encode($result);
	}

	public function assistant_approval(){

		$department = $this->input->get('department');

		$result = $this->home_model->get_departmental_budget($department);

		echo json_encode($result);
	}
}

?>
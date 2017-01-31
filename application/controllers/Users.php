<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->output->enable_profiler();

		$this->load->view('index');
	}

	public function user_register()
	{
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$user_name = $this->input->post('user_name');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "last_name", "user_name", "trim|required");
		$this->form_validation->set_rules("email", "trim|valid_email|required");
		$this->form_validation->set_rules("password", "password_conf", "trim|min_length[8]|required|matches[confirm_password]|md5");
		if($this->form_validation->run() === FALSE)
		{
			$this->session->error("login_errors", validation_errors());
			redirect(base_url());
		}
		else
		{
		$this->load->model("user");
		$register = $this->input->post();
		$user_register = $this->users->user_input($register);
		$this->load->view("index");
		}
	}







}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->output->enable_profiler();

		$this->load->view('index');
	}

	// public function user_register()
	// {
	// 	$first_name = $this->input->post('first_name');
	// 	$last_name = $this->input->post('last_name');
	// 	$user_name = $this->input->post('user_name');
	// 	$email = $this->input->post('email');
	// 	$password = md5($this->input->post('password'));
	// 	$password_conf = md5($this->input->post('password'));
	//
	// 	$this->load->library("form_validation");
	// 	$this->form_validation->set_rules("first_name", "last_name", "user_name", "trim|required");
	// 	$this->form_validation->set_rules("email", "trim|valid_email|required");
	// 	$this->form_validation->set_rules("password", "password_conf", "trim|min_length[8]|required|matches[confirm_password]|md5");
	// 	if($this->form_validation->run() === FALSE)
	// 	{
	// 		$this->session->error("login_errors", validation_errors());
	// 		redirect(base_url());
	// 	}
	// 	else
	// 	{
	// 	$this->load->model("user");
	// 	$register = $this->input->post();
	// 	$user_register = $this->users->user_input($register);
	// 	$this->load->view("index");
	// 	}
	// }

	public function login()
	{
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));
		//Change up the password encryption
				$this->load->model('login_verify');
				$emailDB = $this->login_verify->get($emailDB && $passswordDB);
				if($email && $password == $emailDB && $passwordDB)
				{
						// $user_info = array(
						// 	 'user_id' => $user_info['id'],
						// 	 'user_email' => $user_info['email'],
						// 	 'user_first' => $user_info['first_name'],
						// 	 	 'user_last' => $user_info['last_name'],
						// 	 'is_logged_in' => true
						// );
						$this->session->set_userdata($user_info);
						$this->load->view('welcome');
				}
				else
				{
						$this->session->set_flashdata("login_error", "Invalid email or password!");
						$this->load->view('main');
				}
	}





}

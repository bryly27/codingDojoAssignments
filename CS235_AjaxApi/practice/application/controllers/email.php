<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller 
{
	public function index()
	{
		$this->load->model('User');
		$this->load->view('main');
		// $this->session->sess_destroy();
	}

	public function process()
	{
		$this->load->model('User');
		$email = $this->input->post('email');
		// $user_data['data'] = $this->User->get_user($email);
		// $user_data = $this->User->get_user($email);
		// $this->load->view('partial', array("users" => $user_data));

		$user_data['users'] = $this->User->get_user($email);
		$this->load->view('partial', $user_data);
		// $this->load->view('main', $user_data);
		// return $user_data;
		// echo json_encode($user_data);
		// return json_encode($user_data);
	}


}
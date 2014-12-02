<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// if(!empty($this->session->userdata('loggedIn', TRUE)))
		// {
		// 	$this->load->view('welcome');
		// }
		// else
		// {
		$this->load->library('form_validation');
		$this->load->view('landing');
		// }
	}

	//---------------------registering---------------------------

	public function register()
	{
		if($this->input->post('action') == 'register')
		{
			$this->load->model('student_model');

			//---------form validation---------

			$this->load->library('form_validation');
			$this->form_validation->set_rules('first_name', 'FirstName', 'trim|required|min_length[2]');
	    	$this->form_validation->set_rules('last_name', 'LastName', 'trim|required|min_length[2]');
	   		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[students.email]');
	    	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[confirm_password]');
	    	$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required');

	    if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('landing');
			}
			else
			{
				$student_details = array(
					"first_name" => $this->input->post('first_name'),
					"last_name" => $this->input->post('last_name'),
					"email" => $this->input->post('email'),
					"password" => md5($this->input->post('password'))
				);

				$add_student = $this->student_model->add_student($student_details);
				
				redirect('/');
			}
		}
	}
		//-----------------------login--------------------------

	public function log()
	{
		if(empty($this->input->post('email') || $this->input->post('password')))
		{
			echo 'Please enter login information';
		}
		else 
		{
			if($this->input->post('action') == 'login')
			{
				$this->load->model('student_model');
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));
				$student = $this->student_model->get_student($email);
				$this->session->set_userdata('studentInfo', $student);

				if($email == $student['email'] && $password == $student['password'])
				{		
					// $this->session->set_userdata('loggedIn', TRUE);
					redirect('/login/welcome');
				}
				else
				{
					echo 'the information you entered is wrong';
					$this->load->view('landing');
				}
			}
		}
	}

	//----------------welcome page ---------------

	public function welcome()
	{

		// $this->output->enable_profiler(TRUE);
		$this->load->view('loggedIn');
	}

	//--------------------log off----------------------

	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}


}
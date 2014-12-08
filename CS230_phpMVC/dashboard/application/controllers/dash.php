<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dash extends CI_Controller 
{
	public function index()
	{
		$this->load->view('main');
	}

	public function signin()
	{
		$this->load->view('signin');
	}

	public function register()
	{
		// echo validation_errors();
		$this->load->view('register');
	}

	public function registering()
	{
		if($this->input->post('action') == 'register')
		{
			$this->load->model('user');

			//---------form validation---------

			$this->load->library('form_validation');
			$this->form_validation->set_rules('first_name', 'FirstName', 'trim|required|min_length[2]');
	    $this->form_validation->set_rules('last_name', 'LastName', 'trim|required|min_length[2]');
	    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[confirm_password]');
	    $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required');

	    if ($this->form_validation->run() === FALSE)
			{
				redirect('/dash/register');
			}
			else
			{
				$user_details = array(
					"first_name" => $this->input->post('first_name'),
					"last_name" => $this->input->post('last_name'),
					"email" => $this->input->post('email'),
					"password" => md5($this->input->post('password'))
				);
				$add_user = $this->user->add_user($user_details);
				redirect('/dash/signin');
			}
		}
	}

	//----------login-------------


	public function dashboard()
	{
		// $this->load->library('form_validation');
		// if(empty($this->input->post('email') || $this->input->post('password')))
		// {
		// 	echo 'Please enter login information';
		// }
		// else 
		// {
			if($this->input->post('action') == 'login')
			{
				$this->load->model('user');
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));
				$user = $this->user->get_user($email);
				$this->session->set_userdata('userInfo', $user);

				if($email == $user['email'] && $password == $user['password'])
					if ($user && $user['password']==$password) 
				{		
					$this->session->set_userdata('log', TRUE);

					$this->load->model('user');
					$users['usersinfo'] = $this->user->get_users();
					$this->load->view('dashboard', $users);
					// $this->load->model('user');
					// $messages['message'] = $this->user->get_messages();
					// $this->load->view('success', $messages);
				}
				else
				{
					// echo 'the information you entered is wrong';
					$this->session->set_userdata('log', FALSE);
					redirect('/dash/signin');
				}
			}
		}
	
	public function wall($id)
	{
		$this->load->view('wall');
	}

	public function profile()
	{
		$this->load->view('profile');
	}


	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	

}
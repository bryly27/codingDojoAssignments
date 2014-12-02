<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wall extends CI_Controller 
{
	public function index()
	{
		$this->load->library('form_validation');
		$this->load->view('main');
		// $this->session->sess_destroy();
	}

	//---------------------registering---------------------------

	public function register()
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
				$this->load->view('main');
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
				redirect('/');
			}
		}
	}
		//-----------------------login--------------------------

	public function login()
	{
		$this->load->library('form_validation');
		if(empty($this->input->post('email') || $this->input->post('password')))
		{
			echo 'Please enter login information';
		}
		else 
		{
			if($this->input->post('action') == 'login')
			{
				$this->load->model('user');
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));
				$user = $this->user->get_user($email);
				$this->session->set_userdata('userInfo', $user);

				if($email == $user['email'] && $password == $user['password'])
				{		
					// redirect('/wall/home');
					$this->load->model('user');
					$messages['message'] = $this->user->get_messages();
					$this->load->view('wall', $messages);
				}
				else
				{
					echo 'the information you entered is wrong';
					$this->load->view('main');
				}
			}
		}
	}

	//----------------home page ----------------------

	// public function home()
	// {
	// 	$this->load->model('user');	
	// 	$messages['message'] = $this->user->get_messages();
	// 	$comments= $this->user->get_comments();
	// 	$this->session->set_userdata('comment', $comments);
	// 	$this->load->view('wall', $comments);
	// }

	//----------------adding message-------------------

	public function addMessage()
	{
		$this->load->model('user');
		$message_details = array(
					"user_id" => $this->session->userdata('userId'),
					"message" => $this->input->post('message'),
				);
		$this->user->add_message($message_details);
		$this->load->view('wall');
	}
  
	//----------------adding comment---------------------

	public function addComment()
	{
		$this->load->model('user');
		$comment_details = array(
					"user_id" => $this->session->userdata('userId'),
					"comment" => $this->input->post('comment'),
					"messages_id" => $this->session->userdata('messageId'),
				);
		$this->user->add_comment($comment_details);
		$this->load->view('wall');
	}

	//--------------------log off----------------------

	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
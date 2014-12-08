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
		$this->form_validation->set_rules("email","Email","required|valid_email");
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
			
				// if($email == $user['email'] && $password == $user['password'])
					if ($user && $user['password']==$password) 
				{		
					$this->session->set_userdata('log', TRUE);
					redirect('/wall/home');
					// $this->load->model('user');
					// $messages['message'] = $this->user->get_messages();
					// $this->load->view('success', $messages);
				}
				else
				{
					// echo 'the information you entered is wrong';
					$this->session->set_userdata('log', FALSE);
					echo 'Please enter valid credentials';
					$this->load->view('main');
				}
			}
		
				
		// }
	}

	//------------------------home--------------------
	public function home()
	{
		if($this->session->userdata('log') == TRUE)
		{
			$this->load->model('user');
			$info['user'] = $this->session->userdata('userInfo');
			$info['quotes'] = $this->user->get_quotes();
			$info['favorites'] = $this->user->get_favorites($info['user']['id']);
			$this->load->view('success', $info);
		} 
		else
		{
			redirect('/');
		}
	}

	public function addQuote()
	{
		$this->load->model('user');
		$quoteInfo = array(
				"author" => $this->input->post('author'),
				"user_id" => $this->input->post('addQuote'),
				"message" => $this->input->post('message'),
			);
		$this->user->add_quote($quoteInfo);
		redirect('/wall/home');
	}

	public function addFavorite()
	{
		$this->load->model('user');
		$add = array(
				"user_id" => $this->input->post('userid'),
				"quotes_id" => $this->input->post('quoteid'),
			);
		$this->user->add_favorite($add);
		redirect('/wall/home');
	}

	public function deleteFavorite()
	{
		$this->load->model('user');
		$this->user->remove($this->input->post('remove'));
		redirect('/wall/home');
	}



	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	





}
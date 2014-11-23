<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller 
{

	public function index()
	{
		$this->load->view('users_index');
		die();
	}

	public function register()
	{
		$this->load->view('users_register');
	}

	public function process($number, $name)
	{
		echo 'you made it to here! and you passed a number: ' .$number. ' to the method. And the name is '. $name. '.';
		if($number %2 ==0)
		{
			$this->load->view('even');
		}
		else
		{
			redirect('users/index');
		}
	}

}
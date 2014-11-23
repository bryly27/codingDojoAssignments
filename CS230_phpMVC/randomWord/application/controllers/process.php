<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function index()
	{
		$this->load->view('randomWord');

		if(empty($this->session->userdata('counter')))
		{	
			$this->session->set_userdata('counter', 1);
		}
		else 
		{
			$count = $this->session->userdata('counter')+1;
			$this->session->set_userdata('counter', $count);
		}
		$randWord = random_string('alnum', 15);
		$this->session->set_userdata('rand', $randWord);

	}

}
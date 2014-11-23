<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller 
{

	public function index()
	{
		$this->load->view('process_form');

	}

	public function process()
	{
		$name = $this->input->post('name');
		$location = $this->input->post('location');
		$language = $this->input->post('language');
		$comment = $this->input->post('comment');
			
		$newdata = array(
											'name' => $name,
											'location' => $location,
											'language' => $language,
											'comment' => $comment
										);
		$this->session->set_userdata($newdata);

		// $this->session->set_userdata('comment', $this->input->post('comment'));
		if($this->input->post('action')=='register')
		{
			$this->results();
			redirect('/surveys/results');
		}

		if(empty($this->session->userdata('counter')))
		{	
			$this->session->set_userdata('counter', 0);
		}
		else 
		{
			$count = $this->session->userdata('counter')+1;
			$this->session->set_userdata('counter', $count);
			
		}
		

	// $count = $this->session->userdata('counter')+1;
	// $this->session->set_userdata('counter', $count);

	// redirect('surveys/results');

		if($this->input->post('action2')=='register2')
		{
			redirect('surveys');
		}
	
	}
	public function results()
	{
		$this->load->view('result');
	}

}

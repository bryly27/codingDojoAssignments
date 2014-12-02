<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Posts extends CI_Controller 
	{
		public function index()
		{
			$this->load->model('user');
			$data['info'] = $this->user->get_post();
			$this->load->view('main', $data);
			// $this->session->sess_destroy();
		}

		public function create()
		{
			$this->load->model('user');
			$post_details = array(
				"description" => $this->input->post('text'),
				);
			$post = $this->user->create($post_details);
			$this->load->model('user');
			$data['info'] = $this->user->get_post();
			$this->load->view('partial', $data);

		}


}
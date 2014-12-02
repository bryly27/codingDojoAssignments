<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Notes extends CI_Controller 
	{
		public function index()
		{
			// $this->session->sess_destroy();
			$this->load->model('user');
			$notes['note'] = $this->user->get_notes();
			$this->load->view('main', $notes);
		}

		public function addNote()
		{
			$this->load->model('user');
			$notes_details = array(
				"title" => $this->input->post('title'),
				);
			$post = $this->user->create($notes_details);
			// redirect('/');
			$this->load->model('user');
			$data['note'] = $this->user->get_notes();
			$this->load->view('partial', $data);
		}

		public function addtext()
		{
			$this->load->model('user');
			$notes_content = array(
					"description" => $this->input->post('description'),
				);
			$content = $this->user->add_content($notes_content, $this->session->userdata('id'));
		
			$this->load->model('user');
			$data['note'] = $this->user->get_notes();
			$this->load->view('partial', $data);
		}

		public function deleteNote($id)
		{
			$this->load->model('user');
			$this->user->delete($id);
			redirect('/');
		}

		

}
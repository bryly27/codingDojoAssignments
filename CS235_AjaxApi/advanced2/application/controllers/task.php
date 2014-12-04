<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Task extends CI_Controller 
	{
		public function index()
		{
			$this->load->model('tasks');
			$list['task'] = $this->tasks->get_tasks();
			$this->load->view('main', $list);
		}			

		public function create()
		{
			$this->load->model('tasks');
			$create = array(
				'task' => $this->input->post('taskInfo'),
				);
			$this->tasks->create($create);
			redirect('/');
		}

		public function edit()
		{
			
		}


		public function delete($id)
		{
			$this->load->model('tasks');
			$this->tasks->delete($id);
			redirect('/');
		}



	}
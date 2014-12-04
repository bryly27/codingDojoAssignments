<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Task extends CI_Controller 
	{
		public function index()
		{
			$this->load->model('tasks');
			$list['task'] = $this->tasks->get_tasks();
			$this->load->view('main', $list);
		}		

		public function load()
		{
			$this->load->model('tasks');
			$list['task'] = $this->tasks->get_tasks();
			$this->load->view('partial', $list);
		}

		public function create()
		{
			$this->load->model('tasks');
			$create = array(
					'task' => $this->input->post('taskInfo'),
				);
			$this->tasks->create($create);
			$list['task'] = $this->tasks->get_tasks();
			$this->load->view('partial', $list);
		}

		public function edit()
		{
			$this->load->model('tasks');
			$edit = array(
					'task' => $this->input->post('taskInfo'),
				);
			$this->tasks->update($edit, $this->input->post('hiddenId'));
			$list['task'] = $this->tasks->get_tasks();
			$this->load->view('partial', $list);
		}


		public function delete($id)
		{
			$this->load->model('tasks');
			$this->tasks->delete($id);
			$list['task'] = $this->tasks->get_tasks();
			$this->load->view('partial', $list);
			
		}



	}
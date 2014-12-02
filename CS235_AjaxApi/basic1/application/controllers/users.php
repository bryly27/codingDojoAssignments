<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Users extends CI_Controller 
	{
		public function index()
		{
			// $this->load->model('User');
			$this->load->view('main');
			// $this->session->sess_destroy();
		}

		public function random(){
		  $names = array('John', 'Michael', 'Joe', 'Trey');
		  $output = array("name" => $names[rand(0,count($names)-1)] , "age" => rand(18,60));
		  echo json_encode($output);
	}


}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Time extends CI_Controller {

	public function index()
	{
		$test = new item();
		$test = $test->get();

		foreach($test as $sale)
		{
			echo $sale->description;
		}


		$this->load->view('timeDisplay');
	}

}
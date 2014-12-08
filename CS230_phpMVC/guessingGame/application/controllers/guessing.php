<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guessing extends CI_Controller 
{
	public function index()
	{
		$this->load->model('photo_model');
		$getPhoto['photos'] = $this->photo_model->get_photos();
		$this->load->view('main', $getPhoto);
	}

	public function question1()
	{
		$this->load->model('photo_model');
		$getPhoto['photos'] = $this->photo_model->get_photos();
		$getPhoto['guess'] = $this->input->post();
		$this->load->view('main', $getPhoto);
	}

	public function question2()
	{
		$this->load->model('photo_model');
		$getPhoto['photos'] = $this->photo_model->get_photos();
		$getPhoto['guess'] = $this->input->post();
		$this->load->view('main2', $getPhoto);
	}
		
	public function question3()
	{
		$this->load->model('photo_model');
		$getPhoto['photos'] = $this->photo_model->get_photos();
		$getPhoto['guess'] = $this->input->post();
		$this->load->view('main3', $getPhoto);
	}

	public function question4()
	{
		$this->load->model('photo_model');
		$getPhoto['photos'] = $this->photo_model->get_photos();
		$getPhoto['guess'] = $this->input->post();
		$this->load->view('main4', $getPhoto);
	}

	public function question5()
	{
		$this->load->model('photo_model');
		$getPhoto['photos'] = $this->photo_model->get_photos();
		$getPhoto['guess'] = $this->input->post();
		$this->load->view('main5', $getPhoto);
	}

	public function question6()
	{
		$this->load->model('photo_model');
		$getPhoto['photos'] = $this->photo_model->get_photos();
		$getPhoto['guess'] = $this->input->post();
		$this->load->view('main6', $getPhoto);
	}

}
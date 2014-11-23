<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users2 extends CI_Controller {

	public function index()
	{
		$view_date = array('var_name' => 'this is my variable value');
		$user = array('first_name' => 'Bryant', 'last_name' => 'Yu', 'age' => 25);
		$view_data['user'] = $user;
		$this->load->view('usersview', $view_date);
	}

}

?>
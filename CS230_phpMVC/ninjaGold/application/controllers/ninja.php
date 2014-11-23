<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninja extends CI_Controller {

	public function index()
	{
		$this->load->view('ninjaGold');
		if(empty($this->session->userdata('goldNumber')))
		{
			$this->session->set_userdata('goldNumber', 0);
			$this->session->set_userdata('activityLog', array());
		}	

	}

	public function addGold()
	{

		$this->session->set_userdata('color', 'green');

		if($this->input->post('action')=='farm')
		{
			$location = 'farm';
			$gold = rand(10, 20);
			$farmGold = $this->session->userdata('goldNumber')+ $gold;
			$this->session->set_userdata('goldNumber', $farmGold);
		}

		if($this->input->post('action')=='cave')
		{
			$location = 'cave';
			$gold = rand(5, 10);
			$farmGold = $this->session->userdata('goldNumber')+ $gold;
			$this->session->set_userdata('goldNumber', $farmGold);
		}

		if($this->input->post('action')=='house')
		{
			$location = 'house';
			$gold = rand(2, 5);
			$farmGold = $this->session->userdata('goldNumber')+ $gold;
			$this->session->set_userdata('goldNumber', $farmGold);
		}

		if($this->input->post('action')=='casino')
		{
			$location = 'casino';
			$gold = rand(-50, 50);
			$farmGold = $this->session->userdata('goldNumber')+ $gold;
			$this->session->set_userdata('goldNumber', $farmGold);
		}

		//-----------starting array----------------------

			$activityLog = $this->session->userdata('log');		

			if(!empty($gold))
			{
	
			if($gold<0)
			{
				$activityLog[] = '<p class=\'red\'>You entered a '.$location.' and earned '.$gold.' golds. (' .date('l jS \of F Y h:i:s A').')</p><br>';

			}
			else 
			{
				$activityLog[] = '<p class=\'green\'>You entered a '.$location.' and earned '.$gold.' golds. (' .date('l jS \of F Y h:i:s A').')</p><br>';
			
			}
		}


			$this->session->set_userdata('log', $activityLog);


		//------------reset button-----------------------

		if($this->input->post('action')=='reset')
		{
			$this->session->set_userdata('goldNumber', 0);

			$this->session->sess_destroy();
		

		}



		redirect('Ninja');


	}

}
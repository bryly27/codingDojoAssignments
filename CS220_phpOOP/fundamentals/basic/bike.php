<?php  

class bike
{
	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price_p, $max_speed_p)
	{
		$this->price = $price_p;
		$this->max_speed = $max_speed_p;
		$this->miles = 0;
	}


	public function displayInfo()
	{
		echo $this->price.' dollars<br>';
		echo $this->max_speed.'<br>';
		echo $this->miles.'miles<br>';
	}

	public function drive()
	{
		$this->miles += 10;
		echo 'Driving '.($this->miles).'miles<br>';
	}

	public function reverse()
	{
		$this->miles -=5;
		echo 'Reversing '.($this->miles).'miles<br>';
		if($this->miles<0)
		{
			$this->miles=0;
		}
	}

}

$bike = new bike(200, "25mph");
$bike2 = new bike(300, "30mph");
$bike3 = new bike(400, "35mph");


//--------------bike1---------------
$bike->drive();
$bike->drive();
$bike->drive();
$bike->reverse();
$bike->displayInfo();

?><br><?php
//----------------bike2---------------
$bike2->drive();
$bike2->drive();
$bike2->reverse();
$bike2->reverse();
$bike2->displayInfo();

?><br><?php
//-----------------bike3--------------

$bike3->reverse();
$bike3->reverse();
$bike3->reverse();
$bike3->displayInfo();




?>

<?php  

class car 
{

	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax;

	public function __construct($price_p, $speed_p, $fuel_p, $mileage_p)
	{
		$this->price = $price_p;
		$this->speed = $speed_p;
		$this->fuel = $fuel_p;
		$this->mileage = $mileage_p;
		$this->display_all($price_p, $speed_p, $fuel_p, $mileage_p);
	}

	public function display_all()
	{
		echo 'Price: '.$this->price.'<br>';
		echo 'Speed: '.$this->speed.'mph<br>';
		echo 'Fuel: '.$this->fuel.'<br>';
		echo 'Mileage: '.$this->mileage.'mpg<br>';
		if($this->price>10000)
		{
			echo 'Tax: 0.15<br><br>';
		}
		else
		{
			echo 'Tax: 0.12<br><br>';
		}
		
	}
	
}

$car1 = new car(2000, 35, 'Full', 15);
$car2 = new car(2000, 5, ' Not Full', 105);
$car3 = new car(2000, 15, 'Kind of Full', 95);
$car4 = new car(2000, 25, 'Full', 25);
$car5 = new car(2000, 45, 'Empty', 25);
$car6 = new car(20000000, 35, 'Empty', 15);


?>
<?php  

//---------------start of animal-----------------
class animal 
{

	public $name;
	public $health;

	public function __construct($name_p)
	{
		$this->name = $name_p;
		$this->health = 100;
	}

	public function walk()
	{
		$this->health -=1;
		return $this;
	}

	public function run()
	{
		$this->health -=5;
		return $this;
	}

	public function displayHealth()
	{
		echo 'Animal: '.$this->name.'<br>';
		echo 'Health: '.$this->health.'<br><br>';

	}

}

//-----------------end of animal---------------------
//-----------------start of dog---------------------

class dog extends animal
{
	public function __construct($name_p)
	{
		$this->name = $name_p;
		$this->health = 150;
	}

	public function pet()
	{
		$this->health +=5;
		return $this;
	}

}

//----------------end of dog-------------------
//---------------start of dragon---------------

class dragon extends animal 
{
	public function __construct($name_p)
	{
		$this->name = $name_p;
		$this->health = 170;
		echo 'This is a dragon!!!<br>';
	}

	public function fly()
	{
		$this->health -=10;
		return $this;
	}
}

//--------------end of dragon-----------------

$animal = new animal('panda');
$animal->walk()->walk()->walk()->run()->run()->displayHealth();

$dog = new dog('Lucky');
$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

$dragon = new dragon('Puff');
$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();

?>
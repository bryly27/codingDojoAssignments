<?php  

class Person
{
	public $first_name;
	public $last_name;

	public function __construct($first_name_p, $last_name_p)
	{
		$this->first_name = $first_name_p;
		$this->last_name = $last_name_p;
	}
}

$new_person1 = new Person('John', 'Doe');
var_dump($new_person1);

$new_person2 = new Person('Jerry', 'Rice');
var_dump($new_person2);

?>
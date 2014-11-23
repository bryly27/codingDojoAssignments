<?php  

class MyFirstClass
{

}
$obj = new MyFirstClass();
$obj1 = new MyFirstClass();
$obj2 = new MyFirstClass();
$obj3 = new MyFirstClass();
$obj4 = new MyFirstClass();
$obj5 = new MyFirstClass();
$obj6 = new MyFirstClass();

var_dump($obj);
var_dump($obj1);
var_dump($obj2);
var_dump($obj3);
var_dump($obj4);
var_dump($obj5);

class MySecondClass
{
	public $my_property = 'my text of property';
}

$obj10 = new MySecondClass();
echo $obj10->my_property. '<br>';
echo $obj10->my_property = 'changed the value of my property';
echo $obj10->my_property.'<br>';

$obj11 = new MySecondClass();
echo $obj11->my_property;



?>
<?php  

class MyFirstClass
{
    public $property1 = "I am the first property! Woohoo";
    public function set_property1($property1)
    {
        $this->property1 = $property1;
    }
    public function get_property1()
    {
        return $this->property1;
    }
}
$obj1 = new MyFirstClass();
$obj2 = new MyFirstClass();
echo $obj1->get_property1();
echo $obj2->get_property1();
$obj1->set_property1('New value for property1 for the first instance');
$obj2->set_property1('New value for property1 for the second instance');
echo $obj1->get_property1();
echo $obj2->get_property1();





?>
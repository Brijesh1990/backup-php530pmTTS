<?php 
class Name 
{
    public $name="Hi jay";
    public function test()
    {
        // echo $name;
        echo $this->name;// $this is a pseudo variables
    } 
}
$obj=new Name; // new Name is an object of class Name
$obj->test();
?>
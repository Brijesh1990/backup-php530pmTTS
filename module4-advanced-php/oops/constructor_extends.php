<?php 
class A 
{
    public function __construct() //magic method
    {
        $name="Hi brijesh"."<br>";
        echo $name; 
    }
}
class B extends A 
{
    public function display() //magic method
    {
        $name1="Hi Milan"."<br>";
        echo $name1; 
    }
}
$obj=new B;
$obj->display();

?>
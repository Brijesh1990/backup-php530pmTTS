<?php 
//abstract : when we create an class is abstract class we can't create object of abstract class
// if we want to access abstract class then we used inherit them. 
abstract class A 
{
    public function display()
    {
        echo "Hi kishan"."<br>";
    }
}
class B extends A 
{
    public function display1()
    {
        echo "Hi jay";
    }
}
$obj=new B;
$obj->display();
$obj->display1();


?>
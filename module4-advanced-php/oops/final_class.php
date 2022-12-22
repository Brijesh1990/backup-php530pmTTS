<?php 
// final class is never extends with another class
final class A 
{
    public function display()
    {
        echo "Hi kishan";
    }
}
class B extends A 
{
    public function display1()
    {
        echo "Hi Milan";
    }
}
class C extends B 
{
    public function display2()
    {
        echo "Hi Jay";
    }
}
$obj=new C;
$obj->display();
$obj->display1();
$obj->display2();
?>
<?php 
// interface : Interfaces allow you to specify what methods a class should implement. Interfaces make it easy to use a variety of different classes in the same way.
// interface just like to used to support multiple inheritance 
// interface access another class property through implements 
// interface defined by interface keyword

interface A 
{
    public function display1();
}

interface B
{
    public function display2();
}

interface C 
{
    public function display3();
}

class D implements A,B,C 
{
    public function display1()
    {
        $name1="Hi jay"."<br>";
        echo $name1;
    }
    
    public function display2()
    {
        $name2="Hi Kishan"."<br>";
        echo $name2;
    }
    
    public function display3()
    {
        $name3="Hi Milan"."<br>";
        echo $name3;
    }
}

$obj=new D;
$obj->display1();
$obj->display2();
$obj->display3();
?>
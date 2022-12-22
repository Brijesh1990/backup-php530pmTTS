<?php 
// object : object is an entity or collection of class 
//          object is instances of class 
//          object is defined with new keyword
class ABC
{
    public function display()
    {
        $name="My name is Milan bhai";
        echo $name;
    }

}

$obj=new ABC;  //new ABC is an object of class ABC
$obj->display();

?>
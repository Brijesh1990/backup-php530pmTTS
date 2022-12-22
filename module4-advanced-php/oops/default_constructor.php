<?php 
class A 
{
    public function __construct() //magic method
    {
        $name="Hi brijesh";
        echo $name; 
    }
}
$obj=new A;

?>
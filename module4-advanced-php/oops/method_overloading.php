<?php 
class A 
{
    function add($a,$b)
    {
       $a=10;
       $b=35;
       $c=$a+$b;
       echo "Additions of numebrs is :".$c;  
    }
}

class B extends A 
{
    function add($d,$e,$f)
    {
       $d=10;
       $e=35;
       $f=30;
       $g=$d*$e*$f;
       echo "Multiplications of numebrs is :".$g;  
    }
}

$obj=new B;
$obj->add(5,2,3);
?>
<?php 
require_once("model/model.php");
class controller extends Model
{
public function __construct()
{
// logics here
// $name="Hello world";
// echo $name;
parent:: __construct(); 
// logics of additions 
if(isset($_POST["ad"]))
{
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$n1+$n2;
echo "<h2 align='center'>Additions of Numbers is :".$n3."</h2>";
}
// logics of substractions
if(isset($_POST["subs"]))
{
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$n1-$n2;
echo "<h2 align='center'> substractions of Numbers is :".$n3."</h2>";
}

// logics of multiply 
if(isset($_POST["mult"]))
{
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$n1*$n2;
echo "<h2 align='center'>Multiplications of Numbers is :".$n3."</h2>";
}

// logics of divisions 
if(isset($_POST["dv"]))
{
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$n1/$n2;
echo "<h2 align='center'>Divisions of Numbers is :".$n3."</h2>";
}
// main template or views

if(isset($_SERVER["PATH_INFO"]))
{
switch($_SERVER["PATH_INFO"])
{
case '/':

require_once("index.php");
require_once("header.php");
require_once("additions.php");
break;

case '/subs':

require_once("index.php");
require_once("header.php");
require_once("substractions.php");
break;

case '/multi':

require_once("index.php");
require_once("header.php");
require_once("multiplications.php");
break;
case '/div':

require_once("index.php");
require_once("header.php");
require_once("divisions.php");
break;
default :
require_once("index.php");
require_once("header.php");
require_once("404.php");
break;

}
}

}
}

$obj=new controller;

?>
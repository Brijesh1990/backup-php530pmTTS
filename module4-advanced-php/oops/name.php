<?php
if(isset($_POST["ad"]))
{
class a 
{
// public $nm;  
public function dis()
{
$nm=$_POST["nm"];   
echo $nm;
}
}
$obj=new a;
$obj->dis();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <form method="post">
        enter Name <input type="text" name="nm" placeholder="enter number">
        <input type="submit" value="add" name="ad"> 
    </form>
</body>
</html>
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
    <?php
       class a 
       {
        //public $a,$b;
        public function display()
        {
        if(isset($_POST["ad"]))
        {
        $a=$_POST["a"];
        $b=$_POST["b"];
        $c=$a+$b; 
        return $c;
       }
    }
    }
    $obj=new a;
    echo "Additions of numbers :".$obj->display();
    ?>
    <form method="post">
        enter first number <input type="text" name="a" placeholder="enter number">
        enter second number <input type="text" name="b" placeholder="enter number">  
        <input type="submit" value="add" name="ad"> 
    </form>
</body>
</html>
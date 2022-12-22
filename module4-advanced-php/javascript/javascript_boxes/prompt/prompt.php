<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function test()
        {
        document.getElementById("btn").style="border:none; background-color:red; width:200px; padding:8px; color:white";
        document.getElementById("btn1").style="border:none; background-color:red; width:200px; padding:8px; color:white";
        document.getElementById("btn2").style="border:none; background-color:red; width:200px; padding:8px; color:white";
        document.getElementById("btn3").style="border:none; background-color:red; width:200px; padding:8px; color:white";

        }

        function ad()
        {
            var a=parseInt(prompt("Enter a values :"));
            var b=parseInt(prompt("Enter b values :"));
            var c=a+b;
            alert('Additions of numbers is :'+c)
        }
        
        function sub()
        {
            var a=parseInt(prompt("Enter a values :"));
            var b=parseInt(prompt("Enter b values :"));
            var c=a-b;
            alert('Substractions of numbers is :'+c)
        }

        
        function mult()
        {
            var a=parseInt(prompt("Enter a values :"));
            var b=parseInt(prompt("Enter b values :"));
            var c=a*b;
            alert('Multiplications of numbers is :'+c)
        }

        
        function dv()
        {
            var a=parseInt(prompt("Enter a values :"));
            var b=parseInt(prompt("Enter b values :"));
            var c=a/b;
            alert('Divisions of numbers is :'+c)
        }
        </script>
</head>
<body onload="test()">

    <button type="button" id="btn" onclick="ad()">Additions</button>
    <button type="button" id="btn1" onclick="sub()">Substractions</button>
    <button type="button" id="btn2" onclick="mult()">Multiplications</button>
    <button type="button" id="btn3" onclick="dv()">Divisions</button>
    
</body>
</html>
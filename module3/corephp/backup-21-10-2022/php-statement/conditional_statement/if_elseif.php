<?php 
// if elseif : if is executed when condition is true elseif are checked true condition multiple times if condition is false else is executed.
$a=50;
$b=50;
if($a>$b)
{
    echo "<h2 align='center'>a is greter than b</h2>";
}
elseif($b>$a)
{
    echo "<h2 align='center'>b is greter than a</h2>";
}
else 
{
    echo "<h2 align='center'>both are equal numbers</h2>";
}


?>
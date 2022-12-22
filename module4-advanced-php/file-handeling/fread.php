<?php 
$file=fopen("ajax.txt","r+") or("file not exist");
// if($file)
// {
//     echo "File succefully Opened";

// }
// else 
// {
//     echo "Somthing went wrong";
// }
// $txt="ajax stands for asynchrounous javascript and xml";
// fwrite($file,$txt);

echo fgets($file);

fclose($file);
?>
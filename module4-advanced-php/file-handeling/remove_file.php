<?php 
//  $file=fopen("javascript.txt","w") or die("file not exist");
$file="javascript.txt";
 unlink($file);
 if($file)
 {
    echo "File successfully removed";
 }
?>
<?php 
// switch : switch just like if elseif where we checked multiple case if case is false default will executed

  echo "Enter a grade in as only A,B,C";
  $grade="C";
   switch($grade)
   {
    case 'A':
        echo "<h1>You are topper students &#9786<h1>";
        break;
        
    case 'B':
        echo "<h1>You are average students &#9786<h1>";
        break;

        
    case 'C':
        echo "<h1>You are failed students &#128526<h1>";
        break;

     default:
         echo "<h1>sorry this grade is not found contact with admin<h1>";
         break;
   }

?>
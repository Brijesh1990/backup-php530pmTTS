<?php 
// nestedif : cndition within another condition is called nestedif condition
        //   syntax 
        //     if(condition)
        //     {
        //         if(conditions)
        //         {
        //             statements
        //         }
        //     }
        //     else 
        //     {
        //         statements
        //     }

        $a=10;
        $b=5;
        if($a>$b)
        {
            if($a!=0 && $b!=0)
            {
            echo "<h1 align='center'>a and b both are positive number and a is greter than b</h1>";
        }
    }
        else 
        {
            echo "<h1 align='center'>b is greter than a</h1>";
            
        }
?>
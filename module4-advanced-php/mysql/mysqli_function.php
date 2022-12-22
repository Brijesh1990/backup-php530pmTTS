<!-- 
Mysql : mysql is a database 
        mysql is used to create database 
        mysql is used to store an informations about users and information will be in table format.
        table is used to stored information in rows and columns.
        mysql is a case senstive database 

Mysqli :mysqli is improved verson of mysql
        mysqli is a database 
        mysqli is used to create database 
        mysqli is used to store an informations about users and information will be in table format.
        table is used to stored information in rows and columns.
        mysqli is a case senstive database   
        Mysqli is support php7 and php8 
        
        

Mysqli connection function          

    a) how to connect with database 

           $con=new mysqli("localhost","root","","dbname");

                   or
            $con=mysqli_connect("localhost","root","","dbname"); 
            
            
    b) how to check connection 
    
         if($con)
         {
            echo "connection successfully"
         }
         else 
         {
            die(mysqli_error($con));
         }


    c) how to execute query 
    
         $sel="select * from tablename";
         $exe=mysqli_query($con,$sel);
             

    d) how to fetch data   
    
     $sel="select * from tablename";
     $exe=mysqli_query($con,$sel);

     There are 4 types of fetch any data 
     
     $fetch=mysqli_fetch_array($exe); // fetch data in  array $fetch["username"];
     $fetch=mysqli_fetch_assoc($exe);  // fetch data in associative array $fetch[0]["username"];
     $fetch=mysqli_fetch_object($exe); // fetch data in object $fetch->username;
     $num_rows=mysqli_num_rows($exe); // count number of rows 


     e) how to closed database connection 
     mysqli_close($con);
     
 -->
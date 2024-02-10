<?php
 
 $conn =new mysqli("localhost","root","","acme");
 if($conn->connect_error){
    echo "SQL Connection failed";
    die;
 }
  
?>
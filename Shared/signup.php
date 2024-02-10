<?php
 
 $uname= $_POST['username'];
 $upass1= $_POST['pass1'];
 $upass2= $_POST['pass2'];
 $usertype= $_POST['usertype'];

 if($upass1 != $upass2){
    echo"Password Mismatch";
    die;
 }
 //add validation to check uname and usertype is not empty.
    $cipher_pass=md5($upass1);
 $conn= new mysqli("localhost","root","","acme",3307);
 try
 {
    mysqli_query($conn, "insert into user(username, password, usertype) values('$uname', '$cipher_pass', '$usertype')");

 echo "Registration successful";
 }
 catch(Exception $e){
    echo"Username Already Exist";
 }
 
?>

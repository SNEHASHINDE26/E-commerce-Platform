<?php
      
      include "authguard.php";
    
    $file_name=$_FILES['pimg']['name'];
    $source_path=$_FILES['pimg']['tmp_name'];

    $dest_path="../Shared/images/".$file_name;

    // echo $dest_path;
    move_uploaded_file($source_path,$dest_path);

     include "../Shared/connection.php";

     $query="insert into product(name,price,detail,impath,uploaded_by)values('$_POST[name]',$_POST[price],'$_POST[detail]','$dest_path',$_SESSION[userid])";
     
     echo $query;
     mysqli_query($conn, $query);
?>
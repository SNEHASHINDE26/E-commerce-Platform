<?php

       include "authguard.php";
       include "menu.html";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <div class="d-flex justify-content-center align-items-center vh-100">
          
            <form action="upload.php" method="post" class="w-50 bg-warning p-4" enctype="multipart/form-data">
               
              <h3 class="text-center"> Upload Product Here..</h3>
              <input class="form-control mt-2" type="text" name="name" placeholder="Product Name">
              <input class="form-control mt-2" type="text" name="price" placeholder="Product Price">
              <textarea class="form-control mt-2" name="detail" placeholder="Product Description"></textarea>
              <input class="form-control mt-2"  accept=".jpg,.png" type="file" name="pimg" >
                 
              <div class="text-center">
                   <button class="mt-3 btn btn-success">Upload</button>
              </div>
           
            </form>
       </div>

</body>
</html>
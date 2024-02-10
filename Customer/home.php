<html>
      <head>
        <style>

            .pdt-card {
            width: 300px;
            background-color: bisque;
            padding: 10px;
            margin: 10px;
            display:inline-grid;   
            }

            .p-img-wrapper,.p-img{
                width:100%;
            }
            
            .name{
                font-size:24px;
                font-weight:bold;
            }
            
            .detail{
                background-color: lightgray;
            font-style: italic;
            }

            .btn-group {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
            }
        </style>
      </head>
</html>



<?php
      
      
      include "authguard.php";
      include "menu.html";
      include "../Shared/connection.php";

      $sql_result=mysqli_query($conn,"SELECT * FROM product");

      while($dbrow=mysqli_fetch_assoc($sql_result))
      {   

        echo"<div class='pdt-card'>
                 
               <div class='name '>$dbrow[name]</div>
               <div class='price'>$dbrow[price] Rs</div>
               
               <div class='p-img-wrapper'>
                 <img class='p-img' src='$dbrow[impath]'>
               </div>
              
               <div class='detail'>$dbrow[detail]</div>
             
               <div class='btn-group'>
                   <a href='addcart.php?pid=$dbrow[pid]'>
                       <button class='btn btn-primary'>Add to Cart</button>
                   </a>
               </div> 
            </div>";
      }
      
?>
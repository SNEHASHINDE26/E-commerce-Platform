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

 $mysqli_result = mysqli_query($conn, "SELECT * FROM cart JOIN product ON cart.pid = product.pid WHERE userid = $_SESSION[userid]");

$total=0;
$productQuantity = 0;

while($dbrow=mysqli_fetch_assoc($mysqli_result))
      {   
          $total +=$dbrow['price'];
          $productQuantity++;
        
          echo"<div class='pdt-card'>
                 
               <div class='name'>$dbrow[name]</div>
               <div class='price'>$dbrow[price] Rs</div>
               
               <div class='p-img-wrapper'>
                 <img class='p-img' src='$dbrow[impath]' alt='Product Image'>
               </div>
              
               <div class='detail'>$dbrow[detail]</div>
             
               <div class='btn-group'>
                 <a href='removecart.php?cartid=$dbrow[cart_id]'>
                    <button class='btn btn-danger'>Remove cart</button>
                </a>
                  </div>
            </div>";   
        }

         $_SESSION['order_placed'] = true;
         $_SESSION['product_details'] = array(
            'quantity' => $productQuantity,
               'amount' => $total
          );


      echo"<div>

            <div class='display-3 text-success'>
                   <h2>Total Amount = $total Rs</h2>
                   <a href='place_order.php'>
                   <button class='btn btn-primary p-2'>Place Order</button>
                  </a>
                   </div>
      </div>";

?>
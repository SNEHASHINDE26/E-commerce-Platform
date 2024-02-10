<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <style>
    .header {
      display: flex;
      justify-content: space-evenly;
      background-color: bisque;
    }
  </style>
</head>
</html>


<?php

session_start();

//If login_status variable is missing in SESSION.
if (!isset($_SESSION['login_status'])) {
  echo "skipped Login. Login First";
  die;
}

//If login_status variable is available but with false value.
if ($_SESSION['login_status'] == false) {
  echo "Forbidden Login";
  die;
}


if ($_SESSION['usertype'] != 'Customer') {
  echo "Unauthorized Access";
  die;
}


echo "<div class='header'>
         
          <div>$_SESSION[userid]</div>
          <div>$_SESSION[username]</div>
          <div>$_SESSION[usertype]</div>
          <div><a href='../Shared/logout.php'>Logout</div>
   
       </div>";

?>
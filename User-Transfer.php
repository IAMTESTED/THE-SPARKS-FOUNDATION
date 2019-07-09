<?php

include "db.php";



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  </head>

<body>
  <!-- Start of Header -->
  <header>

       <!-- Header with LOGO  -->
       <nav class="top-fixed">
          <div class="logo">
            <h6>  The Sparks Foundation  </h6>

          </div>
      <!--End of LOGO Header  -->

        <!-- Header with a button to New Block  -->

      </nav>
      <!-- End of Header  -->
 </header>





  <form id="frm-101" style="margin-left:30px; margin-top:10px;" action="view-all-users.php" method="POST">
   <input type="number" style="margin-left:628px ; border-radius:3px;" id="credit" name="credit" value="credit"  min = 1 max = 10  required >
   <br>
   <?php
    $id = $_POST['credit'];
?>
   <input type="submit" value="Submit" style="margin-left:648px; border-radius:3px; margin-top : 15px">
   <?php
   mysql_query("UPDATE `user_table` SET  credit_points= 200000 WHERE id='$id' ");
   ?>
 </form>

  <?php


?>
 </body>
 </html>

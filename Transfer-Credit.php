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

 <table>
   <tr>
     <th> ID </th>
     <th> Name </th>
     <th> Credit Points </th>

   </tr>

<?php

  $id = $_GET['id'];
  $m =  mysql_query("SELECT * FROM `user_table` WHERE id = '$id' ");
  $check = mysql_fetch_array($m);
?>
<tr>
    <td><?php echo $check['id']?></td>
    <td><?php echo $check['name'];?></td>
    <td><?php echo $check['credit_points'];?></td>
  </tr>

  <form id="frm-101" style="margin-left:300px;" action="User-Transfer.php" method="POST">
   <h3 style="margin-left:600px;">Credit To Be Transfer:</h3><br>
   <input type="number" style="margin-left:628px ; border-radius:3px;" id="credit" name="credit" value="credit"  min = 100000 max = 100000  required >
   <br>
   <?php

?>
   <input type="submit" value="Submit" style="margin-left:648px; border-radius:3px; margin-top : 15px">
   <?php
   mysql_query("UPDATE `user_table` SET  credit_points= 0 WHERE id='$id' ");
   ?>
 </form>

  <?php


?>
 </body>
 </html>

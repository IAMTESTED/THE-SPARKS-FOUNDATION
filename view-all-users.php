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
     <th> View </th>
   </tr>

   <?php

    $record = mysql_query("SELECT * FROM user_table");
    while($data = mysql_fetch_array($record))
    {
      ?>
      <tr>

        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['credit_points'];?></td>
        <td><a href="view-a-user.php?id=<?php echo $data['id'];?>"style="text-decoration:none">View</a></td>
      </tr>
      <?php
    }




    ?>





</body>
</html>

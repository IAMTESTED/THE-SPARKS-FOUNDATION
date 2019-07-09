<?php
mysql_connect("localhost","root","");
$db = mysql_select_db("my_db");
if(!$db)
{
  echo "Not connection_aborted";
}
else {
}
?>

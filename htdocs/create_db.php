<?php
$con=mysql_connect("localhost","root","jaimatadi");
if(! $con)
  die('could not connect:'.mysql_error());
if(mysql_query("CREATE DATABASE peoplesearch",$con))
   echo "DB created";
else 
   echo "error".mysql_error();
?>
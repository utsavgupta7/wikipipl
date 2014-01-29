<?php
$con=mysql_connect("localhost","root","jaimatadi");
if(! $con)
 die('could not connect'.mysql_error());
if(!mysql_select_db("peoplesearch",$con))
 echo "unable to connect to db".mysql_error();
else
  $sql="INSERT INTO search5 (Fname,Lname,Sex,Age,Home_City,Current_City,Home_State,Current_State,Home_Country,Current_Country,School1,School2,College1,College2,Company1,Company2,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$_POST[Fname]','$_POST[Lname]','$_POST[Sex]','$_POST[Age]','$_POST[Home_City]','$_POST[Current_City]','$_POST[Home_State]','$_POST[Current_State]','$_POST[Home_Country]','$_POST[Current_Country]','$_POST[School1]','$_POST[School2]','$_POST[College1]','$_POST[College2]','$_POST[Company1]','$_POST[Company2]','$_POST[Friends]','$_POST[FBlink]','$_POST[g_link]','$_POST[email]','$_POST[Contact1]','$_POST[Contact2]','$_POST[Interests]','$_POST[Birthday]')";
 if(! mysql_query($sql,$con))
   die('Error:'.mysql_error());
  else 
   echo "ENTRY ADDED SUCCESSFULLY";
?>
<?php
$con=mysql_connect("localhost","root","jaimatadi");
if(! $con)
  die('could not connect:'.mysql_error());
mysql_select_db("peoplesearch",$con);
$sql="CREATE TABLE Age_search
(
Fname Varchar(30),
Lname Varchar(30),
Sex Varchar(30),
 Age Varchar(30),
 Home_City Varchar(30),
 Current_City Varchar(30),
 Home_State Varchar(30),
 Current_State Varchar(30),
 Home_Country Varchar(30),
 Current_Country Varchar(30),
 School1 Varchar(30),
 School2 Varchar(30),
 College1 Varchar(30),
 College2 Varchar(30),
 Company1 Varchar(30),
 Company2 Varchar(30),
 Friends Varchar(30),
 FBlink VARCHAR(50),
 g_link VARCHAR(50),
 email VARCHAR(50),
 Contact1 Varchar(30),
 Contact2 Varchar(30),
 Interests Varchar(30),
 Birthday Varchar(30))";
if(mysql_query($sql,$con))
echo "table created"; 
else
echo "ERROR".mysql_error();
?>
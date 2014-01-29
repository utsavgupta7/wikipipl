<?php
$con = mysql_connect("localhost","root","jaimatadi");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
if(! mysql_select_db("peoplesearch", $con))
echo "table error".mysql_error();

$result = mysql_query("SELECT * FROM search5");
echo '<table border="1">';
while($row = mysql_fetch_array($result))
{
echo "<tr><td>";
echo $row['Fname'] . " " . $row['Lname'];echo "</td><td>";
echo $row['Age'];echo "</td><td>";
echo $row['Sex'];echo "</td><td>";
echo $row['Home_City'];echo "</td><td>";
echo $row['Current_City'];echo "</td><td>";
echo $row['Home_State'];echo "</td><td>";
echo $row['Current_State'];echo "</td><td>";
echo $row['Home_Country'];echo "</td><td>";
echo $row['Current_Country'];echo "</td><td>";
echo $row['School1'];echo "</td><td>";
echo $row['School2'];echo "</td><td>";
echo $row['College1'];echo "</td><td>";
echo $row['College2'];echo "</td><td>";
echo $row['Company1'];echo "</td><td>";
echo $row['Company2'];echo "</td><td>";
echo $row['Friends'];echo "</td><td>";
echo $row['FBlink'];echo "</td><td>";
echo $row['g_link'];echo "</td><td>";
echo $row['email'];echo "</td><td>";
echo $row['interests'];echo "</td>";
echo "</tr>";
}
mysql_close($con);
?>
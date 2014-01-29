<?php
$con=mysql_connect("localhost","root","jaimatadi");
if(! $con)
 die('could not connect'.mysql_error());
if(!mysql_select_db("peoplesearch",$con))
 echo "unable to connect to db".mysql_error();
else
{

	
	
	
	if(isset($_POST['FBlink']))
	{
		$result=mysql_query('SELECT * FROM search5 WHERE FBlink="$_POST[FBlink]"');
		if(! $result)
   			echo "no results";
  		else
  		{
			echo '<table border="1">';
			while($row = mysql_fetch_array($result))
			{
			echo "<tr><td>";
			echo $row['Fname'] . " " . $row['Lname'];echo "</td><td>";
			echo $row['Age'];echo "</td><td>";
			echo $row['Sex'];echo "</td><td>";
			echo $row['City'];echo "</td><td>";
			echo $row['State'];echo "</td><td>";
			echo $row['Country'];echo "</td><td>";
			echo $row['School'];echo "</td><td>";
			echo $row['College'];echo "</td><td>";
			echo $row['Company'];echo "</td><td>";
			echo $row['Friends'];echo "</td><td>";
			echo $row['FBlink'];echo "</td><td>";
			echo $row['g_link'];echo "</td><td>";
			echo $row['email'];echo "</td><td>";
			echo $row['interests'];echo "</td><td>";
			echo $row['Contact1'];echo "</td><td>";
			echo $row['Contact2'];echo "</td><td>";
			echo "</tr>";
			}
		}
	}
	
	
	
	
	
	if(isset($_POST['g_link']))
	{
		$result=mysql_query('SELECT * FROM search5 WHERE FBlink="$_POST[g_link]"');
		if(! $result)
   			echo "no results";
  		else
  		{
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
		}
	}
	
	
	
	
	
	
	
	
	if(isset($_POST['email']))
	{
		$result=mysql_query('SELECT * FROM search5 WHERE FBlink="$_POST[email]"');
		if(! $result)
   			echo "no results";
  		else
  		{
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
		}
	}
	
	
	
	
	
	
	
	
	if(isset($_POST['Fname']))
	{
		$sql="delete from Fname_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM search5 WHERE Fname="$_POST[Fname]"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   
		   $sql="INSERT INTO Fname_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM search5');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Fname_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST['Lname']))
	{
		$sql="delete from Lname_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM Fname_search WHERE Lname="$_POST[Lname]"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Lname_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM Fname_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Lname_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}
	
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST['Sex']))
	{
		$sql="delete from Sex_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM Age_search WHERE Sex="$_POST[Sex]"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Sex_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM Lname_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Sex_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST['Age']))
	{
		$sql="delete from Age_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM Lname_search WHERE Age="$_POST[Age]"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Age_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM Lname_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Age_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST['City']))
	{
		$sql="delete from City_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM Sex_search WHERE City like "%$_POST[City]%"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO City_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM Sex_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO City_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}
	
	
	
	
	
	
	
	if(isset($_POST['State']))
	{
		$sql="delete from State_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM City_search WHERE State like "%$_POST[State]%"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO State_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM City_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO State_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}
	
	
	
	
	
	
	if(isset($_POST['Country']))
	{
		$sql="delete from Country_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM State_search WHERE Country like "%$_POST[Country]%"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Country_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM State_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Country_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}
	
	
	
	
	
	
	
	
	if(isset($_POST['School']))
	{
		$sql="delete from School_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM Country_search WHERE School like "%$_POST[School]%"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO School_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM Lname_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO School_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}


	
	
	
	
	
	if(isset($_POST['College']))
	{
		$sql="delete from College_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM School_search WHERE College like "%$_POST[College]%"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO College_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM School_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO College_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}
	
	
	
	
	
	
	
	
	
	if(isset($_POST['Company']))
	{
		$sql="delete from Company_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM College_search WHERE Company like "%$_POST[Company]%"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Company_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM College_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Company_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}
	
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST['Friends']))
	{
		$sql="delete from Friends_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM Company_search WHERE Friends like "%$_POST[Friends]%"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Friends_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM Company_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Friends_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST['Interests']))
	{
		$sql="delete from Interests_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM Friends_search WHERE Interests like "%$_POST[Interests]%"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Interests_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM Friends_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Interests_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}

	
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST['Contact1']))
	{
		$sql="delete from Contact1_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM Interests_search WHERE Contact1="$_POST[Contact1]"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Contact1_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM Interests_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Contact1_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}

	
	
	
	
	
	
	
	
	if(isset($_POST['Contact2']))
	{
		$sql="delete from Contact2_search";
		mysql_query(($sql,$con);
		$result=mysql_query('SELECT * FROM Contact1_search WHERE Contact2="$_POST[Contact2]"');
		if(! $result)
   			echo "no results";
  		else
  		{
      	while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Contact2_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
		}
	}
	else
	{
		$result=mysql_query('SELECT * FROM Contact1_search');
		while($row=mysql_fetch_array($result))
          {
           $Fname=$row['Fname'];
		   $Lname=$row['Lname'];
		   $Sex=$row['Sex'];
		   $Age=$row['Age'];
		   $City=$row['City'];
		   $State=$row['State'];
		   $Country=$row['Country'];
		   $Birthday=$row['Birthday'];
		   $School=$row['School'];
		   $College=$row['College'];
		   $Company=$row['Company'];
		   $Friends=$row['Friends'];
		   $Interests=$row['Interests'];
		   $FB_link=$row['FB_link'];
		   $g_link=$row['g_link'];
		   $email=$row['email'];
		   $Contact1=$row['Contact1'];
		   $Contact2=$row['Contact2'];
		   $sql="INSERT INTO Contact2_search(Fname,Lname,Sex,Age,City,State,Country,School,College,Company,Friends,FBlink,g_link,email,Contact1,Contact2,Interests,Birthday)VALUES('$Fname','$Lname','$Sex','$Age','$City','$State','$Country','$School','$College','$Company','$Friends','$FB_link','$g_link','$email','$Contact1','$Contact2','$Interests','$Birthday')";
           if(! mysql_query($sql,$con))
              die('Error:'.mysql_error());
            
			}
	}

	$result=mysql_query("SELECT * FROM Contact2_search");
	if(! $result)
   			echo "no results";
  		else
  		{
			echo '<table border="1">';
			while($row = mysql_fetch_array($result))
			{
			echo "<tr><td>";
			echo $row['Fname'] . " " . $row['Lname'];echo "</td><td>";
			echo $row['Age'];echo "</td><td>";
			echo $row['Sex'];echo "</td><td>";
			echo $row['City'];echo "</td><td>";
			echo $row['State'];echo "</td><td>";
			echo $row['Country'];echo "</td><td>";
			echo $row['School'];echo "</td><td>";
			echo $row['College'];echo "</td><td>";
			echo $row['Company'];echo "</td><td>";
			echo $row['Friends'];echo "</td><td>";
			echo $row['FBlink'];echo "</td><td>";
			echo $row['g_link'];echo "</td><td>";
			echo $row['email'];echo "</td><td>";
			echo $row['interests'];echo "</td><td>";
			echo $row['Contact1'];echo "</td><td>";
			echo $row['Contact2'];echo "</td><td>";
			echo "</tr>";
			}
		}
	
		
?>
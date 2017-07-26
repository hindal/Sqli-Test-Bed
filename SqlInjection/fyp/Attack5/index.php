<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attack 5 Double Query- Single Quotes- String</title>
<style>
h1{
	color:#afb5af;
	text-align:center;
	top:40px;
	margin-top:60px;
}

h2{
	color:#afb5af;
	text-align:center;
	mergin-top:60px;
}

</style>


</head>

<body background="../images/hack2.jpg" ">
<h1>Online Cab Reservation</h1>
<div style=" margin-top:10px; font-size:30px; text-align:center">


<font size="3"  color="white">

<?php
//including the Mysql connect parameters.
include("../sql-connections/sql-connect.php");
error_reporting(0);
// take the variables
if(isset($_GET['id']))
{
$id=$_GET['id'];
//logging the connection parameters to a file for analysis.
$fp=fopen('result.txt','a');
fwrite($fp,'ID:'.$id."\n");
fclose($fp);

// connectivity 


$sql="SELECT * FROM users WHERE id='$id' LIMIT 0,1";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);

	if($row)
	{
  	echo '<font size="5" color="#FFFFFF">';	
  	echo 'Keep Trying......';
  	echo "<br>";
    	echo "</font>";
  	}
	else 
	{
	
	echo '<font size="3" color="#FFFF00">';
	print_r(mysql_error());
	echo "</br></font>";	
	echo '<font color= "#0000ff" font size= 3>';	
	
	}
}
	else { echo "Please input the ID as parameter with numeric value";}

?>

</font> </div></br></br></br><center>
<!-- <img src="../images/Less-5.jpg" /></center> -->
<h2> <br><br><br><br><br><br><br> There is a local cab service in your city. But you are unable to book a cab from your account due to some reasons. You want to book a cab from your brother’s account but his mobile is out of service right now. You already know that their system have security gaps. You have to find out the security gap in their system and then find your brother’s account from their database to book a cab.</h2>

</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attack3 Error Based- String (with Twist) </title>
<style>
h1{
	color:#afb5af;
	text-align:center;
	top:40px;
	margin-top:60px;
}

</style>
</head>

<body background="../images/hack2.jpg" ">

<h1>Police Station</h1>


<div style=" margin-top:10px; font-size:30px; text-align:center">
<font size="3" color="#FFFFFF">


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


$sql="SELECT * FROM users WHERE id=('$id') LIMIT 0,1";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);

	if($row)
	{
  	echo "<font size='5' color= '#FFFFFF'>";
  	echo 'Your Login name:'. $row['username'];
  	echo "<br>";
  	echo 'Your Password:' .$row['password'];
  	echo "</font>";
  	}
	else 
	{
	echo '<font color= "#FFFF00">';
	print_r(mysql_error());
	echo "</font>";  
	}
}
	else { echo "Enter ID as parameter with numeric value";}

?>


</font> </div></br></br></br><!--<center>
<img src="../images/Less-3.jpg" /></center>-->
<h1> <br><br><br><br> You applied for a job as a cyber security analyst in local police station so that you can help them to catch Black hats or to monitor the activities of people so that police can catch any illegal activity. But for that job, first you have to test the system of police station which has security gaps. You have to find out the security gap in it, which will further help you in getting this job. Good Luck</h1>
</body>
</html>

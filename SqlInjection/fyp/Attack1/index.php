<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attack 1 **Error Based- String**</title>
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
	top:40px;
	margin-top:60px;
}


</style>
</head>

<body background="../images/hack2.jpg" ">
<h1>  <bold> University Library Management System 
</h1>
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
  	echo "<font size='5' color= 'red'>";
  	echo "<bold>";
	echo 'username:'. $row['username'];
  	echo "<br><bold>";
  	echo 'Password:' .$row['password'];
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

</font> </div></br></br></br><!--
<center>

<img src="../images/Less-2.jpg" /></center>-->

<h1> <br> <br> <br> <br>  Welcome to university library management system. As you applied for security analyst post in our university, we give you a task to test your capabilities so that we can evaluate you.
Your task is to hack the database of university library. If you successfully done the attack then we will welcome you to our university family. Best of luck </h1>

</body>

</html>





 

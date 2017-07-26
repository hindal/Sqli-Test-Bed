<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BAttack1 Blind- Boolian- Single Quotes- String</title>
<style>
h1{
	color:#afb5af;
	text-align:center;
	top:40px;
	margin-top:60px;
}
h3{
	color:#afb5af;
	text-align:center;
	top:40px;
	margin-top:60px;
}


</style>

</head>

<body background="../images/hack2.jpg" ">
<h1>Online Training Center</h1>
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
  	echo '<font size="5" color="#FFFF00">';	
  	echo 'Keep Trying .....';
  	echo "<br>";
    	echo "</font>";
  	}
	else 
	{
	
	echo '<font size="5" color="#FFFF00">';
	//echo 'You are in...........';
	//print_r(mysql_error());
	//echo "You have an error in your SQL syntax";
	echo "</br></font>";	
	echo '<font color= "#0000ff" font size= 3>';	
	
	}
}
	else { echo "Please input the ID as parameter with numeric value";}

?>

</font> </div></br></br></br><center>
<!-- <img src="../images/Less-8.jpg" /></center> -->
<h1> <br><br><br><br> The site is about to give online training courses and they charge you for taking online classes. They are in doubt that their site is not secure. You have to find the vulnerability in their site and later give them a solution to fix the security gap</h1>
</body>
</html>

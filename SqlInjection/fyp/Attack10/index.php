<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attack10 Header Injection- Error Based- string</title>
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
.bgimg{
	background-image: url('../images/hack2.jpg');
}
</style>



</head>

<body background="../images/hack2.jpg" ">

<h1>Food Ordering Portal</h1>

<div style=" margin-top:10px; font-size:30px; text-align:center">

<div class="bgimg" align="center" style="margin:40px 0px 0px 425px;border:20px; background-color:#0CF; text-align:center; width:400px; height:150px; ">

<div style="padding-top:10px; font-size:15px; ">


<!--Form to post the contents -->
<form action="" name="form1" method="post">

  <div style="margin-top:15px; height:30px; color:white;">Username : &nbsp;&nbsp;&nbsp;
	    <input type="text"  name="uname" value=""/>
	</div>  
	<div style="color:white"> Password  : &nbsp;&nbsp;&nbsp;
		<input type="text" name="passwd" value=""/>
	</div></br>
	<div style=" margin-top:9px;margin-left:90px;">
		<input type="submit" name="submit" value="Submit" />
	</div>
</form>
</div>
</div>
<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">
<font size="3" color="#FFFFFF">



<?php
//including the Mysql connect parameters.
include("../sql-connections/sql-connect.php");
error_reporting(0);
	
function check_input($value)
	{
	if(!empty($value))
		{
		// truncation (see comments)
		$value = substr($value,0,20);
		}

		// Stripslashes if magic quotes enabled
		if (get_magic_quotes_gpc())
			{
			$value = stripslashes($value);
			}

		// Quote if not a number
		if (!ctype_digit($value))
			{
			$value = "'" . mysql_real_escape_string($value) . "'";
			}
		
	else
		{
		$value = intval($value);
		}
	return $value;
	}



	$uagent = $_SERVER['HTTP_USER_AGENT'];
	$IP = $_SERVER['REMOTE_ADDR'];
	echo "<br>";
	echo 'Your IP ADDRESS is: ' .$IP;
	echo "<br>";
	//echo 'Your User Agent is: ' .$uagent;
// take the variables
if(isset($_POST['uname']) && isset($_POST['passwd']))

	{
	$uname = check_input($_POST['uname']);
	$passwd = check_input($_POST['passwd']);
	
	/*
	echo 'Your Your User name:'. $uname;
	echo "<br>";
	echo 'Your Password:'. $passwd;
	echo "<br>";
	echo 'Your User Agent String:'. $uagent;
	echo "<br>";
	echo 'Your User Agent String:'. $IP;
	*/

	//logging the connection parameters to a file for analysis.	
	$fp=fopen('result.txt','a');
	fwrite($fp,'User Agent:'.$uname."\n");
	
	fclose($fp);
	
	
	
	$sql="SELECT  users.username, users.password FROM users WHERE users.username=$uname and users.password=$passwd ORDER BY users.id DESC LIMIT 0,1";
	$result1 = mysql_query($sql);
	$row1 = mysql_fetch_array($result1);
		if($row1)
			{
			echo '<font color= "#FFFFFF" font size = 3 >';
			$insert="INSERT INTO `security`.`uagents` (`uagent`, `ip_address`, `username`) VALUES ('$uagent', '$IP', $uname)";
			mysql_query($insert);
			//echo 'Your IP ADDRESS is: ' .$IP;
			echo "</font>";
			//echo "<br>";
			echo '<font color= "#ffffff" font size = 3 >';			
			echo 'Your User Agent is: ' .$uagent;
			echo "</font>";
			echo "<br>";
			print_r(mysql_error());			
			echo "<br><br>"; 
			 echo '<img src="../images/flag.jpg"  />'; 
			echo "<br>"; 
			
			}
		else
			{
			echo '<font color= "#ffffff" font size="3">';
		//echo "Try again looser";
		print_r(mysql_error());
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo '<script language="javascript">';
		echo 'alert("invalid username or password")';
		echo '</script>';
		echo "</font>";   
			}

	}

?>


</font>
</div>
<h3> <br><br>There is a website for food ordering service through which you can place orders online and get food at door step. While testing their site you noticed that there is a possibility of sql injection by header method in their website through which data can be tempered. Your task is to perform attack and give them proofs.</h3>
</body>
</html>

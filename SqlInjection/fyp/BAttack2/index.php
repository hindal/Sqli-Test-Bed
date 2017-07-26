<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>BAttack2- Blind- Boolian Based- String</title>
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

<h1>City Sports Club</h1>


<div style=" margin-top:10px; font-size:30px; text-align:center">

<div class="bgimg" align="center" style="margin:40px 0px 0px 425px;border:20px; background-color:#0CF; text-align:center; width:400px; height:150px; ">

<div style="padding-top:10px; font-size:15px; ">
 

<!--Form to post the data for sql injections Error based SQL Injection-->
<form action="" name="form1" method="post">
<div style="margin-top:15px; height:30px; color:white">Username : &nbsp;&nbsp;&nbsp;
	    <input type="text"  name="uname" value=""/>
	</div>  
	<div style="color:white"> Password  : &nbsp;&nbsp;&nbsp;
		<input type="text" name="passwd" value=""/>
	</div></br>
	<div style=" margin-top:9px;margin-left:90px;">
		<input type="submit" name="submit" value="Submit" />
	</div>
</form>

</div></div>

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">
<font size="6" color="#FFFFFF">





<?php
//including the Mysql connect parameters.
include("../sql-connections/sql-connect.php");
error_reporting(0);

// take the variables
if(isset($_POST['uname']) && isset($_POST['passwd']))
{
	$uname=$_POST['uname'];
	$passwd=$_POST['passwd'];

	//logging the connection parameters to a file for analysis.
	$fp=fopen('result.txt','a');
	fwrite($fp,'User Name:'.$uname);
	fwrite($fp,'Password:'.$passwd."\n");
	fclose($fp);


	// connectivity 
	@$sql="SELECT username, password FROM users WHERE username='$uname' and password='$passwd' LIMIT 0,1";
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);

	if($row)
	{
  		//echo '<font color= "#0000ff">';	
  		
  		echo "<br>";
		echo '<font color= "#FFFFFF" font size = 4>';
		//echo " You Have successfully logged in\n\n " ;
		echo '<font size="3" color="#ffffff">';	
		echo "<br>";
		echo 'Your Login name:'. $row['username'];
		echo "<br>";
		echo 'Your Password:' .$row['password'];
		echo "<br>";
		echo "</font>";
		echo "<br>";
		echo "<br>";
		echo '<script language="javascript">';
		echo 'alert("Successfully logged in")';
		echo '</script>';	
		
  		echo "</font>";
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
<h3><br><br>One of your friend is a member of city sports club. He forgets his username and password. He requested the club management to reset his password but they are not helping him out. They say that he have to register again with new username and password with a fee of 300$. Your friend dont have that much amount. You have to find a way to login to their system and get his account back.</h3>
</body>
</html>

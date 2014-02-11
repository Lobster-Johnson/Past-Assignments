<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "book";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if (isset($_POST['Username']))
{
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$sql = "SELECT * FROM users WHERE Username='".$username."' AND Password ='".$password."' LIMIT 1";
	$res = mysql_query($sql);
	if(mysql_num_rows($res) == 1)
	{
		// if login is ok then we add a cookie 
		$_POST['Username'] = stripslashes($_POST['Username']);
		$hour              = time() + 3600;
		setcookie('UserID', $_POST['Username'], $hour);
		setcookie('UserPass', $_POST['Password'], $hour);
		print '<script type="text/javascript">'; 
		print 'alert("Login Successful!")'; 
		print '</script>';
		//then redirect them to the index
		include('indexin.php');
	}
	else
	{
		echo "Invalid input, please return to previous page";
		exit();
	}
}

?>


<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="LibraryStyle.css" />

<div id="header" style="background-color:#A00000;text-align:center">
<h1 class="italic">Library Book Drive Co-Operative</h1>
<h3><a href = "start.php">Return Home</a></h3>
<br></div>


<div id="menu" style="background-color:#CC3300;height:500px;width:100px;float:left;">
<b><a href = "search.php">Search</a></b><br><br>
<a href = "login.php">Login</a><br><br>
<a href = "registration.php">Register</a><br><br>
<a href = "reservecheck.php">Reserve</a><br><br>
<a href = "reservedcheck.php">View Reserved</a><br></div>

<!//Gives the user the option to login or create an account if they don't have one/>
<div id="content" style="background-color:#E8E8E8;height:500px;width:1300px;text-align center">
<br>
<form method = "post" action = "login.php">
Username: <input type = "text" name = "Username" /><br /><br />
Password: <input type = "password" name = "Password" /><br /><br />
<input type = "submit" name = "submit" value = "Log in" />
<br><br>
<h4>Don't have account?</h4>
<button type="button" onclick="location.href='registration.php'">Register for free now</button>
</form>

</div>



</body>
</html>
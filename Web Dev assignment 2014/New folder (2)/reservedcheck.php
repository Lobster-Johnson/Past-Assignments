<?php 
	if(isset($_COOKIE['UserID'])) // Checks for logged in Cookie
		{
			include('reservedbooks.php'); 
		}
	else
		{
			print '<script type="text/javascript">'; 
			print 'alert("To see what books you have reserved please login")'; 
			print '</script>';  
			include('login.php'); 
		}
?>
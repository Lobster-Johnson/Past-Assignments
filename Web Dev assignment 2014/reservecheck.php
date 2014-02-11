<?php 
	if(isset($_COOKIE['UserID'])) // Checks for logged in Cookie
		{
			include('reservebooks.php'); 
		}
	else
		{
			print '<script type="text/javascript">'; 
			print 'alert("If you want to reserve a book please log in")'; 
			print '</script>';  
			include('login.php'); 
		}
?>
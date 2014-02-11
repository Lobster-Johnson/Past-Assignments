<?php 
	if(isset($_COOKIE['UserID'])) // Checks for logged in Cookie
		{
			$username;
			include('Homepagein.php'); // Logged in, goes to logged in homepage
		}
	else
		{
			include('Homepage.php'); // Not logged in, goes to logged out homepage
		}
?>
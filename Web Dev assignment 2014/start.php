<?php 
	if(isset($_COOKIE['UserID'])) // Checks for logged in Cookie
		{
			include('indexin.php'); // Logged in, goes to logged in index
		}
	else
		{
			include('index.php'); // Not logged in, goes to logged out index
		}
?>
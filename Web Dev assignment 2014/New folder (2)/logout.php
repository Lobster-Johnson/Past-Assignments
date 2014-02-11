<?php 
	 $end = time() - 100;  // Sets the timer Cookie to expire
	 //this makes the time in the past to destroy the cookie 
	 setcookie('UserID', 'gone', $end); 
	 setcookie('UserPass', 'gone', $end);
	 print '<script type="text/javascript">'; 
	 print 'alert("Successfully logged out")'; 
	 print '</script>';
	 include('login.php');  // Redirects to Login.php
 ?> 
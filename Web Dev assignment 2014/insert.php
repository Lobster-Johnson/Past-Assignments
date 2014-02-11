<?php
$con=mysqli_connect("localhost","root","","book");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if (isset($_POST['submit'])) 
		{ 

			// Checks if Passwords are false, if they are then error
			if ($_POST['Password1'] != $_POST['Password2']) 
			{
				echo('Your Passwords did not match. <br>Please retry. <a href="login.php">By going back to the registrations page.</a>');
				die();	// Kills the code
			}

			// Inserts Registration Details into SQL
			$sql = "INSERT INTO users (Username, Password, FirstName, Surname, AddressLine1, AddressLine2, City, Telephone, Mobile)
				VALUES ('$_POST[Username]', '$_POST[Password1]', '$_POST[Firstname]', '$_POST[Surname]', '$_POST[Addressline1]', '$_POST[Addressline2]', '$_POST[City]', '$_POST[Telephone]', '$_POST[Mobile]')";
			
			// Checks if the two variables are false. If they don't match error.
			if (!mysqli_query($con, $sql))
				{
				echo('They dont match. <a href="register.php">Go back to the registrations page.</a>');
				die(); // This die() will terminate if there's any errors
				}
		}
//<h2>Registered</h2>;
 echo ' <p>Thank you, you have registered -<a href="login.php">you may now login</a>. </p>';		
//close connection
//mysql_close($con);
?>
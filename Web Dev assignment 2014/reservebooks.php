<?php
$con=mysqli_connect("localhost", "root", "", "book");
$username = $_COOKIE['UserID'];
if (mysqli_connect_errno($con)) // Checks to see if connection to the Database exists
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error(); // Display DB Connection Error
	  }
?>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="LibraryStyle.css" />

<div id="header" style="background-color:#A00000;text-align:center">
<h1 class="italic">Library Book Drive Co-Operative</h1>
<h3><a href = "start.php">Return Home</a></h3>
<h3>You are currently logged in as </h3>
<?php echo $username  ?><br>
<button type="button" onclick="location.href='logout.php'">Log out</button>
<br></div>


<div id="menu" style="background-color:#CC3300;height:500px;width:100px;float:left;">
<b><a href = "search.php">Search</a></b><br><br>
<a href = "login.php">Login</a><br><br>
<a href = "registration.php">Register</a><br><br>
<a href = "reservecheck.php">Reserve</a><br><br>
<a href = "reservedcheck.php">View Reserved</a><br></div>

<div id="content" style="background-color:#E8E8E8;height:500px;width:1300px;text-align center">
<br>
<h3>The following Books can be reserved</h3>
<?php
	$lookup = mysqli_query($con, "SELECT booktable.BookTitle, booktable.Author FROM booktable WHERE Reserved =0");
?>

	<table border = "1">
	
	<tr>
                   <td align="center"><table class="BookTable">
                             <thead>
                                  <tr>
                                        <th width="15%">Title</th>
                                        <th width="15%">Author</th>
                                 </tr>
							</thead>
							<tbody>
							
							<?php while($row = mysqli_fetch_array($lookup)) 
                                {
									echo "<tr>";
										echo "<td>" . $row['BookTitle'] . "</td>";
										echo "<td>" . $row['Author'] . "</td>";
									echo "</tr>";
                                }
								?>
	</tr>
	</table>

</div>

</body>
</html>
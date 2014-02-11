<?php
$con=mysqli_connect("localhost", "root", "", "book");
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
<br></div>


<div id="menu" style="background-color:#CC3300;height:500px;width:100px;float:left;">
<b><a href = "search.php">Search</a></b><br><br>
<a href = "login.php">Login</a><br><br>
<a href = "registration.php">Register</a><br><br>
<a href = "reservecheck.php">Reserve</a><br><br>
<a href = "reservedcheck.php">View Reserved</a><br></div>

<div id="content" style="background-color:#E8E8E8;height:500px;width:1300px;text-align center">
<br>
<center>
<h3>You have reserved the following books:</h3>
<?php
	$reserve = mysqli_query($con, "SELECT booktable.Booktitle, booktable.Author INNER JOIN reservations ON  reservations.Username = $username");
	
				echo '<tr>';
                   echo '<td align="center"><table class="BookTable">';
                             echo ' <thead>';
                                 echo ' <tr>';
                                        echo ' <th width="15%">Title</th>';
                                        echo '<th width="15%">Author</th>';
                                        echo '<th width="15%">ISBN</th>';							
										echo '<th width="4%">Username</th>';									
                                        echo '<th width="4%">Reserve Date</th>';
                                 echo '</tr>';
							echo '</thead>';
							echo '<tbody>';
							
							while($row = mysqli_fetch_array($reserve)) 
                                {
									echo "<tr>";
										echo "<td>" . $row['Title'] . "</td>";
										echo "<td>" . $row['Author'] . "</td>";
										echo "<td>" . $row['ISBN'] . "</td>";
										echo "<td>" . $row['Username'] . "</td>";
										echo "<td>" . $row['Reserve Date'] . "</td>";
									echo "</tr>";
                                }	
?>
</center>
</div>

</body>
</html>
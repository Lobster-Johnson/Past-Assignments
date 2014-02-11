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
<?php
$con=mysqli_connect("localhost", "root", "", "book");
if (mysqli_connect_errno($con)) // Checks to see if connection to the Database exists
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error(); // Display DB Connection Error
	  }
?>
        <center>
			<table class="BookTable">
                <tbody>
                    <form method="post" action="searchresults.php">
                        <tr align="center">
                            <td>Please select to search by a book using book title, author or ISBN<br>                                
                              <input type="text" name="Search" value="" size="30"></td>
                        </tr>
                        <tr>
							<td align="center">
								<input type="radio" name="SearchRadio" required value="BookTitle">
								Title
								 <input type="radio" name="SearchRadio" required value="Author">
								Author
								<input type="radio" name="SearchRadio" required value="ISBN">
								ISBN
							</td>
                        </tr>
                        <tr>
                          <td align="center"><input type="submit" value="Search" name="SearchButton"></td>
                        </tr>
                        <tr>
                            <td align="center">

<?php
	$radio = isset($_POST['SearchRadio']);
	$ColumnSearch  = $_POST['SearchRadio'];
	$search = strtolower($_POST['Search']) ;
					
	$result = mysqli_query($con, "SELECT booktable.*, categories.CategoryDescription FROM booktable INNER JOIN categories ON booktable.Category=categories.CategoryID WHERE  $ColumnSearch LIKE '%$search%' ");				
			
	
		if(isset($_COOKIE['UserID'])) // Checks for Cookie ie if user is logged in
			{
				echo '</form>';
				echo '<tr>';
                   echo '<td align="center"><table class="BookTable">';
                             echo ' <thead>';
                                 echo ' <tr>';
                                        echo ' <th width="15%">ISBN</th>';
                                        echo '<th width="15%">Title</th>';
                                        echo '<th width="15%">Author</th>';							
										echo '<th width="4%">Edition</th>';									
                                        echo '<th width="4%">Year</th>';
                                        echo '<th width="4%">Category</th>';							   
									    echo '<th width="15%">Reserved</th>';
                                 echo '</tr>';
							echo '</thead>';
							echo '<tbody>';

							while($row = mysqli_fetch_array($result)) 
                                {
									echo "<tr>";
										echo "<td>" . $row['ISBN'] . "</td>";
										echo "<td>" . $row['BookTitle'] . "</td>";
										echo "<td>" . $row['Author'] . "</td>";
										echo "<td>" . $row['Edition'] . "</td>";
										echo "<td>" . $row['Year'] . "</td>";
										echo "<td>" . $row['CategoryDescription'] . "</td>";
										if ($row['Reserved'] ==0)
											{
												echo "<td>Not Reserved</td>";
											}
										else
											{
												echo '<td>Reserved</td>';
											}
									echo "</tr>";
                                }		
			}
			else//if there is no cookie
			{
				echo '<tr>';
				echo '<td align="center"><table border="1" cellspacing="3" cellpadding="3">';
				echo ' <thead>';
					echo ' <tr>';
						echo '<th width="15%">ISBN</th>';
						echo '<th width="15%">Title</th>';
						echo '<th width="15%">Author</th>';							
						echo '<th width="4%" >Edition</th>';									
						echo '<th width="4%">Year</th>';
						echo '<th width="4%">Category</th>';							   
					echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
				while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
							echo "<td>" . $row['ISBN'] . "</td>";
							echo "<td>" . $row['BookTitle'] . "</td>";
							echo "<td>" . $row['Author'] . "</td>";
							echo "<td>" . $row['Edition'] . "</td>";
							echo "<td>" . $row['Year'] . "</td>";
							echo "<td>" . $row['CategoryDescription'] . "</td>";
						echo "</tr>";						
					}

			}								
?>
						</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		
 </center>
 </html>
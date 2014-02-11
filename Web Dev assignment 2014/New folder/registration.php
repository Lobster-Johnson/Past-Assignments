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

<div id="content" style="background-color:#E8E8E8;height:500px;width:1300px;text-align center";><br>
<h4>So, You want to join the Library? Fill out the following form</h4><br><br>
<form action="insert.php" method="post"><table border="0">
<tr>
<td>Username: <input type="text" name="Username" required="required"></td>
</tr>
<tr>
<td>Password: <input type="Password" name="Password1" minlength="6" maxlength="6" required="required"></td>
</tr>
<tr>
<td>Confirm Password: <input type="Password" name="Password2" minlength="6" maxlength="6" required="required"></td>
</tr>
<tr>
<td>Firstname: <input type="text" name="Firstname" required="required"></td>
</tr>
<tr>
<td>Surname: <input type="text" name="Surname" required="required"></td>
</tr>
<tr>
<td>Addressline1: <input type="text" name="Addressline1" required="required"></td>
</tr>
<tr>
<td>Addressline2: <input type="text" name="Addressline2" required="required"></td>
</tr>
<tr>
<td>City: <input type="text" name="City" required="required"></td>
</tr>
<tr>
<td>Telephone: <input type="text" name="Telephone" required="required"></td>
</tr>
<tr>
<td>Mobile: <input type="text" name="Mobile" required="required"></td>
</tr>
<tr>
<td><input type="submit"><input type="reset"></td>
</tr>
</form>

</div>



</body>
</html>
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
<center>
    <table class="BookTable">
                <tbody>
                    <form method="post" action="searchresults.php">
                        <tr align="center">
                            <td>Please select to search by a book using book title, author or ISBN<br>                                
                              <input type="text" name="Search" value="" size="30"></td>
                        </tr>
                        <tr>
							<td align="center"><input type="radio" name="SearchRadio" required value="BookTitle">
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
                                <table border="0" cellspacing="3" cellpadding="3">
                                    <thead>
                                        <tr>
                                            <th width="">&nbsp;</th>
                                            <th width="">&nbsp;</th>
                                            <th width="">&nbsp;</th>
                                            <th width="">&nbsp;</th>
                                            <th width="">&nbsp;</th>
                                            <th width="">&nbsp;</th>
                                            <th width="">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                </tbody>
                </form>
            </table>
        </center>
 
</div>



</body>
</html>

<?php
session_start();

if(!isset($_SESSION['a_lname'])){
	
	echo "<script>window.open('login.php?not_authorize=Authentication failure! Please Contact System Admin.','_self')</script>";
}

else {


?>


<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Admin</title>

<link rel="stylesheet"  href="style.css" />

<link rel="stylesheet"  href="box_style.css" />

</head>

<body>

<div class="wrapper">
	
	<!--This is header-->
	<div class="header" align="center"><h1>TADIWA SYSTEM</h1><h2>(ADMIN)</h2></div>
	<!--End of header-->
	
	
	<!--This is left sidebar-->
	<div class="left">
	<br>
		<h3 style="padding: 10px; text-decoration: underline; font-weight: bold; ">MANAGEMENT CONTENT:</h3>
	<br>
		
		<button class="button" style="vertical-align: middle"><span><a href="http://localhost:8080/GMS/admin/index.php?sel_user">VIEW SECTIONS</a></span></button>
		
	</div>
	<!--End of left sidebar-->
	
	
	
	
	<!--This is Content-->
	<div class="right">
	
	<h3 style="color: #16365d; text-align: right;"> Hello  <?php echo ucwords($_SESSION['a_lname']); ?>! </h3>
	
	<div align="center"> <br /> <br />
	
	
<form action="" method="post" enctype="multipart/form-data" >
	
<table width="745" align="center" border="2">
	
	
<p style="text-align: center;"><strong><span style="text-decoration: underline;">RECEPTIONIST DETAILS:</span></strong></p>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>First Name:</strong></td>
		<td><input type="text" name="r_fname" id="r_fname" size="35" class="text" placeholder="First Name" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Last Name:</strong></td>
		<td><input type="text" name="r_lname" id="r_lname" size="35" class="text" placeholder="Last Name" required=""/></td>
	</tr>
		
    <tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Phone Number:</strong></td>
		<td><input type="text" name="r_pno" id="r_pno" size="35"class="text" placeholder="Phone number" required=""/></td>		
	</tr>
	
	<tr>
	    <td align="right" bgcolor="#dbe5f1"><strong>Gender:</strong></td>		
		<td><input type="radio" name="r_gender" value="Male" > Male
        <input type="radio" name="r_gender" value="Female"> Female</td>	
	</tr>
		
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Password:</strong></td>
		<td><input type="text" name="r_pass" id="r_pass" size="35" class="text" placeholder="Password" required=""/></td>		
	</tr>
	
	<tr>
		<td><input type="reset" class="reset-button" value="CLEAR"></td>
		<td colspan="6" align="center" bgcolor="#dbe5f1" ><input type="submit" name="submit" class="submit-button" value="SAVE"></td>		
	</tr>
	
	</table>
	
</form>
	
</div>

        <?php
	  
include ("db_con.php");
	  
if(isset($_POST['submit'])){
	
	//getting the text data from the fields
	$r_fname = $_POST["r_fname"];
	$r_lname = $_POST["r_lname"];
	$r_pno = $_POST["r_pno"];
	$r_gender = $_POST["r_gender"];
	$r_pass = $_POST["r_pass"];
	
	
	$query = mysqli_query($con, "insert into receptionist 
	(r_fname, r_lname, r_pno, r_gender, r_pass)
	values
	('$r_fname', '$r_lname', '$r_pno', '$r_gender', '$r_pass') ");
	
	if($query)
	{
		echo "<script>alert('Details has been inserted.')</script>";
	}
	else
	{
		echo "<script>alert('There is something wrong! Details not inserted.')</script>";
	}
	
}

?>
         
	</div>
	<!--End of Content-->

	<!--This is Footer-->
	<div align="center" style="background-color:#16365d; font-size: 20px; color: #fff;" >
	<i>© 2017 ALL RIGHTS RESERVED – TADIWA</i>
	</div>
	<!--End of Footer-->
				
</div>


</body>

	
</html>


<?php } ?>



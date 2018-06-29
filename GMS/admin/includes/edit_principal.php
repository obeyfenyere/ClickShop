

<?php
session_start();

if(!isset($_SESSION['a_lname'])){
	
	echo "<script>window.open('login.php?not_authorize=Authentication failure! Please Contact System Admin.','_self')</script>";
}

else {


?>


<?php
include('db_con.php');

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{  
   // get values form input text and number
   
   $p_fname = $_POST['b_fname'];
   $p_lname = $_POST['b_lname'];
   $p_pno = $_POST['b_pno'];
   $p_gender = $_POST['b_gender'];
   $p_pass = $_POST['b_pass'];
           
   // mysql query to Update data
   $update = "update principal set p_fname = '$p_fname', p_lname = '$p_lname', p_pno = '$p_pno', p_gender = '$p_gender', p_pass = '$p_pass'";
   
   $result = mysqli_query($con, $update);
   
   if($result)
   {
       echo 'Data Updated';
   }
   else
   {
       echo 'Data Not Updated';
   }

}

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
		
		<button class="button" style="vertical-align: middle"><span><a href="http://localhost:8080/GMS/admin/index.php?view_user">VIEW SECTIONS</a></span></button>
		
	</div>
	<!--End of left sidebar-->
	
	
	
	
	<!--This is Content-->
	<div class="right">
	
	<h3 style="color: #16365d; text-align: right;"> Hello  <?php echo ucwords($_SESSION['a_lname']); ?>! </h3>
	
	
	<div align="center"> <br /> <br />
	
	
<?php
	
include('db_con.php');

$sql = "SELECT * FROM principal";

$result = mysqli_query($con,$sql)or die(mysqli_error());

while($row = mysqli_fetch_array($result)){
	
	$p_fname = $row['p_fname'];
    $p_lname = $row['p_lname'];
    $p_pno = $row['p_pno'];
	$p_gender = $row['p_gender'];
    $p_pass = $row['p_pass'];
	
} 

mysqli_close($con);
	
?>


	
	
	
<form action="" method="post" enctype="multipart/form-data" >
	
<table width="745" align="center" border="2">
	
	
<p style="text-align: center;"><strong><span style="text-decoration: underline;">PRINCIPAL DETAILS:</span></strong></p>


	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>First Name:</strong></td>
		<td><input type="text" name="b_fname" id="b_fname" size="35" class="text" placeholder="First Name" value="<?php echo $p_fname; ?>" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Last Name:</strong></td>
		<td><input type="text" name="b_lname" id="b_lname" size="35" class="text" placeholder="Last Name" value="<?php echo $p_lname; ?>" required=""/></td>
	</tr>
		
    <tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Phone Number:</strong></td>
		<td><input type="text" name="b_pno" id="b_pno" size="35"class="text" placeholder="Phone number" value="<?php echo $p_pno; ?>" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Gender:</strong></td>
		<td><input type="text" name="b_gender" id="b_gender" size="35" class="text" placeholder="Gender" value="<?php echo $p_gender; ?>" required=""/></td>		
	</tr>
		
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Password:</strong></td>
		<td><input type="text" name="b_pass" id="b_pass" size="35" class="text" placeholder="Password" value="<?php echo $p_pass; ?>" required=""/></td>		
	</tr>
	
	<tr>
		<td colspan="6" align="center" bgcolor="#dbe5f1" ><input type="submit" name="update" class="submit-button" value="UPDATE"></td>		
	</tr>
	
	</table>
	
</form>
	
</div>


	</div>
	<!--End of Content-->

	<!--This is Footer-->
	<div align="center" style="background-color:#16365d; font-size: 20px; color: #fff;" >
	<i>© 2018 ALL RIGHTS RESERVED –TADIWA</i>
	</div>
	<!--End of Footer-->
				
</div>


</body>

	
</html>

<?php } ?>





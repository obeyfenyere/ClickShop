
<?php
@session_start();

if(!isset($_SESSION['b_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=<h3>Authentication failure! Please Contact Your System Admin.</h3>','_self')</script>";
}

else {


?>


<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Make Invoice</title>
<link rel="stylesheet"  href="box_style.css" />
</head>

<body>

<div align="center"> <br /> <br />
	
	
<form action="" method="post" enctype="multipart/form-data" >
	
<table width="745" align="center" border="2">
	
	
<p style="text-align: center;"><strong><span style="text-decoration: underline;"><h2>MAKE INVOICE:<h2></span></strong></p>

<br/>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Registration Number:</strong></td>
		<td><input type="text" name="reg_no" id="reg_no" size="35" class="text" placeholder="Registration Number" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Cost(Tshs):</strong></td>
		<td><input type="text" name="cost" id="cost" size="35" class="text" placeholder="Cost" required=""/></td>
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
	$reg_no = $_POST["reg_no"];
	$cost = $_POST["cost"];
	
	$query = mysqli_query($con, "insert into invoice 
	(reg_no, cost)
	values
	('$reg_no', '$cost') ");
	
	if($query)
	{
		echo "<script>alert('Cost has been inserted.')</script>";
		echo "<script>window.open('index.php?view_all_invoice','_self')</script>";
	}
	else
	{
		echo "<script>alert('There is something wrong! Cost not inserted.')</script>";
	}
	
}

?>

</body>


</html>



<?php } ?>






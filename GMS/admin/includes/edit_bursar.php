
<?php
session_start();

if(!isset($_SESSION['a_lname'])){
	
	echo "<script>window.open('login.php?not_authorize=Authentication failure! Please Contact System Admin.','_self')</script>";
}

else {

?>

   
<?php

include("db_con.php");

$edit_b_id = filter_input(INPUT_GET, 'edit_bursar', FILTER_VALIDATE_INT, ['options' => ['default' => NULL]]);

if(isset($_POST['update'])){ 

    $update_i_id = $edit_i_id;

    //getting the text data from the fields
    $reg_no = $_POST["reg_no"];
	$cost = $_POST["cost"];;

    $update = "update invoice set
    reg_no = '$reg_no', cost = '$cost' where i_id = $update_i_id";

    $run = mysqli_query($con, $update);

    if($run)
    {
        echo "<script>alert('Bursar details has been updated')</script>";
		echo "<script>window.open('index.php?view_bursar','_self')</script>";
    }
    else
    {
        echo "<script>alert('There is something wrong! Details not Updated')</script>";
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
	<div class="header" align="center"><h1>CHUO CHA UFUNDI MBALIZI</h1><h2>(ADMIN)</h2></div>
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
	
include ("db_con.php");
	
	/*
	
if(isset($_GET['edit_bursar'])){
    $edit_b_id = $_GET['edit_bursar'];
    $select_bursar = "select * from bursar where b_id='$edit_b_id'";
    $run_query = mysqli_query($con, $select_bursar);
    while($row_bursar = mysqli_fetch_array($run_query)){

    $b_id = $row_bursar['b_id'];   
    $b_fname = $row_bursar['b_fname'];
    $b_lname = $row_bursar['b_lname'];
	$b_pno = $row_bursar['b_pno'];
    $b_gender= $row_bursar['b_gender'];
    $b_pass = $row_bursar['b_pass'];
		
	}
}*/
	
	
if(isset($_GET['edit_bursar'])){
	
    $edit_b_id = $_GET['edit_bursar'];
	
    $select_bursar = "select * from bursar where b_id='$edit_b_id'";
	
    $run_query = mysqli_query($con, $select_bursar);
	
    $row_bursar = mysqli_fetch_array($run_query);

    $b_id = $row_bursar['b_id'];   
    $b_fname = $row_bursar['b_fname'];
    $b_lname = $row_bursar['b_lname'];
	$b_pno = $row_bursar['b_pno'];
    $b_gender= $row_bursar['b_gender'];
    $b_pass = $row_bursar['b_pass'];
		
}

?>


<form action="" method="post" enctype="multipart/form-data" >
	
<table width="745" align="center" border="2">
	
	
<p style="text-align: center;"><strong><span style="text-decoration: underline;">BURSAR DETAILS:</span></strong></p>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>First Name:</strong></td>
		<td><input type="text" name="b_fname" id="b_fname" size="35" class="text" placeholder="First Name" value="<?php echo $b_fname; ?>" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Last Name:</strong></td>
		<td><input type="text" name="b_lname" id="b_lname" size="35" class="text" placeholder="Last Name" value="<?php echo $b_lname; ?>" required=""/></td>
	</tr>
		
    <tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Phone Number:</strong></td>
		<td><input type="text" name="b_pno" id="b_pno" size="35"class="text" placeholder="Phone number" value="<?php echo $b_pno; ?>" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Gender:</strong></td>
		<td><input type="text" name="b_gender" id="b_gender" size="35" class="text" placeholder="Gender" value="<?php echo $b_gender; ?>" required=""/></td>		
	</tr>
		
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Password:</strong></td>
		<td><input type="text" name="b_pass" id="b_pass" size="35" class="text" placeholder="Password" value="<?php echo $b_pass; ?>" required=""/></td>		
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
	<i>© 2017 ALL RIGHTS RESERVED – CHUO CHA UFUNDI MBALIZI</i>
	<h6>(GARAGE MANAGEMENT SYSTEM)</h6>
	<h6><i>Contact Us: 0765102244 / josephmhecha@hotmail.com<i></h6>
	</div>
	<!--End of Footer-->
				
</div>


</body>

	
</html>

<?php } ?>





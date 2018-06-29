<?php
session_start();

if(!isset($_SESSION['a_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=Authentication failure! Please Contact Your System Admin.','_self')</script>";
}

else {


?>


<?php
include("db_con.php");

if(isset($_GET['delete_receptionist'])){
	
	$delete_r_id = $_GET['delete_receptionist'];
	
	$delete_receptionist = "delete from receptionist where r_id='$delete_r_id'";
	
	$run_delete = mysqli_query($con, $delete_receptionist);
	
	echo "<script>alert('A user has been deleted')</script>";
	
	echo "<script>window.open('../includes/view_receptionist.php','_self')</script>";

	
}


?>




<?php } ?>



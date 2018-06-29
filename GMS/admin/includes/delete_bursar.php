<?php
session_start();

if(!isset($_SESSION['a_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=Authentication failure! Please Contact Your System Admin.','_self')</script>";
}

else {


?>


<?php
include("db_con.php");

if(isset($_GET['delete_bursar'])){
	
	$delete_b_id = $_GET['delete_bursar'];
	
	$delete_bursar = "delete from bursar where b_id='$delete_b_id'";
	
	$run_delete = mysqli_query($con, $delete_bursar);
	
		echo "<script>alert('A user has been deleted')</script>";
	
	echo "<script>window.open('../includes/view_bursar.php','_self')</script>";

	
}


?>




<?php } ?>



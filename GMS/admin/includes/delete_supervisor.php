<?php
session_start();

if(!isset($_SESSION['a_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=Authentication failure! Please Contact Your System Admin.','_self')</script>";
}

else {


?>


<?php
include("db_con.php");

if(isset($_GET['delete_supervisor'])){
	
	$delete_s_id = $_GET['delete_supervisor'];
	
	$delete_supervisor = "delete from supervisor where s_id='$delete_s_id'";
	
	$run_delete = mysqli_query($con, $delete_supervisor);
	
	echo "<script>alert('A user has been deleted')</script>";
	
	echo "<script>window.open('../includes/view_supervisor.php','_self')</script>";

	
}


?>




<?php } ?>



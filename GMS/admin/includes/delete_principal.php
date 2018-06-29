<?php
session_start();

if(!isset($_SESSION['a_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=Authentication failure! Please Contact Your System Admin.','_self')</script>";
}

else {


?>


<?php
include("db_con.php");

if(isset($_GET['delete_principal'])){
	
	$delete_p_id = $_GET['delete_principal'];
	
	$delete_principal = "delete from principal where p_id='$delete_p_id'";
	
	$run_delete = mysqli_query($con, $delete_principal);
	
	echo "<script>alert('A user has been deleted')</script>";
	
	echo "<script>window.open('../includes/view_principal.php','_self')</script>";

	
}


?>




<?php } ?>



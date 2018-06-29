<?php
session_start();

if(!isset($_SESSION['r_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=Authentication failure! Please Contact Your System Admin.','_self')</script>";
}

else {


?>


<?php
include("db_con.php");

if(isset($_GET['delete_customer_details'])){
	
	$delete_reg_no = $_GET['delete_customer_details'];
	
	$delete_customer_details = "delete from customer_details where reg_no='$delete_reg_no'";
	
	$run_delete = mysqli_query($con, $delete_customer_details);
	
		echo "<script>alert('A Customer has been deleted')</script>";
	
	echo "<script>window.open('../index.php?view_all_customers','_self')</script>";

	
}




?>




<?php } ?>



<?php
session_start();

if(!isset($_SESSION['b_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=Authentication failure! Please Contact Your System Admin.','_self')</script>";
}

else {


?>


<?php
include("db_con.php");

if(isset($_GET['delete_invoice'])){
	
	$delete_i_id = $_GET['delete_invoice'];
	
	$delete_invoice = "delete from invoice where i_id='$delete_i_id'";
	
	$run_delete = mysqli_query($con, $delete_invoice);
	
		echo "<script>alert('An invoice has been deleted')</script>";
	
	echo "<script>window.open('../index.php?view_all_invoice','_self')</script>";

	
}




?>




<?php } ?>



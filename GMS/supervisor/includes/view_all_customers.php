<?php
@session_start();

if(!isset($_SESSION['s_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=<h3>Authentication failure! Please Contact Your System Admin.</h3>','_self')</script>";
}

else {


?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View all customers</title>

<style type="text/css">
	th, td, tr, table {padding: 0; margin: 0;}	
	
	th {border-left:2px solid #333; border-bottom: 3px solid #333;}
	
	td {padding: 2px; border-left: 2px solid #999;}
	
	h2 {padding: 10px;}
	
</style>


</head>

<body>
<table align="center" bgcolor="#dbe5f1" width="745">

	
	<tr>
		<td colspan="10" align="center" bgcolor="#dbe5f1"><h2>CUSTOMERS</h2></td>
	</tr>
	
	<tr>
		<th>REG NO</th>
		<th>CUSTOMER NAME</th>
		<th>MODEL</th>
		<th>VIN</th>
		<th>VIEW</th>
	</tr>
	
<?php
include ("db_con.php");
	
	$get_customer_details = "select * from customer_details";
	
	$run_customer_details = mysqli_query($con, $get_customer_details);
	
	$i=1;
	
	while ($row_customer_details = mysqli_fetch_array($run_customer_details, MYSQLI_ASSOC)){
		
		$reg_no = $row_customer_details['reg_no'];
		$customer_name = $row_customer_details['customer_name'];
		$model = $row_customer_details['model'];
		$vin = $row_customer_details['vin'];
	
?>	
	
   <tr align="center">
	    <td><?php echo /*$i++;*/ $reg_no ?></td> 
	    <td><?php echo $customer_name; ?></td>
	    <td><?php echo $model; ?></td>
	    <td><?php echo $vin; ?></td>
	    
	    <td><a href="index.php?edit_customer=<?php echo $reg_no; ?>">View</a></td>
  </tr>

<?php } ?>	
	
</table>

</body>
</html>


<?php } ?>



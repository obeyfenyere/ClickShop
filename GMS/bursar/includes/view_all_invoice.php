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
<title>View all customers</title>

<style type="text/css">
	th, td, tr, table {padding: 0; margin: 0;}	
	
	th {border-left:2px solid #333; border-bottom: 3px solid #333;}
	
	td {padding: 2px; border-left: 2px solid #999;}
	
	h2 {padding: 10px;}
	
</style>


</head>

<body>
<br/>
<table align="center" bgcolor="#dbe5f1" width="745">

	
	<tr>
		<td colspan="10" align="center" bgcolor="#dbe5f1"><h2>CUSTOMERS</h2></td>
	</tr>
	
	<tr>
		<th>REG NO</th>
		<th>COST(TSHS)</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	
<?php
include ("db_con.php");
	
	$get_invoice = "select * from invoice";
	
	$run_invoice = mysqli_query($con, $get_invoice);
	
	$i=1;
	
	while ($row_invoice = mysqli_fetch_array($run_invoice, MYSQLI_ASSOC)){
		
		$i_id = $row_invoice['i_id'];
		$reg_no = $row_invoice['reg_no'];
		$cost = $row_invoice['cost'];
	
?>	
	
   <tr align="center">
	    <td><?php echo /*$i++;*/ $reg_no ?></td> 
	    <td><?php echo $cost; ?></td>
	    
	    <td><a href="index.php?edit_invoice=<?php echo $i_id; ?>">Edit</a></td>
	    <td><a href="includes/delete_invoice.php?delete_invoice=<?php echo $i_id; ?>"onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
  </tr>

<?php } ?>	
	
</table>

</body>
</html>


<?php } ?>



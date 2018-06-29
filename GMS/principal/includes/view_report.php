<?php
@session_start();

if(!isset($_SESSION['p_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=<h3>Authentication failure! Please Contact Your System Admin.</h3>','_self')</script>";
}

else {


?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View report</title>

<style type="text/css">
	th, td, tr, table {padding: 0; margin: 0;}	
	
	th {border-left:2px solid #333; border-bottom: 3px solid #333;}
	
	td {padding: 2px; border-left: 2px solid #999;}
	
	h2 {padding: 10px;}
	
</style>


</head>

<body>
<br/>
<br/>
<h2 align="center">RIPORT</h2>
<br/>
<table align="center" id="resultTable" data-responsive="table" style="text-align: center; width: 400px;" border="1" cellspacing="0" cellpadding="4">
<thead>
	<tr>
		<th> Reg No </th>
		<th> Cost </th>
	</tr>
</thead>
<tbody>
<?php
include('connect.php');
$result = $db->prepare("SELECT * FROM invoice");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
?>
<tr>
<td><?php echo $row['reg_no']; ?></td>
<td><?php echo $row['cost']; ?></td>
</tr>
<?php
}
?>
</tbody>
<thead>
	<tr>
		<th> Total </th>
		<th> 
			<?php
			$results = $db->prepare("SELECT sum(cost) FROM invoice");
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
			echo $rows['sum(cost)'];
			}
			?>
		</th>
	</tr>
</thead>
</table>

</body>
</html>


<?php } ?>



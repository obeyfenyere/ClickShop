
<?php
session_start();

if(!isset($_SESSION['a_lname'])){
	
	echo "<script>window.open('login.php?not_authorize=Authentication failure! Please Contact System Admin.','_self')</script>";
}

else {


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
	<div class="header" align="center"><h1>TADIWA SYSTEM</h1><h2>(ADMIN)</h2></div>
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
	
<table align="center" bgcolor="#dbe5f1" width="745">

	
	<tr>
		<td colspan="10" align="center" bgcolor="#dbe5f1" ><h2>PRINCIPAL</h2></td>
	</tr>
	
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	
<?php
include ("db_con.php");
	
	$get_principal= "select * from principal";
	
	$run_principal = mysqli_query($con, $get_principal);
	
	$i=1;
	
	while ($row_principal = mysqli_fetch_array($run_principal, MYSQLI_ASSOC)){
		
		$p_id = $row_principal['p_id'];
		$p_fname = $row_principal['p_fname'];
		$p_lname = $row_principal['p_lname'];
	
?>	
	
   <tr align="center">
	    <td><?php echo $i++; $p_id ?></td> 
	    <td><?php echo $p_fname; ?>&nbsp;&nbsp;<?php echo $p_lname; ?></td>
	    
	    <td><a href="edit_principal.php?edit_principal=<?php echo $p_id; ?>">Edit</a></td>
	    <td><a href="delete_principal.php?delete_principal=<?php echo $p_id; ?>"onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
  </tr>

<?php } ?>	
	
</table>
	

         
	</div>
<!--End of Content-->

	
				
</div>


</body>
	
<!--This is Footer-->
	<div align="center" style="background-color:#16365d; font-size: 20px; color: #fff;" >
	<i>© 2018 ALL RIGHTS RESERVED – TADIWA</i>
	</div>
<!--End of Footer-->

	
</html>


<?php } ?>



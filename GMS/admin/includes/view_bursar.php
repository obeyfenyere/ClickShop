
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
	<div class="header" align="center"><h1>CHUO CHA UFUNDI MBALIZI</h1><h2>(ADMIN)</h2></div>
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
		<td colspan="10" align="center" bgcolor="#dbe5f1" ><h2>BURSAR</h2></td>
	</tr>
	
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>
	
<?php
include ("db_con.php");
	
	$get_bursar= "select * from bursar";
	
	$run_bursar = mysqli_query($con, $get_bursar);
	
	$i=1;
	
	while ($row_bursar = mysqli_fetch_array($run_bursar, MYSQLI_ASSOC)){
		
		$b_id = $row_bursar['b_id'];
		$b_fname = $row_bursar['b_fname'];
		$b_lname = $row_bursar['b_lname'];
	
?>	
	
   <tr align="center">
	    <td><?php echo $i++; $b_id ?></td> 
	    <td><?php echo $b_fname; ?>&nbsp;&nbsp;<?php echo $b_lname; ?></td>
	    
	    <td><a href="index.php?edit_bursar=<?php echo $b_id; ?>">Edit</a></td>
	    <td><a href="delete_bursar.php?delete_bursar=<?php echo $b_id; ?>"onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
  </tr>

<?php } ?>	
	
</table>
	

         
	</div>
<!--End of Content-->

	
				
</div>


</body>
	
<!--This is Footer-->
	<div align="center" style="background-color:#16365d; font-size: 20px; color: #fff;" >
	<i>© 2017 ALL RIGHTS RESERVED – CHUO CHA UFUNDI MBALIZI</i>
	<h6>(GARAGE MANAGEMENT SYSTEM)</h6>
	<h6><i>Contact Us: 0765102244 / josephmhecha@hotmail.com<i></h6>
	</div>
<!--End of Footer-->

	
</html>


<?php } ?>



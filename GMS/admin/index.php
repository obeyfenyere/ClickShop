
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
		
		<button class="button" style="vertical-align: middle"><span><a href="index.php?sel_user">NEW USER</a></span></button>
		 <button class="button" style="vertical-align: middle"><span><a href="index.php?view_user">VIEW USERS</a></span></button>
		    <button class="button" style="vertical-align: middle"><span><a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">LOGOUT</a></span></button>
			
	</div>
	<!--End of left sidebar-->
	
	
	
	
	<!--This is Content-->
	<div class="right">
	
	<h3 style="color: #16365d; text-align: right;"> Hello  <?php echo ucwords($_SESSION['a_lname']); ?>! </h3>
	
	
		<?php
		
          if(isset($_GET['sel_user'])){
			  
	      include("includes/sel_user.php");
			  
          }
	  
	      if(isset($_GET['add_bursar'])){
			  
	      include("includes/add_bursar.php");
			  
          }  
	  
	      if(isset($_GET['add_principal'])){
			  
	      include("includes/add_principal.php");
			  
          }
	  
	      if(isset($_GET['add_supervisor'])){
			  
	      include("includes/add_supervisor.php");
			  
          }
	  
	      if(isset($_GET['add_receptionist'])){
			  
	      include("includes/add_receptionist.php");
			  
          }
	  
	      if(isset($_GET['view_user'])){
			  
	      include("includes/view_user.php");
			  
          }
	  
	      if(isset($_GET['view_all_bursar'])){
			  
	      include("includes/view_all_bursar.php");
			  
          }
	  
	      if(isset($_GET['edit_bursar'])){
			  
	      include("includes/edit_bursar.php");
			  
          }
	  
	      if(isset($_GET['edit_principal'])){
			  
	      include("includes/edit_principal.php");
			  
          }
	
	
         ?>
         
	</div>
	<!--End of Content-->

	<!--This is Footer-->
	<div align="center" style="background-color:#16365d; font-size: 20px; color: #fff;" >
	<i>© 2017 ALL RIGHTS RESERVED – TADIWA</i>
	</div>
	<!--End of Footer-->
				
</div>


</body>

	
</html>


<?php } ?>




<?php
session_start();

if(!isset($_SESSION['r_lname'])){
	
	echo "<script>window.open('login.php?not_authorize=<h3>Authentication failure! Please Contact System Admin.</h3>','_self')</script>";
}

else {


?>



<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Reception</title>
<link rel="stylesheet"  href="style.css" />
</head>

<body>

<div class="wrapper">
	
	<!--This is header-->
	<div class="header" align="center"><h1>TADIWA SYSTEM</h1><h2>(RECEPTION)</h2></div>
	<!--End of header-->
	
	
	<!--This is left sidebar-->
	<div class="left">
	<br>
		<h3 style="padding: 10px; text-decoration: underline; font-weight: bold;">MANAGEMENT CONTENT:</h3>
	<br>
		
		<button class="button" style="vertical-align: middle"><span><a href="index.php?add_new_customer">NEW CUSTOMER</a></span></button>
		 <button class="button" style="vertical-align: middle"><span><a href="index.php?view_all_customers">VIEW CUSTOMERS</a></span></button>
		  <button class="button" style="vertical-align: middle"><span><a href="index.php?view_all_invoice">INVOICE</a></span></button>
		   <button class="button" style="vertical-align: middle"><span><a href="index.php?view_cats">VEHICLE PROGRESS</a></span></button>
		    <button class="button" style="vertical-align: middle"><span><a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">LOGOUT</a></span></button>
		
	</div>
	<!--End of left sidebar-->
	
	
	<!--This is Content-->
	<div class="right">
	
<h3 style="color: #16365d; text-align: right;"> Hello  <?php echo ucwords($_SESSION['r_lname']); ?>! </h3>
	
	
		<?php
		
          if(isset($_GET['add_new_customer'])){
			  
	      include("includes/add_new_customer.php");
			  
		  }
	  
	      if(isset($_GET['view_all_customers'])){
			  
	      include("includes/view_all_customers.php");
			  
          }
	   	  if(isset($_GET['edit_customer'])){
			  
	      include("includes/edit_customer.php");
			  
          }
          
	  
	      if(isset($_GET['view_all_invoice'])){
			  
	      include("includes/view_all_invoice.php");
			  
          }
          

		
         ?>
         
	</div>
	<!--End of Content-->

	<!--This is Footer-->
	<div align="center" style="background-color:#16365d; font-size: 20px; color: #fff;" >
	<i>© 2018 ALL RIGHTS RESERVED – TADIWA</i>
	</div>
	<!--End of Footer-->
				
</div>


</body>

	
</html>


<?php } ?>



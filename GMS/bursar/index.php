
<?php
session_start();

if(!isset($_SESSION['b_lname'])){
	
	echo "<script>window.open('login.php?not_authorize=<h3>Authentication failure! Please Contact System Admin.</h3>','_self')</script>";
}

else {


?>


<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Bursar</title>
<link rel="stylesheet"  href="style.css" />
</head>

<body>

<div class="wrapper">
	
	<!--This is header-->
	<div class="header" align="center"><h1>TADIWA SYSTEM</h1><h2>(TELLER)</h2></div>
	<!--End of header-->
	
	
	<!--This is left sidebar-->
	<div class="left">
	<br>
		<h3 style="padding: 10px; text-decoration: underline; font-weight: bold;">MANAGEMENT CONTENT:</h3>
	<br>
		
		<button class="button" style="vertical-align: middle"><span><a href="index.php?view_all_customers">VIEW CUSTOMERS</a></span></button>
		<button class="button" style="vertical-align: middle"><span><a href="index.php?new_invoice">NEW INVOICE</a></span></button>
		 <button class="button" style="vertical-align: middle"><span><a href="index.php?view_all_invoice">VIEW INVOICE</a></span></button>
		  <button class="button" style="vertical-align: middle"><span><a href="index.php?view_report">VIEW REPORT</a></span></button>
		    <button class="button" style="vertical-align: middle"><span><a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">LOGOUT</a></span></button>
		
	</div>
	<!--End of left sidebar-->
	
	
	<!--This is Content-->
	<div class="right">
	
	<h3 style="color: #16365d; text-align: right;"> Hello  <?php echo ucwords($_SESSION['b_lname']); ?>! </h3>
	
	
		<?php
		
          if(isset($_GET['view_all_customers'])){
			  
	      include("includes/view_all_customers.php");
			  
          }
	  
	      if(isset($_GET['edit_customer'])){
			  
	      include("includes/edit_customer.php");
			  
          }
	  
	      if(isset($_GET['new_invoice'])){
			  
	      include("includes/new_invoice.php");
			  
          }
	  
	      if(isset($_GET['edit_invoice'])){
			  
	      include("includes/edit_invoice.php");
			  
          }
	  
	      if(isset($_GET['view_all_invoice'])){
			  
	      include("includes/view_all_invoice.php");
			  
          }
	  
	      if(isset($_GET['view_report'])){
			  
	      include("includes/view_report.php");
			  
          }
	  
	      if(isset($_GET['delete_invoice'])){
			  
	      include("includes/delete_invoice.php");
			  
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



<?php
@session_start();

if(!isset($_SESSION['s_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=<h3>Authentication failure! Please Contact Your System Admin.</h3>','_self')</script>";
}

else {


?>



<?php
include ("db_con.php");
if(isset($_POST['submit'])){
	
	//getting the text data from the fields
	$d_fname = $_POST["d_fname"];
	$d_lname = $_POST["d_lname"];
	$customer_name = $_POST["customer_name"];
	$mobile = $_POST["mobile"];
	$office_tel = $_POST["office_tel"];
	$email_fax = $_POST["email_fax"];
	$model = $_POST["model"];
	$engine = $_POST["engine"];
	$customer_name = $_POST["customer_name"];
	$vin = $_POST["vin"];
	$work_carry = $_POST["work_carry"];
	$demage_found = $_POST["demage_found"];
	$accessories = $_POST["accessories"];
	$car_received = $_POST["car_received"];
	$mileage_covered = $_POST["mileage_covered"];
	
	
	$query = mysqli_query($con, "insert into customer_details 
	(d_fname, d_lname, customer_name, mobile, office_tel, email_fax, model, engine, vin, work_carry, demage_found, accessories, car_received, mileage_covered, date_received)
	values
	('$d_fname', '$d_lname', '$customer_name', '$mobile', '$office_tel', '$email_fax', '$model', '$engine','$vin', '$work_carry', '$demage_found', '$accessories', '$car_received', '$mileage_covered', NOW() )");
	
	if($query)
	{
		echo "<script>alert('Details has been inserted.')</script>";
	}
	else
	{
		echo "<script>alert('There is something wrong! Details not inserted.')</script>";
	}
	
}

?>


<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Insert Post Form</title>
<link rel="stylesheet"  href="box_style.css" />
</head>

<body>


<div class='form'>
<form action="" method="post" enctype="multipart/form-data" >
	
<table width="745" align="center" border="2">
	
	
<p style="text-align: center;"><strong><span style="text-decoration: underline;">CUSTOMER DETAILS:</span></strong></p>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Driver's First Name:</strong></td>
		<td><input type="text" name="d_fname" id="d_fname" size="35" class="text" placeholder="Driver's First Name" required=""/>&nbsp;</td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Driver's Last Name:</strong></td>
		<td><input type="text" name="d_lname" id="d_lname" size="35" class="text" placeholder="Driver's Last Name" required=""/></td>
	</tr>
		
    <tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Customer Name:</strong></td>
		<td><input type="text" name="customer_name" id="customer_name" size="35"class="text" placeholder="Customer Name" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Mobile No:</strong></td>
		<td><input type="text" name="mobile" id="mobile" size="35" class="text" placeholder="Mobile" required=""/></td>		
	</tr>
		
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Office Tel No:</strong></td>
		<td><input type="text" name="office_tel" id="office_tel" size="35" class="text" placeholder="Office Tel No." /></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Email/Fax:</strong></td>
		<td><input type="text" name="email_fax" id="email_fax" size="35" class="text" placeholder="Email or Fax" /></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Model:</strong></td>
		<td><input type="text" name="model" id="model" size="35" class="text" placeholder="Model" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Engine:</strong></td>
		<td><input type="text" name="engine" id="engine" size="35" class="text" placeholder="Engine" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>VIN:</strong></td>
		<td><input type="text" name="vin" id="vin" size="35" class="text" placeholder="Vehicle Identification Number" required=""/></td>		
	</tr>
		
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Car Received By:</strong></td>
		<td><input type="text" name="car_received" id="car_received" size="35" class="text" placeholder="Car Received By" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Mileage Covered:</strong></td>
		<td><input type="text" name="mileage_covered" id="mileage_covered" size="35" class="text" placeholder="Mileage Covered" required=""/></td>		
	</tr>
	
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Work to Carry:</strong></td>
		<td><textarea name="work_carry" rows="5" cols="36" class="comment" placeholder="Work To Carry" required=""></textarea></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Damages Found:</strong></td>
		<td><textarea name="demage_found" rows="5" cols="36" class="comment" placeholder="Damages Found"></textarea></td>		
	</tr>
	

	</table>
	
<br>
<p style="text-align: center;"><span style="text-decoration: underline;"><strong>ACCESSORIES AVAILABLE INSIDE THE VEHICLE:</strong></span></p>
	
	<table width="745" align="center" border="2">
		
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Accessories:</strong></td>
		<td><textarea name="accessories" rows="5" cols="60" class="comment-text" placeholder="Accessories"></textarea></td>		
	</tr>
	
	<tr>
		<td><input type="reset" class="reset-button" value="CLEAR"></td>
		<td colspan="6" align="center" bgcolor="#dbe5f1" ><input type="submit" name="submit" class="submit-button" value="SAVE"></td>		
	</tr>
	
	</table>
	
</form>
</div>	


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script>
        
        $(window).on("beforeunload", function() {
            return "Are you sure? You didn't finish the form!";
        });
        
        $(document).ready(function() {
            $("#myForm").on("submit", function(e) {
                //check form to make sure it is kosher
                //remove the ev
                $(window).off("beforeunload");
                return true;
            });
        });
        </script>


</body>
</html>



<?php } ?>



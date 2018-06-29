
<?php
@session_start();

if(!isset($_SESSION['r_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=<h3>Authentication failure! Please Contact Your System Admin.</h3>','_self')</script>";
}

else {


?>


<?php

include("db_con.php");

$edit_reg_no = filter_input(INPUT_GET, 'edit_customer', FILTER_VALIDATE_INT, ['options' => ['default' => NULL]]);

if(isset($_POST['update'])){ 

    $update_reg_no = $edit_reg_no;

    //getting the text data from the fields
    $d_fname = $_POST["d_fname"];
	$d_lname = $_POST["d_lname"];
	$customer_name = $_POST["customer_name"];
	$mobile = $_POST["mobile"];
	$office_tel = $_POST["office_tel"];
	$email_fax = $_POST["email_fax"];
	$model = $_POST["model"];
	$engine = $_POST["engine"];
	$vin = $_POST["vin"];
	$work_carry = $_POST["work_carry"];
	$demage_found = $_POST["demage_found"];
	$accessories = $_POST["accessories"];
	$car_received = $_POST["car_received"];
	$mileage_covered = $_POST["mileage_covered"];

    $update = "update customer_details set
    d_fname = '$d_fname', d_lname = '$d_lname', customer_name = '$customer_name', mobile = '$mobile', office_tel = '$office_tel', email_fax = '$email_fax', model = '$model', engine = '$engine', vin = '$vin', work_carry = '$work_carry', demage_found = '$demage_found', accessories = '$accessories', car_received = '$car_received', mileage_covered = '$mileage_covered' where reg_no = '$update_reg_no'";

    $run = mysqli_query($con, $update);

    if($run)
    {
        echo "<script>alert('Customer details has been updated')</script>";
		echo "<script>window.open('index.php?view_all_customers','_self')</script>";
    }
    else
    {
        echo "<script>alert('There is something wrong! Details not Updated')</script>";
    }

}

?>



<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Update Customer Details</title>
<link rel="stylesheet"  href="box_style.css" />
</head>

<body>

<?php
	
include ("db_con.php");

if(isset($_GET['edit_customer'])){

        $edit_reg_no = $_GET['edit_customer'];

        $select_customer = "select * from customer_details where reg_no='$edit_reg_no'";

        $run_query = mysqli_query($con, $select_customer);

        while ($row_customer=mysqli_fetch_array($run_query)){

        $reg_no = $row_customer['reg_no'];
        $d_fname = $row_customer['d_fname'];
        $d_lname = $row_customer['d_lname'];
        $customer_name = $row_customer['customer_name'];
        $mobile = $row_customer['mobile'];
        $office_tel = $row_customer['office_tel'];
        $email_fax = $row_customer['email_fax'];
        $model = $row_customer['model'];
        $engine = $row_customer['engine'];
        $vin = $row_customer['vin'];
        $work_carry = $row_customer['work_carry'];
        $demage_found = $row_customer['demage_found'];
        $accessories = $row_customer['accessories'];
        $car_received = $row_customer['car_received'];
        $mileage_covered = $row_customer['mileage_covered'];


        }
    }

?>

<div class='form'>
<form action="" method="post" enctype="multipart/form-data" >
	
<table width="745" align="center" border="2">
	
	
<p style="text-align: center;"><strong><span style="text-decoration: underline;">CUSTOMER DETAILS:</span></strong></p>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Driver's First Name:</strong></td>
		<td><input type="text" name="d_fname" id="d_fname" size="35" class="text" placeholder="Driver's First Name" value="<?php echo $d_fname; ?>" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Driver's Last Name:</strong></td>
		<td><input type="text" name="d_lname" id="d_lname" size="35" class="text" placeholder="Driver's Last Name" value="<?php echo $d_lname; ?>" required=""/></td>
	</tr>
		
    <tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Customer Name:</strong></td>
		<td><input type="text" name="customer_name" id="customer_name" size="35"class="text" placeholder="Customer Name" value="<?php echo $customer_name; ?>" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Mobile No:</strong></td>
		<td><input type="text" name="mobile" id="mobile" size="35" class="text" placeholder="Mobile" value="<?php echo $mobile; ?>" required=""/></td>		
	</tr>
		
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Office Tel No:</strong></td>
		<td><input type="text" name="office_tel" id="office_tel" size="35" class="text" placeholder="Office Tel No." value="<?php echo $office_tel; ?>" /></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Email/Fax:</strong></td>
		<td><input type="text" name="email_fax" id="email_fax" size="35" class="text" placeholder="Email or Fax" value="<?php echo $email_fax; ?>" /></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Model:</strong></td>
		<td><input type="text" name="model" id="model" size="35" class="text" placeholder="Model" value="<?php echo $model; ?>" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Engine:</strong></td>
		<td><input type="text" name="engine" id="engine" size="35" class="text" placeholder="Engine" value="<?php echo $engine; ?>" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>VIN:</strong></td>
		<td><input type="text" name="vin" id="vin" size="35" class="text" placeholder="Vehicle Identification Number" value="<?php echo $vin; ?>" required=""/></td>		
	</tr>
		
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Car Received By:</strong></td>
		<td><input type="text" name="car_received" id="car_received" size="35" class="text" placeholder="Car Received By" value="<?php echo $car_received; ?>" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Mileage Covered:</strong></td>
		<td><input type="text" name="mileage_covered" id="mileage_covered" size="35" class="text" placeholder="Mileage Covered" value="<?php echo $mileage_covered; ?>" required=""/></td>		
	</tr>
	
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Work to Carry:</strong></td>
		<td><textarea name="work_carry" rows="5" cols="36" class="comment" placeholder="Work To Carry" required="" ><?php echo $work_carry; ?> </textarea></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Damages Found:</strong></td>
		<td><textarea name="demage_found" rows="5" cols="36" class="comment" placeholder="Damages Found"><?php echo $demage_found; ?></textarea></td>		
	</tr>
	

	</table>
	
<br>
<p style="text-align: center;"><span style="text-decoration: underline;"><strong>ACCESSORIES AVAILABLE INSIDE THE VEHICLE:</strong></span></p>
	
	<table width="745" align="center" border="2">
		
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Accessories:</strong></td>
		<td><textarea name="accessories" rows="8" cols="60" class="comment-text" placeholder="Accessories"><?php echo $accessories; ?></textarea></td>		
	</tr>
	
	<tr>
		<td colspan="6" align="center" bgcolor="#dbe5f1" ><input type="submit" name="update" class="submit-button" value="SAVE CHANGES"></td>		
	</tr>
	
	</table>
	
</form>
</div>


</body>


</html>



<?php } ?>






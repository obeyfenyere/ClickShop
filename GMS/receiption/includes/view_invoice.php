
<?php
@session_start();

if(!isset($_SESSION['r_lname'])){
	
	echo "<script>window.open('../login.php?not_authorize=<h3>Authentication failure! Please Contact Your System Admin.</h3>','_self')</script>";
}

else {


?>


<?php

include("db_con.php");

$edit_i_id = filter_input(INPUT_GET, 'edit_invoice', FILTER_VALIDATE_INT, ['options' => ['default' => NULL]]);

if(isset($_POST['update'])){ 

    $update_i_id = $edit_i_id;

    //getting the text data from the fields
    $reg_no = $_POST["reg_no"];
	$cost = $_POST["cost"];;

    $update = "update invoice set
    reg_no = '$reg_no', cost = '$cost' where i_id = $update_i_id";

    $run = mysqli_query($con, $update);

    if($run)
    {
        echo "<script>alert('An invoice has been updated')</script>";
		echo "<script>window.open('index.php?view_all_invoice','_self')</script>";
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
<title>Edit invoice</title>
<link rel="stylesheet"  href="box_style.css" />
</head>

<body>

<?php
	
include ("db_con.php");

/*
$reg_no = null;
$cost = null;
if(isset($_GET['edit_invoice'])){

        $edit_i_id = $_GET['edit_invoice'];

        $select_invoice = "select * from invoice where i_id='$edit_i_id'";

        $run_query = mysqli_query($con, $select_invoice);

        while($row_invoice=mysqli_fetch_array($run_query));{
			
		$i_id = $row_invoice['i_id'];	
        $reg_no = $row_invoice['reg_no'];
        $cost = $row_invoice['cost'];
		}

        
    }*/
	
if(isset($_GET['edit_invoice'])){
    $edit_i_id = $_GET['edit_invoice'];
    $select_invoice = "select * from invoice where i_id='$edit_i_id'";
    $run_query = mysqli_query($con, $select_invoice);
    $row_invoice = mysqli_fetch_array($run_query);

    $i_id = $row_invoice['i_id'];   
    $reg_no = $row_invoice['reg_no'];
    $cost = $row_invoice['cost'];
}

?>

<div class='form'>
<form action="" method="post" enctype="multipart/form-data" >
	
<table width="745" align="center" border="2">
	
	
<p style="text-align: center;"><strong><span style="text-decoration: underline;">EDIT INVOICE:</span></strong></p>

<br/>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Registration Number:</strong></td>
		<td><input type="text" name="reg_no" id="reg_no" size="35" class="text" placeholder="Registration Number" value="<?php echo $reg_no; ?>" required=""/></td>		
	</tr>
	
	<tr>		
		<td align="right" bgcolor="#dbe5f1"><strong>Cost(Tshs):</strong></td>
		<td><input type="text" name="cost" id="cost" size="35" class="text" placeholder="Cost" value="<?php echo $cost; ?>" required=""/></td>
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






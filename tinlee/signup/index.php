<?php
		session_start();
		$dbhost = 'localhost:8080';
		$dbuser = 'root';
		$dbpass = "";
		//$db="project";
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		//if(!$conn ) {
		//die('Could not connect: ' . mysql_error());
		//}
		$email = $_POST['uname'];
		$password = $_POST['pswd'];
		//alert($email);
		$db = "insert into admin values('$email', '$password');";
		mysql_select_db('project');
		$retval = mysql_query( $db, $conn );
		if(! $retval ) {
		die('Could not enter data: ' . mysql_error());
		}
		echo "<script>alert('Entered data successfully')</script>";
		mysql_close($conn);
		
		?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		
<div align="center">
		<h1>Create Account</h1>
<form method="POST" action="index.php">
	<br>
	<label for="email"><b>Email</b></label><br>
	<input type="email" name="uname" id="email" placeholder="Email" required="true"><br>
	<label for="password"><b>Password</b></label><br>
	<input type="password" name="pswd" id="password" placeholder="Password" required="true"><br><br>
	<label for="password"><b>Repeat-Password</b></label><br>
	<input type="password" name="pswd2" id="password2" placeholder="Password" required="true"><br><br>
	<input type="submit" name="submit button" value="Create Account">
</form>
</div>
</body>
</html>
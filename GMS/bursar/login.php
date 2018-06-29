<?php

session_start();


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    
    <button class="btn btn-lg btn-primary btn-block" onclick="window.location.href='http://localhost:8080/GMS/welcome.php'" ><h2 align="center" style="color:white;">HOME</h2></button>
   
    <div class="wrapper">
    
    
    
    <form class="form-signin" method="post" action="login.php">
            
      <h2 class="form-signin-heading" align="center">Login</h2>
      <input type="text" class="form-control" name="b_lname" placeholder="Username" required="" autofocus />
      <input type="password" class="form-control" name="b_pass" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>   
      
    </form>
    
  </div>
  
  
<h2 style="color: red; text-align: center;"><?php echo @$_GET['not_authorize']; ?></h2>

</body>

</html>

<?php
include("db_con.php");

if(isset($_POST['login'])){
	
	$b_lname = mysqli_real_escape_string($con, $_POST['b_lname']);
	$b_pass = mysqli_real_escape_string($con, $_POST['b_pass']);

	$select_user = "select * from bursar where BINARY b_lname = BINARY '$b_lname' AND BINARY b_pass = BINARY '$b_pass'";
	
	$run_user = mysqli_query($con, $select_user);
	
	//">0" means one person is authorized to login
	if(mysqli_num_rows($run_user)>0){
		
	$_SESSION['b_lname']=$b_lname; 
		
	echo "<script>window.open('index.php?logged=You have Successfully Logged In!','_self')</script>";
			
	}
	else{
		
	echo "<script>alert('Username or Password is Incorrect!')</script>";
		
	}
		
}


?>


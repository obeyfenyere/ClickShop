

<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Admin</title>


<style>
.user_button {
    position: relative;
    background-color: #4f81bc;
    border: none;
	border-radius: 4px;
    font-size: 10px;
    color: #4f81bc;
    padding: 15px;
    width: 145px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.user_button {
    background-color: white; 
    color: black; 
    
}

.user_button:hover {
    background-color: #4f81bc;
    color: black;
}
	
</style>


</head>

<body>

<div class="wrapper" style="padding: 50px;">
	
	
	<br>
		<h3 style="padding: 10px; text-decoration: underline; font-weight: bold; ">PLEASE, CHOOSE A SECTION TO ADD USERS:</h3>
	<br>
		
		 <button class="user_button" style="vertical-align: middle" onclick="window.location.href='http://localhost:8080/GMS/admin/includes/add_principal.php'" ><h2>PRINCIPAL</h2></button>
		 
		 <button class="user_button" style="vertical-align: middle" onclick="window.location.href='http://localhost:8080/GMS/admin/includes/add_supervisor.php'" ><h2>SUPERVISOR</h2></button>
		 
		 <button class="user_button" style="vertical-align: middle" onclick="window.location.href='http://localhost:8080/GMS/admin/includes/add_receptionist.php'" ><h2>RECEPTIONIST</h2></button>
		 
		 <button class="user_button" style="vertical-align: middle" onclick="window.location.href='http://localhost:8080/GMS/admin/includes/add_bursar.php'" ><h2>BURSAR</h2></button>
		 
			
				
</div>


</body>

	
</html>




























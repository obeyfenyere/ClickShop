<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table align="center" bgcolor="#dbe5f1" width="745">

	
	<tr>
		<td colspan="10" align="center" bgcolor="#dbe5f1"><h2>Users</h2></td>
	</tr>
	
	<tr>
		<th>EMAIL ADDRESS</th>
		<th>PASSWORD</th>
		
	</tr>
	
<?php

$dbhost = 'localhost:8080';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM admin';
mysql_select_db('project');
$retval = mysql_query( $sql, $conn );
if(! $retval ) {
die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	
		$i_id = $row['username'];
		$reg_no = $row['pswd'];

?>	
	
   <tr align="center">
	    <td><?php echo /*$i++;*/ $i_id ?></td> 
	    <td><?php echo $reg_no; ?></td>
	   
  </tr>

<?php } ?>	
	
</table>



</table>
</body>
</html>
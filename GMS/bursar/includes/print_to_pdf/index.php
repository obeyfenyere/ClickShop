<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Garage Management System</title>
	</head>
	<body>
		<table cellpadding="10" cellspacing="0" border="1">
			<tr>
				<thead align="left">
				<th>Registration Number</th>
				<th>Cost</th>
				<thead>
			</tr>
			<?php
				mysql_connect('localhost', 'root', '');
				mysql_select_db('gms');
				$query = mysql_query("Select * From invoice Order By id DESC");
				while($row = mysql_fetch_array($query)) {
					echo "<tr>";
					echo "<td>".$row['reg_no']."</td>";
					echo "<td>".$row['cost']."</td>";
					echo "</tr>";
				}
			?>
		</table>
		<br>
		<a href="print_pdf.php">Print TO PDF</a>
	</body>
</html>
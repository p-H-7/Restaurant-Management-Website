<?php
	include 'config.php';
	session_start();
	include 'main.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Users</title>
<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
	<center>
	<h1>Users_List</h1>
	<table border="1px">
		<tr>
			<th>UserId</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Delete</th>
			
		</tr>
		<?php
			$result=mysqli_query($conn,"select * from user");
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>"; echo $row['ID'];   echo "</td>";
				echo "<td>"; echo $row['Name']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['phone']; echo "</td>";
				//echo "<td>"; echo $row['pincode']; echo "</td>";
				//secho "<td>"; echo $row['hno']; echo "</td>";
				echo "<td>"; echo $row['address']; echo "</td>";
				echo "<td>";?> <a href="delete_user.php?id=<?php echo $row['ID']; ?>">Delete</a> <?php echo "</td>";
				
				echo "</tr>";
			}

			echo "<tr>";
		?>
	</table>
	</center>
</body>
</html>

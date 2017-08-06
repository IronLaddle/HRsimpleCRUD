<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM candidate ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='100%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Full Name</td>
		<td>Nick Name</td>
		<td>Permanent Address</td>
		<td>Current Address</td>
		<td>Marital Status</td>
		<td>Date of Birth</td>
		<td>Contact Number</td>
		<td>Email</td>
		<td>Position to Apply</td>
		<td>Expected Salary </td>
		<td>Possessed Own Transport?</td>
		<td>Current Employer</td>
		<td>Current Job Position</td>
		<td>Date of availability</td>
		<td>Willing to be transfer to other branches?</td>
		<td>Flexible Working Hours?</td>
		<td>Willing to work on weekend?</td>
		<td>Action</td>
		<td></td>
	</tr>
	<?php
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['full_name']."</td>";
		echo "<td>".$res['nick_name']."</td>";
		echo "<td>".$res['permanent_address']."</td>";
		echo "<td>".$res['current_address']."</td>";
		echo "<td>".$res['status']."</td>";
		echo "<td>".$res['dob']."</td>";
		echo "<td>".$res['number']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['position']."</td>";
		echo "<td>".$res['salary']."</td>";
		echo "<td>".$res['transport']."</td>";
		echo "<td>".$res['employer']."</td>";
		echo "<td>".$res['current_job']."</td>";
		echo "<td>".$res['date']."</td>";
		echo "<td>".$res['transfer']."</td>";
		echo "<td>".$res['working']."</td>";
		echo "<td>".$res['weekend']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Nak delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>

<?php
// including the database connection file
include_once("config.php");
if(isset($_POST['update']))
{
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	$full_name = mysqli_real_escape_string($mysqli, $_POST['full_name']);
	$nick_name = mysqli_real_escape_string($mysqli, $_POST['nick_name']);
	$permanent_address = mysqli_real_escape_string($mysqli, $_POST['permanent_address']);
	$current_address = mysqli_real_escape_string($mysqli, $_POST['current_address']);
	$status = mysqli_real_escape_string($mysqli, $_POST['status']);
	$dob = mysqli_real_escape_string($mysqli, $_POST['dob']);
	$number = mysqli_real_escape_string($mysqli, $_POST['number']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$position = mysqli_real_escape_string($mysqli, $_POST['position']);
	$salary = mysqli_real_escape_string($mysqli, $_POST['salary']);
	$transport = mysqli_real_escape_string($mysqli, $_POST['transport']);
	$employer = mysqli_real_escape_string($mysqli, $_POST['employer']);
	$current_job = mysqli_real_escape_string($mysqli, $_POST['current_job']);
	$date = mysqli_real_escape_string($mysqli, $_POST['date']);
	$transfer = mysqli_real_escape_string($mysqli, $_POST['transfer']);
	$working = mysqli_real_escape_string($mysqli, $_POST['working']);
	$weekend = mysqli_real_escape_string($mysqli, $_POST['weekend']);

	// checking empty fields
	if(empty($full_name) || empty($nick_name) || empty($permanent_address)) {

		if(empty($full_name)) {
			echo "<font color='red'>Full Name field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>Nick Name field is empty.</font><br/>";
		}

		if(empty($permanent_address)) {
			echo "<font color='red'>Permanent Address field is empty.</font><br/>";
		}
	} else {
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE candidate SET full_name='$full_name',nick_name='$nick_name',permanent_address='$permanent_address',current_address='$current_address',status='$status',dob='$dob',number='$number',email='$email',position='$position',salary='$salary',transport='$transport',employer='$employer',current_job='$current_job',date='$date',transfer='$transfer',working='$working',weekend='$weekend' WHERE id=$id");

		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM candidate WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$full_name = $res['full_name'];
	$nick_name = $res['nick_name'];
	$permanent_address = $res['permanent_address'];
	$current_address = $res['current_address'];
	$status = $res['status'];
	$dob = $res['dob'];
	$number = $res['number'];
	$email = $res['email'];
	$position = $res['position'];
	$salary = $res['salary'];
	$transport = $res['transport'];
	$employer = $res['employer'];
	$current_job = $res['current_job'];
	$date = $res['date'];
	$transfer = $res['transfer'];
	$working = $res['working'];
	$weekend = $res['weekend'];
}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="full_name" value="<?php echo $full_name;?>"></td>
			</tr>
			<tr>
				<td>Nick Name</td>
				<td><input type="text" name="nick_name" value="<?php echo $nick_name;?>"></td>
			</tr>
			<tr>
				<td>Permanent Address</td>
				<td><input type="text" name="permanent_address" value="<?php echo $permanent_address;?>"></td>
			</tr>
			<tr>
				<td>Current Address</td>
				<td><input type="text" name="current_address" value="<?php echo $current_address;?>"></td>
			</tr>
			<tr>
				<td>Marital Status</td>
				<td><input type="text" name="status" value="<?php echo $status;?>"></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input type="text" name="dob" value="<?php echo $dob;?>"></td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td><input type="text" name="number" value="<?php echo $number;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td>Position to Apply</td>
				<td><input type="text" name="position" value="<?php echo $position;?>"></td>
			</tr>
			<tr>
				<td>Expected Salary</td>
				<td><input type="text" name="salary" value="<?php echo $salary;?>"></td>
			</tr>
			<tr>
				<td>Possessed Own Transport?</td>
				<td><input type="text" name="transport" value="<?php echo $transport;?>"></td>
			</tr>
			<tr>
				<td>Current Employer</td>
				<td><input type="text" name="employer" value="<?php echo $employer;?>"></td>
			</tr>
			<tr>
				<td>Current Job Position</td>
				<td><input type="text" name="current_job" value="<?php echo $current_job;?>"></td>
			</tr>
			<tr>
				<td>Date of availability</td>
				<td><input type="text" name="date" value="<?php echo $date;?>"></td>
			</tr>
			<tr>
				<td>Willing to be transfer to other branches?</td>
				<td><input type="text" name="transfer" value="<?php echo $transfer;?>"></td>
			</tr>
			<tr>
				<td>Flexible Working Hours?</td>
				<td><input type="text" name="working" value="<?php echo $working;?>"></td>
			</tr>
			<tr>
				<td>Willing to work on weekend?</td>
				<td><input type="text" name="weekend" value="<?php echo $weekend;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

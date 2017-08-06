<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//include the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {
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

	// check empty fields (just do few only)
	if(empty($full_name) || empty($nick_name) || empty($permanent_address)) {

		if(empty($full_name)) {
			echo "<font color='red'>Full Name field is empty.</font><br/>";
		}

		if(empty($nick_name)) {
			echo "<font color='red'>Nick Name field is empty.</font><br/>";
		}

		if(empty($permanent_address)) {
			echo "<font color='red'>Permanent Address is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		// if all the fields are filled (not empty)

		//insert data to database
		$result = mysqli_query($mysqli, "INSERT INTO candidate (full_name,nick_name,permanent_address,current_address,status,dob,number,email,position,salary,transport,employer,current_job,date,transfer,working,weekend) VALUES('$full_name','$nick_name','$permanent_address','$current_address','$status','$dob','$number','$email','$position','$salary','$transport','$employer','$current_job','$date','$transfer','$working','$weekend')");

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>

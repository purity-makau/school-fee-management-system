<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['submit'])){
	if(isset($_POST['fname'])){
		$fname = $_POST['fname'];
	}
	if(isset($_POST['lname'])){
		$lname = $_POST['lname'];
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}
	if(isset($_POST['address'])){
		$address = $_POST['address'];
	}
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}
	if(isset($_POST['password2'])){
		$password2 = $_POST['password2'];
	}
	if(isset($_POST['birthday'])){
		$birthday = $_POST['birthday'];
	}
	if(isset($_POST['age'])){
		$age = $_POST['age'];
	}

	$sql = "INSERT INTO userreg (fname, lname, email, address, username, password, password2, birthday, age)
			VALUES ('$fname', '$lname', '$email', '$address', '$username', '$password', '$password2', '$birthday', '$age')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}


?>
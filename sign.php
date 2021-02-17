<?php
	$email=$_POST['email'];
	$password= $_POST['password'];
	$conn=mysqli_connect("localhost","root","","signup");
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql1="INSERT INTO signup(Email,Password) VALUES('$email','$password');";
	mysqli_query($conn,$sql1);

	mysqli_close($conn);
	header("Location: 2.html");
	exit();
?>
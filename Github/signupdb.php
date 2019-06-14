<!DOCTYPE html>
<html>
<head>
	<title>form action</title>
</head>
<body>
	<?php

		$name = $_POST["username"];
		$regno = $_POST["rollno"];
		$dob = $_POST["age"];
		$gender = $_POST["gender"];
		$email = $_POST["email"];
		$pwd = $_POST["pwd"];
		//$db_name = "login_db";

		$connection = mysqli_connect("localhost","root","");

		if(! $connection)
		{
			print("connection Error");
		}

		if(! mysqli_select_db($connection,"webpgm"))
		{
			print("Database connection error");
		}

		$query = "INSERT INTO signup VALUES ('$name' , '$regno', '$dob', '$gender', '$email', '$pwd')";



		if(mysqli_query($connection,$query))
		{
			header("location:login.php");
		}
		else
		{
			print("Invalid Details");
		}
	?>


</body>
</html>



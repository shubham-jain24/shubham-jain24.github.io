<!DOCTYPE html>
<html>
<head>
	<title>form action</title>
</head>
<body>
	<?php

		

		$email = $_POST["email"];
		$review = $_POST["review"];
		

		$connection = mysqli_connect("localhost","root","");

		if(! $connection)
		{
			print("connection Error");
		}

		if(! mysqli_select_db($connection,"webpgm"))
		{
			print("Database connection error");
		}


		
		
		$query = "INSERT INTO review_data VALUES ('$email' , '$review')";
		
		
		

			if (mysqli_query($connection, $query))
			{
				header("location:3rdpage.php");
			}
			else
			{
				print("Nothing updated");
			}
		
		

		
	?>


</body>
</html>



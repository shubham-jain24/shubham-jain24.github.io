<!DOCTYPE html>
<html>
<head>
	<title>form action</title>
</head>
<body>
	<?php

		$name = $_POST["name"];
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


		$query = "SELECT * FROM signup WHERE username ='$name' && password='$pwd'";
		//$query2 = "SELECT username FROM signup WHERE username='$name' and pwd='$pwd'";

		$result = mysqli_query($connection,$query);
		//$result2 = mysqli_query($connection, $query2);
		if($result)
		{
			$count = mysqli_fetch_assoc($result);

			if ($count)
			{

				//$row = mysqli_fetch_row($result2);
				$sname= $name;
				session_start();
				$_SESSION['SName']=$sname;
				$_SESSION['Status']="Session Status: Login Success!!!";

				if (isset($_POST['remuser'])){
					setcookie("UName",$name,time()+60*60*24);
					setcookie("Pwd",$pwd,time()+60*60*24);
				}
				else
				{
					setcookie("UName","",time()-5);
					setcookie("Pwd","",time()-5);
				}


				header("location:3rdpage.php");
			}
			else
			{
				print("Invalid Details");
			}
		}
		else
		{
			print("Sql Query Error");
		}
		

		
	?>


</body>
</html>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Password generator</title>
</head>
<body>
	<form method="post">
		<input type="text" name="username" placeholder="Username">
		<input type="text" name="password" placeholder="Password">
		<input type="text" name="usertype" placeholder="Usertype">
		<input type="text" name="location" placeholder="Location">
		<input type="submit" name="submit" value="Generator">
	</form>
	<?php
		include('config.php');
			if(isset($_POST['submit'])){

			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$location = $_POST['location'];
			$usertype = $_POST['usertype'];



			$query = mysqli_query($con, "INSERT INTO user (username, password, usertype, location) VALUES ('$username', '$password', '$usertype', '$location')");

			if($query){
			echo "Registration succefull";

			echo $password;
		}else {
			echo "Registration Failed";
		}

		}

?>
</body>
</html>
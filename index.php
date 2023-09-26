<?php

    include("config.php");
    $msg='';
    session_start();
   
    if (isset($_POST['submit'])) {
    	if (empty($_POST["username"]) && empty($_POST["password"])) {
    		echo '<script>alert("Both Field are required")</script>';
    	}
    	else
    	{
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = (mysqli_real_escape_string($con,$_POST['password']));
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username='$username' AND password = '$password'";
        $res=mysqli_query($con,$sql);

        if(mysqli_num_rows($res) > 0){
        	$_SESSION['ADMIN_USERNAME'] = $username;
            header('location:dashboard.php');
        }
        else {
        	echo '<script>alert("Wrong User Details")</script>';
        }
    }
}

?>
<head>
	<title>BAHEZA SYSTEM</title>
	<link rel="icon" type="image/png" href="img/icon/misslogo.png"/>
</head>

<body>
	<style type="text/css">
	:root {
	--main-color: #DD2F6E;
	--color-dark: #1D2231;
	--text-gray: #8390A2;
}
		body {
			background: var(--main-color);
		}
		.container {
			background-color: white;
			margin: 5% 17%;
			border-radius: 10px;
			display: flex;
			padding: 5%;
		}
		.logo_img img {
			height: 200px;
		}
		.logo_img {
			width: 50%;
			text-align: center;
			margin-top: 50px;
		}
		.form1 {
			height: 40px;
			background-color: whitesmoke;
			border-radius: 20px;
			border: none;
			width: 70%;
			margin-bottom: 20px;
			padding-left: 3%;
			font-weight: bolder;
			font-size: 15px;
			margin-left: 70px;
		}
		.form1:hover {
			border: #ed484f solid 2px;
		}
		.form1:focus {
			outline: none;
		}
		form {
			display: flex;
			flex-direction: column;
			text-align: center;
		}
		.log_frm {
			width: 50%;
		}
		button {
			background: var(--main-color);
			border: none;
			border-radius: 20px;
			height: 50px;
			width: 75%;
			margin-left: 70px;
			font-weight: bolder;
			font-size: 20px;
			color: white;
		}
		h2 {
			margin-bottom: 30px;
		}
		
	</style>
	<div class="container">
		<div class="logo_img">
			<img src="img/nt.png" >
		</div>
		<div class="log_frm">
			<form method="post" action="">
				<h2>Member Login</h2>
				<input type="text" name="username" placeholder="Username" class="form1">
				<input type="password" name="password" placeholder="Password" class="form1">
				<button type="submit" name="submit">LOGIN</button>
			</form>
			<div class="field_error"><?php echo $msg; ?></div>
		</div>
	</div>
</body>
</html>
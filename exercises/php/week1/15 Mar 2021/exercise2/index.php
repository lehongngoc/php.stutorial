<!DOCTYPE html>
<html>
<head>
	<title>exercise2</title>
	<meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<form action="login.php" method="post">
		<p>Username</p>
		<input type="text" name="name">
		<p>Password</p>
		<input type="password" name="password"><br><br>
		<input type="checkbox" name="remember">Remember me!<br><br>
		<input type="submit" name="check-login" value="Login">
	</form>
	<?php
		session_start();
		$checkname=$checkpass="";
		if (isset($_COOKIE['name']) && isset($_COOKIE['pass'])) {
			$checkname=$_COOKIE['name'];
			$checkpass=$_COOKIE['pass'];
		}
		if (isset($_SESSION['name'])) {
			echo "";
		}
	?>
	

</body>
</html>
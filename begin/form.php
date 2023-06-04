<?php 
	if (isset($_POST['submit_button'])) {
		$username = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Form</title>
</head>
<body>
	<h2> User Name - <?php if (isset($username)) {
		echo $username;
	} ?> </h2>
	<h2> Email - <?php if (isset($email)) {
		echo $email;
	} ?></h2>
	<h2> Password - <?php if (isset($password)) {
		echo $password;
	} ?> </h2>
	<form action="" method="POST">
		<label>Username</label><br>
			<input type="text" name="user_name"><br>
		<label>Email</label><br>
			<input type="email" name="email"><br>
		<label>Password</label><br>
			<input type="password" name="password"><br>
		<input type="submit" name="submit_button" value="Submit"><br>
	</form>
</body>
</html>
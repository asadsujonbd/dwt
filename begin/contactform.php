<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Form</title>
</head>
<body>
	<form action="contact.php" method="POST">
		<label>Name</label><br>
			<input type="text" name="name"><br>
		<label>Email</label><br>
			<input type="email" name="email"><br>
		<label>Mobile</label><br>
			<input type="text" name="mobile"><br>
		<input type="submit" name="submit_button" value="Submit"><br>
	</form>
</body>
</html>
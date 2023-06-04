<?php 
	if (isset($_POST['submit_button'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
	}
?>

	<h2> User Name - <?php if (isset($name)) {
		echo $name;
	} ?> </h2>
	<h2> Email - <?php if (isset($email)) {
		echo $email;
	} ?></h2>
	<h2> Mobile - <?php if (isset($mobile)) {
		echo $mobile;
	} ?> </h2>
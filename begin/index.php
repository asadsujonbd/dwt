<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Begginers</title>
</head>
<body>
	<h3>First</h3>
	<?php 
 		/*
 		$a = 15;
 		$b = 12;
 		$c = 18;

 		if (($a > $b) && ($a > $c)) {
 			echo "a is Largest Number";
 		} elseif (($b > $a) && ($b > $c)) {
 			echo "b is Largest Number";
 		} else {
 			echo "c is Largest Number";
 		}
 		*/

 		/*
 		$marks = 89;

 		if (($marks >= 80) && ($marks<= 100)) {
 			echo "You got A+";
 		} elseif (($marks >= 70) && ($marks<= 79)) {
 			echo "You got A";
 		} elseif (($marks >= 60) && ($marks<= 69)) {
 			echo "You got A-";
 		} elseif (($marks >= 50) && ($marks<= 59)) {
 			echo "You got B";
 		} elseif (($marks >= 40) && ($marks<= 49)) {
 			echo "You got C";
 		} elseif (($marks >= 33) && ($marks<= 39)) {
 			echo "You got D";
 		} elseif (($marks >= 0) && ($marks<= 32)) {
 			echo "You got F";
 		} else {
 			echo "Invalid Number";
 		}
		*/

 		/*
 		$marks = 69;
 		switch ($marks) {
 			case (($marks >= 80) && ($marks <= 100)):
 				echo "You Got A+";
 				break;
 			case (($marks >= 70) && ($marks <= 79)):
 				echo "You Got A";
 				break;
 			case (($marks >= 60) && ($marks <= 69)):
 				echo "You Got A-";
 				break;
 			case (($marks >= 50) && ($marks <= 59)):
 				echo "You Got B";
 				break;
 			case (($marks >= 40) && ($marks <= 49)):
 				echo "You Got C";
 				break;
 			case (($marks >= 33) && ($marks <= 39)):
 				echo "You Got D";
 				break;
 			case (($marks >= 0) && ($marks <= 32)):
 				echo "You Got F";
 				break;
 			
 			default:
 				echo "Invalid Number";
 				break;
 		}
 		*/

 		/*
 		for ($i = 1; $i <= 50  ; $i++ ) { 
 			echo $i . "<br>";
 		}
 		*/

 		/*
 		for ($i = 2; $i <= 50  ; $i++ ) { 
 			if ($i % 2 != 0) {
 				echo $i . "<br>";
 			}
 		}
 		*/

 		/*
 		$i = 1;
 		while ($i <= 50) {
 			echo $i . "<br>";
 			$i++;
 		}
 		*/

 		/*
 		$i = 1;
 		do {
 			echo $i . "<br>";#
 			$i++;
 		} while ($i <= 50);
		*/

 		/*
 		$city = array("Dhaka", "Cittagong", "Noakhali");
 			echo $city[2];
		$run = array('Shakib' => 60, 'Tamim' => 50, 'Asad' => 100);
			echo $run ['Asad'];
		*/
		/*
		$city = ["Dhaka", "Cittagong", "Noakhali"];
 		foreach ($city as $value) {
 			echo $value . "<br>";
 		}
		*/
 		$city = ["Dhaka", "Cittagong", "Noakhali", "Rajshahi", "Sylhet", "Rangpur", "Khulna", "Barishal", "Gazipur"];
 		echo "<ul>";
 		foreach ($city as $value) {
 			echo "<li>$value </li>";
 		}
 		echo "</ul>";

	?>
</body>
</html>
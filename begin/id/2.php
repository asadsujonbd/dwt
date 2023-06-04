<?php 
   if (isset($_POST['card_genarate'])) {
     $name = $_POST['std_name'];
     $phone = $_POST['std_phone'];
     $email = $_POST['std_email'];
     $course = $_POST['std_course'];
     $batch = $_POST['std_batch'];  
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Identity Card Design
    </title>
</head>

<body>
    <h2> Name - <?php if (isset($name)) {
      echo $name;
    } ?> </h2>
    <h2> Phone - <?php if (isset($phone)) {
      echo $phone;
    } ?> </h2>
    <h2> Email - <?php if (isset($email)) {
      echo $email;
    } ?> </h2>
    <h2> Course - <?php if (isset($course)) {
      echo $course;
    } ?> </h2>
    <h2> Batch - <?php if (isset($batch)) {
      echo $batch;
    } ?> </h2>
</body>

</html>
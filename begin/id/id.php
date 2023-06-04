<?php 
   if (isset($_POST['genarate_id'])) {
     $name = $_POST['std_name'];
     $phone = $_POST['std_phone'];
     $email = $_POST['std_email'];
     $course = $_POST['std_course'];
     $batch = $_POST['std_batch']; 

     $image_name = $_FILES['upload_image'] ['name'];
     $tmp_name = $_FILES['upload_image']['tmp_name'];
     move_uploaded_file($tmp_name, "image/". $image_name);
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="id.css">
    <title>
        Identity Card Design
        | HTML and CSS Code
    </title>
</head>

<body>
<body class='bg-grid-line'></body>
<div class='card'>
  <header>
    <h1>Student Card</h1>
  </header>
  <article>
    <img alt="My Pic" id='thumb' src="image/<?php if (isset($image_name)) { echo $image_name; } ?>" >
    <h2> Name- <?php if(isset($name)) { echo $name; } ?> </h2>
    <div class='area'>
      <h3> Course- <?php if (isset($course)) { echo $course; } ?> </h3>
      <ul>
        <li>
          Phone No- <?php if (isset($phone)) { echo $phone; } ?>
        </li>
        <li>
          Email- <?php if (isset($email)) { echo $email; } ?>
        </li>
        <li>
          Batch No- <?php if (isset($batch)) { echo $batch; } ?>
        </li>
      </ul>
      
    </div>
  </article>
</div>


    
</body>

</html>
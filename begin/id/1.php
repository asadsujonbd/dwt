<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
    <form action="2.php" method="POST">
      <h1>Create Your Virtual ID Card</h1>

      <!-- NAME FIELD -->
        <label>Name</label><br>
          <input name = "std_name"/><br>

      <!-- PHONE FIELD -->
        <label for="phone">Phone</label><br>
          <input name="std_phone"/><br>

      <!-- EMAIL FIELD -->
        <label for="email">Email</label><br>
          <input name="std_email" /><br>

      <!-- Course FIELD -->
        <label for="course">Course</label><br>
          <input name="std_course"/><br>

      <!-- Batch FIELD -->
        <label for="batch">Batch No</label><br>
          <input name="std_batch"/><br>
      
      <!-- BUTTONS -->
        <input name="card_genarate" type="submit" value="Genarate ID">

    </form>
</body>

</html>
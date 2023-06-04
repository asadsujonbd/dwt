<?php 
  include ("function.php");

  $objCrudAdmin = new crudApp();

  $students = $objCrudAdmin->display_data();

  if (isset($_GET['status'])) {
    if ($_GET['status'] = 'edit') {
      $id = $_GET['id'];
      $return_data = $objCrudAdmin->display_data_by_id($id);

    }
  }
  if(isset($_POST['edit_submit'])) {
    $msg = $objCrudAdmin->update_data($_POST);
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD Project</title>
  </head>
  <body>
    <div class="container my-4 p-4 shadow">
      <h2><a style="text-decoration:none" href="index.php">CRUD Project</a></h2>
      <form class="form" action="index.php" method="POST" enctype="multipart/form-data">
        <?php if(isset($msg)){echo $msg; } ?>

        <input class="form-control mb-2" type="text" name="e_std_name" value="<?php echo $return_data['name']; ?>">
        <input class="form-control mb-2" type="text" name="e_std_roll" value="<?php echo $return_data['roll']; ?>">
        <label for="image">Upload Your Image</label>
        <input class="form-control mb-2" type="file" name="e_std_img" >
        <input type="hidden" name="id" value="<?php echo $return_data['id']; ?>">
        <input type="submit" name="edit_submit" value="Update Information" class="form-control bg-warning">
      </form>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
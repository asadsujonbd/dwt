<?php 
  include ("function.php");

  $objCrudAdmin = new crudApp();

  if (isset($_POST['submit'])){
    $return_msg = $objCrudAdmin->add_data($_POST);
  }
  
  $students = $objCrudAdmin->display_data();

  if(isset($_GET['status'])){
        if($_GET['status']='delete'){
            $delete_id = $_GET['id'];
            $delmsg =  $objCrudAdmin->delete_data($delete_id);
        }
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
      <form class="form" action="" method="POST" enctype="multipart/form-data">
        <?php if(isset($delmsg)) {echo $delmsg; } ?>
        <input class="form-control mb-2" type="text" name="std_name" placeholder="Enter Your Name">
        <input class="form-control mb-2" type="text" name="std_roll" placeholder="Enter Your Roll">
        <label for="image">Upload Your Image</label>
        <input class="form-control mb-2" type="file" name="std_img" >
        <input type="submit" name="submit" value="Submit Information" class="form-control bg-warning">
      </form>
    </div>

    <div class="container my-4 p-4 shadow">
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while($student = mysqli_fetch_assoc($students)){  ?>
          <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['roll']; ?></td>
            <td><img style="height: 100px" src="upload/<?php echo $student['img']; ?>" alt="img"></td>
            <td>
              <a class="btn btn-success" href="edit.php? status= edit && id= <?php echo $student['id']; ?> ">Edit</a>

              <a class="btn btn-danger" href="?status=delete&&id=<?php echo $student['id']; ?>">Delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
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
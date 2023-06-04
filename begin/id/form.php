<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <form action="id.php" method="POST" enctype="multipart/form-data">
      <h1>Create Your Virtual ID Card</h1>

      <!-- NAME FIELD -->
      <div class="form-field">
        <label for="field" class="label--required">Name</label>
        <section>
          <input name = "std_name" id="field" required type="text" placeholder="Jane Doe" />
        </section>
      </div>

      <!-- PHONE FIELD -->
      <div class="form-field">
        <label for="phone" class="label--required">Phone</label>
        <section>
          <input name="std_phone" id="phone" required type="tel" placeholder="(234) 234-2342" />
        </section>
      </div>

      <!-- EMAIL FIELD -->
      <div class="form-field">
        <label for="email" class="label--required">Email</label>
        <section>
          <input name="std_email" id="email" required type="email" placeholder="somebody@me.com" />
        </section>
      </div>
      <!-- Course FIELD -->
      <div class="form-field">
        <label for="course" class="label--required">Course</label>
        <section>
          <input name="std_course" type="text" placeholder="Name of Your Course" />
        </section>
      </div>

      <!-- Batch FIELD -->
      <div class="form-field">
        <label for="batch" class="label--required">Batch No</label>
        <section>
          <input name="std_batch" type="text" placeholder="Your Batch No" />
        </section>
      </div>

      <!-- Upload Image -->
      <div class="form-field">
        <label for="batch" class="label--required">Upload Image</label>
        <section>
          <input type="file" name="upload_image">
        </section>
      </div>

      <!-- BUTTONS -->
      <div class="form-buttons">
        <input name="genarate_id" type="submit" class="a-btn--filled" value="Genarate ID">
      </div>

    </form>
  </main>
</body>

</html>
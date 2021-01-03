<?php include "header.php";?>
<?php require "config.php"; ?>
<?php
  $firstname = $lastname = $email = $location = $age = '';

  if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email  = $_POST['email'];
    $location = $_POST['location'];
    $age = $_POST['age'];

    //form validation

    $mysql  = "INSERT INTO users (firstname,lastname,email,age,location) values ('$firstname','$lastname','$email','$age','$location')";
    mysqli_query($conn,$mysql);
  }




?>
  <form action="" method = 'post'>
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" placeholder="Another " name="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" class="form-control" id="email" placeholder="Email Address " name="email">
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age" placeholder="Age" name="age">
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location" placeholder="Location" name="location">
    </div>
    <div class="form-group">
      <button class="btn btn-primary" name="submit">Submit</button>
    </div>
  </form>

  <a href="index.php">Back to home</a>
<?php include "footer.php";?>
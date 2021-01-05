<?php include "header.php";
       require "config.php";

  if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email  = $_POST['email'];
    $location = $_POST['location'];
    $age = $_POST['age'];
    
    $mysql  = "INSERT INTO users (firstname,lastname,email,age,location) values ('$firstname','$lastname','$email','$age','$location')";
    mysqli_query($conn,$mysql);
  }

  if(isset($_POST['submit'])){
    echo $_POST["firstname"]. " added succesfully!!!!";
  }
?>

  <h1>Add a user</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = 'post'>
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" required>
    </div>
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" placeholder="Another " name="lastname" required>
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" class="form-control" id="email" placeholder="Email Address " name="email" required>
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age" placeholder="Age" name="age" required>
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location" placeholder="Location" name="location" required> 
    </div>
    <div class="form-group">
      <button class="btn btn-primary" name="submit">Submit</button>
    </div>
  </form>

  <a href="index.php">Back to home</a>
<?php include "footer.php";?>
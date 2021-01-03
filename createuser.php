<?php include "header.php";?>
  <form action="" method = 'post'>
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" placeholder="Another ">
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="email" placeholder="Email Address ">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" placeholder="Age">
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" id="location" placeholder="Location">
  </div>
  <div class="form-group">
    <button class="btn btn-primary" name="submit">Submit</button>
  </div>
  </form>

  <a href="index.php">Back to home</a>
<?php include "footer.php";?>
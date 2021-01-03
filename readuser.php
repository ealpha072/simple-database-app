<?php include "header.php";?>
<h2>Find user by Location</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location" placeholder="Search by location">
    </div>
    <div class="form-group">
      <button class="btn btn-primary">View Results</button>
  </div>
  <a href="index.php">Back to home</a>
  </form>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

<?php include "footer.php";?>


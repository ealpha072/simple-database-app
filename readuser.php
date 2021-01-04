<?php include "header.php";?>
<?php include "config.php";?>



<h2>Find user by Location</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location" placeholder="Search by location" name='location'>
    </div>
    <div class="form-group">
      <button class="btn btn-primary" name= "submit-location">View Results</button>
  </div>
  <a href="index.php">Back to home</a>
  </form>

<?php 
  if(isset($_POST['submit-location'])){
      $location = $_POST['location'];

      $searchQuery = "SELECT * FROM users WHERE location= '$location'";
      $results = mysqli_query($conn, $searchQuery);

      if(mysqli_num_rows($results) > 0){
        #echo mysqli_num_rows($results)."<br>";
        $rows = mysqli_fetch_all($results, MYSQLI_ASSOC);
        ?>
        <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last</th>
            <th scope="col">E-mail</th>
            <th scope="col">Location</th>
            <th scope="col">Age</th>
            <th scope="col">Date</th>  
          </tr>
        </thead>
        <tbody>
              <?php foreach($rows as $row){?>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['lastname'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['location'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['date'];?></td>
              </tr>
              <?php }?>
        </tbody>
      </table>
      <?php } else {?>
        <h3>No results found for location <?php echo $_POST['location'];?></h3>
      <?php }?>
  <?php }?>
<?php include "footer.php";?>

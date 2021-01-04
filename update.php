<?php require "header.php";
      include "config.php";
?>

<h2>Update users</h2>
<?php 
  $sql = "SELECT * FROM users";
  $results = mysqli_query($conn,$sql);
  
  if(mysqli_num_rows($results) > 0){
    $rows = mysqli_fetch_all($results, MYSQLI_ASSOC); ?>

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
        <th scope="col">Edit</th> 
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
            <td><a href="updatesingle.php?id=<?php echo $row['id'];?>">Edit</a></td>
          </tr>
          <?php }?>
    </tbody>
  </table>
  <?php } else {?>
    <h3>No results found for your location</h3>
  <?php }?>
  <a href="index.php">Home</a>


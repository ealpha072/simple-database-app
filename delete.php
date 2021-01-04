<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "test";
  
  $conn = mysqli_connect($servername,$username,$password,$database);

  if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delquery = "DELETE FROM users WHERE id ='$id' ";
    $results = mysqli_query($conn,$delquery);
    #$success = "User deleted successfully!!";


  }
  $displayquery = "SELECT * FROM users";
  $results = mysqli_query($conn, $displayquery);
  $rows = mysqli_fetch_all($results, MYSQLI_ASSOC);
  #echo $success;


  
?>

<?php require "header.php"; ?>

<h2>Delete users</h2>

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
        <th scope="col" span-col='2' class='text-center'>Action</th> 
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
            <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
          </tr>
          <?php }?>
    </tbody>
  </table>

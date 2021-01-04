<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "test";
  
  $conn = mysqli_connect($servername,$username,$password,$database);

  if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delquery = "DELETE * FROM users WHERE id ='$id' ";
    $results = mysqli_query($conn,$delquery);
  }
?>

<?php require "headere.php"; ?>

<h2>Delete users</h2>

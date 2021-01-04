<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "test";
  
  $conn = mysqli_connect($servername,$username,$password,$database);

  if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email  = $_POST['email'];
    $location = $_POST['location'];
    $age = $_POST['age'];

    $mysql  = "INSERT INTO users (firstname,lastname,email,age,location) values ('$firstname','$lastname','$email','$age','$location')";
    mysqli_query($conn,$mysql);

    
  }

  
?>
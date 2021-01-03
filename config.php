<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "test";
  
  $conn = mysqli_connect($servername,$username,$password,$database);

  if($conn){
    echo "Success";
  }else{
    die("Failed ". mysqli_connect_error());
  }



?>
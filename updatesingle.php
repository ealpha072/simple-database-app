<?php require "config.php";

  if(isset($_POST['submit'])){

    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $location=$_POST['location'];
    $date=$_POST['date'];
  

    $updatequery = "UPDATE users 
      SET 
        id = '$id',
        firstname = '$firstname',
        lastname = '$lastname',
        email = '$email',
        age = '$age',
        location = '$location',
        date = '$date'
      WHERE id = '$id'";

    $updatedb = mysqli_query($conn,$updatequery);
  }


  if(isset($_GET['id'])){
    #echo $_GET['id'];
    $id = $_GET['id'];

    $updatesql = "SELECT * FROM users WHERE id ='$id'";
    $results = mysqli_query($conn,$updatesql);
    $user = mysqli_fetch_assoc($results);
  }else{
    echo "Something went wrong";
    exit;
  }
?>

<?php  require "header.php";?>

<?php if(isset($_POST['submit'])){?>
<h6><?php echo $_POST['firstname'];?> updated successfully!!</h6>
<?php }?>

<h2>Update User</h2>
<form action="" method="post">
  <?php 
    foreach ($user as $key => $value) : ?>
    <div class="form-group">
      <label for="<?php echo $key;?>"><?php echo ucfirst($key);?></label>
      <input 
        type="text" 
        name="<?php echo $key;?>" 
        id="<?php echo $key?>" 
        value="<?php echo $value;?>"
        <?php if($key === 'id'){
                echo "readonly";
              }else {
                echo null;
              }
        ?>
        class ="form-control"
      >
    </div>
    <?php endforeach; ?>
    <div class="form-group">
      <button class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>
<a href="index.php">Back to home</a>

<?php require "footer.php";?>
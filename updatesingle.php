<?php
  require "config.php";

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

<h2>Update User</h2>
<form action="">
  <?php 
    foreach ($user as $key => $value) : ?>
    <label for="<?php echo $key;?>"><?php echo ucfirst($key);?></label>
    <input 
      type="text" 
      name="<?php echo $key;?>" 
      id="<?php echo $key?>" 
      value="<?php echo $value;?>"
      placeholder = 'Enter new "<?php echo $key;?>"'
      <?php if($key === 'id'){
              echo "readonly";
            }else {
              echo null;
            }
      ?>
    >
    <?php endforeach; ?>
    <button class="btn btn-success" name="submit">Submit</button>
</form>
<a href="index.php">Back to home</a>
<?php
  require "config.php";
  require "header.php";

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
<form action="" method="">
  <?php 
    foreach ($user as $key => $value) : ?>
    <div class="form-group">
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
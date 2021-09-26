<?php 
   require ('C:\wamp64\www\apprendrePHP\actions\signupAction.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<?php 
    require('C:\wamp64\www\apprendrePHP\includes\head.php');
 ?>

<body>
<br></br>
<form class="container" method="POST">
    <?php  if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>';} ?>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Firstname</label>
    <input type="text" class="form-control" name="firstname">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">LastName</label>
    <input type="text" class="form-control" name="lastname">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="validate">Subscribe</button>
</form>
</body>
</html>
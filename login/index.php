<!DOCTYPE html>
<html lang="en">
<?php
    include("../partials/head.php")
    
    
    ?>
    <link rel="stylesheet" href="style.css">
<body>
 <?php
    include("../partials/header.php");
    
    
    ?>
    <div class="loader_bg">
      <div class="loader">
        <img src="../assets/loading.gif" alt="">
        <h3 style="text-align:center; color:#f4dd3b;">Loading...</h3>
      </div>

    </div>
    <section class="lhome">
    <div class="jumbotron logbox">
   <h1>Login In Genius</h1>
    <form method="POST" action="generator.php">
  <div class="form-group">
    <label for="exampleInputEmail1"><i class="fas fa-envelope-square"></i> Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><i class="fas fa-key"></i> Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
 
  <button type="submit" class="btn btn-primary">Login</button>
      
      <?php 
      if(isset($_REQUEST['msg']))
      {
        echo "<div class='alert alert-danger' role='alert'>".$_REQUEST['msg']."</div>";
      }
      else{
        echo "";
      }
        ?>
      </div>
</form>
    
</div>

    </section>
    <section class="foot">
<?php
    include("../partials/footer.php")
    
    ?>
    </section>
   
    
</body>
</html>
<?php
$msg="";
include("../partials/dbconnect.php");
if(!isset($_GET['email']))
{
    header("location:index.php");
}
if(isset($_POST['potp']))
{
    $phnotp=$_POST['potp'];
    $eotp=$_POST['eotp'];
    $email=$_REQUEST['email'];
    $sql1="SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result=$db->query($sql1);
    if($result->num_rows!=0)
    {
        $final=$result->fetch_assoc();
        $upotp=$final['phoneotp'];
        $ueotp=$final['emailotp'];
        $grade=$final['grade'];
        if($phnotp==$final['phoneotp'] && $eotp==$final['emailotp'])
        {
            $location="location: ../icse/".$grade;
            header($location);
        }
        else{
            $msg="Wrong Otp";
        }
    }
}
else{
    $msg="No Values";
}
?>
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
   <h1>2 Factor Authentication</h1>
    <form method="POST" action="#">
        <div class="form-group">
            <label for="exampleInputEmail1"><i class="fas fa-phone-square"></i> Phone OTP</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone OTP" name="potp">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"><i class="fas fa-envelope"></i> Email OTP</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Email OTP" name="eotp">
        </div>
 
        <button type="submit" class="btn btn-primary">Verify</button>
      
      <?php 
      if(isset($msg))
      {
        echo "<div class='alert alert-danger' role='alert'>".$msg."</div>";
      }
      else{
        echo "";
      }
        ?>
     
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
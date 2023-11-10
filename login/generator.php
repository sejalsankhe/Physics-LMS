<?php
require "PHPMailer/PHPMailerAutoload.php";  
include("../partials/dbconnect.php");
if(isset($_POST['email']))
{
    $email=$db->real_escape_string($_POST['email']);
    $pass=md5($db->real_escape_string($_POST['pass']));

    $sql1="SELECT * FROM users WHERE email = '$email' AND password = '$pass'LIMIT 1";
    $result=$db->query($sql1);
    if($result->num_rows!=0)
    {
        $final=$result->fetch_assoc();
        $phnotp=rand(100000,999999);
        $emailotp=rand(100000,999999);
        $sessionid=md5("1231tdas3adwda".rand(1000,9999).time());
        session_start();
        $_SESSION['sessionkey']=$sessionid;
        $phnnumber=$final['phone'];
        $sql2="UPDATE users SET phoneotp='$phnotp', emailotp='$emailotp', sessionid= '$sessionid' WHERE email='$email'";
        if($db->query($sql2))
        {
            include("otpsender.php");
            
            if ($err) {
            echo "cURL Error #:" . $err;
            } 
            else {
             include("emailsender.php");
                $to   = $email;
                $from = 'admin@scarletselixirexcellence.com';
                $name = 'Physicopedia';
                $subj = "OTP";
            
                $msg = "Hi, $username<br> The OTP to login is <h3><b>$emailotp</b><h3>" ;
        
                $error=smtpmailer($to,$from, $name ,$subj, $msg);
             

            }
        }
        else{
            $db->error;
        }

    }
    else{
        $msg="Invalid Username or Password";
        header("location: index.php?msg=$msg");
    }
    


}
?>
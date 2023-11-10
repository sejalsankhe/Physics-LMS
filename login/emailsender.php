<?php
function smtpmailer($to, $from, $from_name, $subject, $body)
      {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = 'smtp.hostinger.in';
        $mail->Port = 587;  
        $mail->Username = 'admin@scarletselixirexcellence.com';
        $mail->Password = 'Elixirexcellence#9';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="admin@scarletselixirexcellence.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            echo $mail->error;
           
            
        }
        else 
        {

           header("location:2stepverification.php?email=$to");
        }
    }
    ?>
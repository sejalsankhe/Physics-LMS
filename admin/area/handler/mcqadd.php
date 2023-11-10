<?php
include("../partials/dbconnect.php");
if(isset($_POST['chp']))
{
    $typ=$_POST['ty'];
    
    $chp=$_POST['chp'];
    
    $qifilename = $_FILES["qi"]["name"];
    $qitempname = $_FILES["qi"]["tmp_name"];   
    $aifilename = $_FILES["ai"]["name"];
    $aitempname = $_FILES["ai"]["tmp_name"];   
    $av=$_POST['av'];  

        $folder = "../../../10/images/mcq/";
         
   
 
        // Get all the submitted data from the form
       
 
    $sql = "INSERT INTO mcq(topic,qlink,ai,av,type) VALUES ('$chp','$qifilename','$aifilename','$av','$typ')";

        if ($db->query($sql))
        { 
            move_uploaded_file($qitempname, $folder.$qifilename);
            
            move_uploaded_file($aitempname, $folder.$aifilename);
            
            header("location: ../mcq.php");
            
            
            
        }
         else{
            echo $db->error;
        }

}

?>
<?php
    include('function.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
        if(performQuery($query)){
             $message = "Patient Request Rejected! Thank You";
       echo "<script type='text/javascript'>alert('$message');</script>";
       header("Refresh:0.5; url=prequest.php");
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>

<?php
  session_start();
  include('database_connection.php');
    include('function.php');
    $userid=$_SESSION['user_id'];
    $id = $_GET['id'];
    $query = "select * from `requests` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $id = $row['id'];
            $pname = $row['pname'];
            $dname = $row['dname'];
            $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
  $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
            $query = "INSERT INTO `patdocs` (`id`, `pname`, `dname`,`duser_id`,`session`) VALUES ('$id', '$pname', '$dname','$userid','$current_timestamp');";
             if(performQuery($query)){
              $query2 = "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
        if(performQuery($query2)){
           $message = "Patient Request has been accepted! Thank You";
       echo "<script type='text/javascript'>alert('$message');</script>";
       header("Refresh:0.5; url=prequest.php");
        }else{
            echo "Unknown  error1 occured. Please try again.";
        }

        }else{
            echo "Unknown  error occured. Please try again.";
        }
        }
      
    }else{
        echo "Error occured.";
    }
?>
<?php
  session_start();
  include('connection.php');
  include('database_connection.php');
    include('function.php');
    $userid=$_SESSION['user_id'];
    $pname=$_GET['pname'];
     $query = "select * from `patdocs` where `pname` = '$pname'; ";
      if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
          if(performQuery($query)){
             $query2 = "DELETE from patdocs where  pname = '$pname'; ";
                         if(performQuery($query2)){
             $message = "Patient Deleted! Thank You";
       echo "<script type='text/javascript'>alert('$message');</script>";
       header("Refresh:0.5; url=patientlist.php");

         
        }
        else{
            echo "Unknown  error occured. Please try again.";
        }
          }

        }
      }
      else
      {
        echo "Unknown  error 2 occured. Please try again.";
      }
           
?>
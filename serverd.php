<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'byou2');

if (isset($_POST['login_doc'])) {
  $dusername = mysqli_real_escape_string($db, $_POST['dusername']);
  $dpassword = mysqli_real_escape_string($db, $_POST['dpassword']);

  if (empty($dusername)) {
    array_push($errors, "Username is required");
  }
  if (empty($dpassword)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
   // $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$dusername' AND password='$dpassword'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['user_id']= $row['pid'];
      $_SESSION['username'] = $dusername;
      $_SESSION['success'] = "You are now logged in";
      header('location: index_doctor.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>
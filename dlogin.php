<?php

include('database_connection.php');

session_start();

$message = '';

if(isset($_POST['login']))
{
  $query = "
    SELECT * FROM login 
      WHERE username = :username and usertype = 'doctor'
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
    array(
      ':username' => $_POST["username"]
    )
  );  
  $count = $statement->rowCount();
  if($count > 0)
  {
    $result = $statement->fetchAll();
    $p1=$_POST["password"];

    foreach($result as $row)
    {
         $p2=$row["password"];
          $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
      if($p1 === $p2)
      {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $sub_query = "
        INSERT INTO login_details 
          (user_id) 
          VALUES ('".$row['user_id']."')
        ";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();
        header('location:index_doctor.php');
      }
      else
      {
        $message = '<label>Wrong Password!!!</label>';
      }
    }
  }
  else
  {
    $message = '<label>Wrong Username!!!</labe>';
  }
}


?>

<html>
<head>
  <title>bYOU | Login</title>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
   <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.butn
{
  background: #3FBBC0;color: #fff;border-radius: 30px;font-size: 20px; padding: 15px;
}
   .butn:hover{
color: #404040 !important;
font-weight: 700 !important;
padding: 25px;
letter-spacing: 3px;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
}
.section-heading {
    float: left;
    display: inline;
    width: 100%;
    text-align: center;
}
.line {
    border-bottom: 2px solid #3FBBC0;
    background: none repeat scroll 0 0 transparent;
    height: 1px;
    margin: 0 auto 15px;
    padding: 5px;
    position: relative;
    width: 120px;
} 
.wpcf7-text {
    height: 45px;
}
.wp-form-control {
    border-radius: 0px;
    display: inline;
    font-size: 15px;
    float: left;
    margin-bottom: 20px;
    padding: 10px 12px;
    -webkit-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    -ms-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
    width: 100%;
    border: 2px solid #3FBBC0;
}
.row {
    margin-right: -15px;
    margin-left: -15px;
}
#service {
    float: left;
    display: inline;
    width: 100%;
    padding: 40px 0px;
}
input
{
  -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark-color(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    -webkit-appearance: textfield;
    background-color: -internal-light-dark-color(white, black);
    -webkit-rtl-ordering: logical;
    cursor: text;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 0px;
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
}
.appointment-form label {
    color: #888;
    float: left;
    font-size: 18px;
    font-weight: normal;
    text-align: left;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
@media (min-width: 768px)
.container {
    width: 750px;
}
.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right:30%;
    margin-left: 30%;
}
.col-lg-12, .col-md-12
{
  position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

h2
{
   color: #313338;
    font-size: 30px;
    font-weight: 700;
    line-height: 40px;
    margin: 0;
    padding-bottom: 10px;
  font-family: 'Raleway', sans-serif;
}
.service-content {
    float: left;
    display: inline;
    width: 100%;
    padding: 10px 0px;
}
</style>
</head>
<body style="
    font-family: 'Habibi', serif;
    overflow-x: hidden !important;
    line-height: 1.42857143;">
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
 <div class="section-heading">
  <div class="line"></div>
                            <h2>Doctor&nbsp;&nbsp; |&nbsp;&nbsp; Login</h2>
                            <div class="line"></div>
                        </div>

  <form method="post" class="service-content">
<center>    <p class="text-danger" style="font-size: 25px; color: red; font-weight: bold;"><?php echo $message; ?></p></center>
    <div class="col-lg-8 col-md-8 col-sm-6" >
      <label class="control-label">Username</label>
      <input type="text"  class="wp-form-control wpcf7-text" name="username" placeholder="Enter username" required >
    </div>
    <div class="col-lg-2 col-md-2" >
      <label class="control-label">Password</label>
      <input type="password" class="wp-form-control wpcf7-text" name="password" placeholder="Enter password" required >
    </div>
<center>    <button name="login" class="butn" >Login</button>
</center>   
  </form>
  
</body>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
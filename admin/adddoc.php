<?php 
  session_start();  
  include('server.php');
include('connection.php');
$message = '';
if(isset($_POST["add_doc"]))
{
  $username = $_POST["username"];
  $pwrd = $_POST["password_1"];
  $fname=$_POST["fname"];
  $email=$_POST["email"];
  $dob=$_POST["date"];
  $mnumber=$_POST["mnumber"];
  $gender=$_POST["gender"];
  $department=$_POST["department"];
 
  $check_query = "
  SELECT * FROM login 
  WHERE username = :username
  ";
  $statement = $connect->prepare($check_query);
  $check_data = array(
    ':username'   =>  $username
  );
  $check_querye = "
    
  SELECT * FROM login 
  WHERE email = :email
  ";
  $statemente = $connect->prepare($check_querye);
  $check_datae = array(
    ':email'   =>  $email
  );
  $check_querym = "
    
  SELECT * FROM login 
  WHERE mobile = :mobile
  ";
  $statementm = $connect->prepare($check_querym);
  $check_datam = array(
    ':mobile'   =>  $mnumber
  );
  if($statement->execute($check_data))  
  {
    if($statement->rowCount() > 0)
    {
      $message .= 'Username already taken';
echo "<script type='text/javascript'>alert('$message');</script>";
    }
    elseif($statemente->execute($check_datae)){
   
     if($statemente->rowCount() > 0)
    {
      $message .= 'Email already exists';
echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
 elseif($statementm->execute($check_datam)){     
     if($statementm->rowCount() > 0)
    {
      $message .= 'Mobile number already exists';
echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
 
 else
    {    
      
      if($message == '')
      {
        $data = array(
          ':fname'    =>  $fname,
          ':username'   =>  $username,
          ':email'    =>  $email,
          ':dob'    =>  $dob,
          ':gender'   =>  $gender,
          ':mnumber'    =>  $mnumber,
          ':password'   =>  $pwrd,
          ':department' => $department,
        );

        $query = "
        INSERT INTO login 
        (Name, username, email, dob, gender, mobile, password, usertype,department) 
        VALUES (:fname,:username, :email,:dob,:gender,:mnumber,:password,'doctor',:department)
        ";
        $statement = $connect->prepare($query);
        if($statement->execute($data))
        {
          $message .= "Doctor Added! Thank You";
         echo "<script type='text/javascript'>alert('$message');</script>";
          header('location:mainpage.php');
        }
      }
    }
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
 <script src="https://kit.fontawesome.com/cfbb7eefe6.js" crossorigin="anonymous"></script>
  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <title>bYOU | Admin</title>
  <style type="text/css">
.top-area
{
  background-color: #3FBBC0;
}
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
  margin-top: 8%;
    float: left;
    display: inline;
    width: 100%;
    text-align: center;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type=number] {
  -moz-appearance:textfield;
}
.line {
    border-bottom: 2px solid #3FBBC0;
    background: none repeat scroll 0 0 transparent;
    height: 1px;
    margin: 0 auto 15px;
    padding: 5px;
    position: relative;
    width: 100px;
} 
.wpcf7-text {
    height: 30px;
}
.wp-form-control {
    border-radius: 0px;
    display: inline;
    font-size: 15px;
    float: left;
    margin-bottom: 20px;
    padding: 20px 20px;
    -webkit-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    -ms-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
    width: 100%;
    border: 2px solid #3FBBC0;
}
.wpcf7-textg {
    height: 35px;
}
.wp-form-controlg {
    border-radius: 0px;
    display: inline;
    font-size: 15px;
    float: left;
    margin-bottom: 20px;
    padding: 15px 15px;
    -webkit-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    -ms-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
    width: 100%;
    border: 2px solid #3FBBC0;
}
.row {
    margin-right: 50px;
    margin-left: 30px;
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
.appointment-form .required {
    color: red;
    font-size: 15px;
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

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right:5%;
    margin-left: 18%;
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
.text-danger
{
  color: red;
  font-weight: bold;
}
  </style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <div id="wrapper">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">    
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index.html">
                    <img src="img/thanveer.png" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="mainpage.php">Home</a></li>
            <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout')">Logout</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
   
   
<section style="
    margin-left: 0%;
    font-family: 'Habibi', serif;
    overflow-x: hidden !important;
    line-height: 1.42857143;">
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
 <div class="section-heading">
   <div class="line"></div>
                            <h2>Add Doctor</h2>
                            <div class="line"></div>
                        </div>
  
  <form method="post" action="" class="appointment-form">
   
    <div >
      <label class="control-label">Fullname<span class="required">*</span></label>
      <input type="text" class="wp-form-control wpcf7-text" name="fname" placeholder="Enter Doctor name" required>
    </div>

    <div >
      <label class="control-label">Username<span class="required">*</span></label>
      <input type="text" class="wp-form-control wpcf7-text" name="username" placeholder="Enter username"  required>
    </div>
    <div >
      <label class="control-label">Email<span class="required">*</span></label>
      <input type="email" class="wp-form-control wpcf7-text" name="email"  placeholder="Enter email id" required>
    </div>
    <div >
      <label class="control-label">Date of Birth<span class="required">*</span></label>
      <input type="Date" class="wp-form-control wpcf7-text" max="<?= date("Y-m-d") ?>" name="date"   required>
    </div>
    <div >
     <label class="control-label">Department <span class="required">*</span></label>
    <select class="wp-form-controlg wpcf7-texg" name="department" required="">
                                                    <option value=""></option>
                                                    <option value="Anxiety">Anxiety</option>
                                                    <option value="Depression">Depression</option>
                                                    <option value="Sleep Disorder">Sleep Disorder</option>
                                                    <option value="Failure">Failure</option>
                                                    <option value="Emotions">Emotions</option>
                                                    <option value="Stress Management">Stress Management</option>
                                                    <option value="Anger Management">Anger Management</option>
                                                </select>
    </div>
     <div >
  <div >
     <label class="control-label">Gender <span class="required">*</span></label>
    <select class="wp-form-controlg wpcf7-texg" name="gender" required="">
                                                    <option value=""></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
    </div>
     <div >
      <label class="control-label">Mobile<span class="required">*</span></label>
       <input type="number" class="wp-form-control wpcf7-text" name="mnumber" placeholder="Enter mobile number of doctor"  required>
    </div>
    <div>
      <label class="control-label">Password<span class="required">*</span></label>
      <input type="password" class="wp-form-control wpcf7-text" name="password_1" placeholder="Enter Password" minlength="8" maxlength="15"  pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" title="A valid password is a set of characters, each consisting of an upper or lower-case letter, or a digit. The password must begin with a letter and contain at least one digit" required/  >
    </div>
  <center>    <button name="add_doc" class="butn">Register</button>
  </center>

</div>
    </section>

  </form>
   <p style="padding-top: 20px;">
    <center><a href="mainpage.php" style="text-decoration: none;"> <button class="butn" >Back</button></a></center>
    </p>
</section>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
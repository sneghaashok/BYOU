<?php 
include('server.php');
include('database_connection.php');
$message = '';
$messages = '';
if(isset($_POST["reg_user"]))
{
  $username = $_POST["username"];
  $pwrd = $_POST["password_1"];
  $fname=$_POST["fname"];
  $email=$_POST["email"];
  $dob=$_POST["date"];
  $mnumber=$_POST["mnumber"];
  $gender=$_POST["gender"];

  //Get the current UNIX timestamp.
$date2=date("Y-m-d");
$date1=new DateTime($dob);
   $date2=new DateTime($date2);
    $interval = $date1->diff($date2);

   $age= $interval->y; 
 
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
  $check_querys = "
  SELECT * FROM spam_users 
  WHERE email = :email
  ";
  $statements = $connect->prepare($check_querys);
  $check_datas = array(
     ':email'   =>  $email
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
  elseif($statements->execute($check_datas)){     
     if($statements->rowCount() > 0)
    {
      $message .= 'You are restricted from using this service!!';
echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
elseif($age <= 18) {
   $message .='You are under 18 years of age.';
   echo "<script type='text/javascript'>alert('$message');</script>";
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
        );
        $query = "
        INSERT INTO login 
        (Name, username, email, dob, gender, mobile, password, usertype) 
        VALUES (:fname,:username, :email,:dob,:gender,:mnumber,:password,'patient')
        ";
        $statement = $connect->prepare($query);
        if($statement->execute($data))
        {
          $message .= "Registration Completed! Thank You";
         echo "<script type='text/javascript'>alert('$message');</script>";
           header('location:login.php');
        }
      }
    }
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>bYOU | Signup</title>
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
    padding: 12px 12px;
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
    padding: 10px 10px;
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
.text-danger
{
  color: red;
  font-weight: bold;
}
</style>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,      
      //duration: "slow",
      yearRange: "1960:2004",
      //minDate: new Date('01-jul-1995'),
      //maxDate: new Date('31-dec-2001')
    
     minDate: new Date('07/01/1960'),
     maxDate: new Date('12/31/2004')
    });
  } );
  </script>
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
                            <h2>Register</h2>
                            <div class="line"></div>
                        </div>
  
  <form method="post" action="" class="appointment-form">
    <center>    <p class="text-danger" style="font-size: 25px; color: red; font-weight: bold;"><?php echo $messages; ?></p></center>
    <div >
      <label class="control-label">Fullname<span class="required">*</span></label>
      <input type="text" class="wp-form-control wpcf7-text" name="fname" placeholder="Enter your name" required>
    </div>
    <div >
      <label class="control-label">Username<span class="required">*</span></label>
      <input type="text" class="wp-form-control wpcf7-text" name="username" placeholder="Enter username" value="<?php echo $username; ?>" required>
    </div>
    <div >
      <label class="control-label">Email<span class="required">*</span></label>
      <input type="email" class="wp-form-control wpcf7-text" name="email"  placeholder="Enter your email id" required>
    </div>
    <div >
      <label class="control-label">Date of Birth<span class="required">*</span></label>
      <input id="datepicker" type="Date" class="wp-form-control wpcf7-text datepicker" max="<?= date("yyyy-MM-dd") ?>" name="date"   required>
    </div>
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
      <input type="text" inputmode="numeric" pattern="[0-9]*" name="mnumber"  scroll="no scroll" maxlength="10" class="wp-form-control wpcf7-text" placeholder="Enter your 10 digit mobile number" required>
    </div>
    <div>
      <label class="control-label">Password<span class="required">*</span></label>
      <input type="password" class="wp-form-control wpcf7-text" name="password_1" placeholder="Enter Password" minlength="8" maxlength="15"  pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" title="A valid password is a set of characters, each consisting of an upper or lower-case letter. The password must begin with a letter and contain at least one digit" required/  >
    </div>
  <center>    <button name="reg_user" class="butn">Register</button>
  </center>
</div>
</div>
</div>
    </section>
  </form>
   <p style="padding-top: 20px;">
    <center>Already a member?<a href="login.php" style="text-decoration: none;"> <button class="butn" >Sign In</button></a></center>
    </p>
</body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<?php
session_start();
$error='';
if (isset($_POST["submit"])) {    
  $c1=$_POST["q1"];
$c2=$_POST["q2"];
$c3=$_POST["q3"];
$c4=$_POST["q4"];
$c5=$_POST["q5"];
$c6=$_POST["q6"];
$c7=$_POST["q7"];
$c8=$_POST["q8"];
$c9=$_POST["q9"];
$c10=$_POST["q10"];

if(isset($_POST["q1"])&&isset($_POST["q2"])&&isset($_POST["q3"])&&isset($_POST["q4"])&&isset($_POST["q5"])&&isset($_POST["q6"])&&isset($_POST["q7"])&&isset($_POST["q8"])&&isset($_POST["q9"])&&isset($_POST["q10"]))
{
  $e=0;
}
else
{
  $e=1;
  $error="Every question must be answered";
}
if($e==0)
{
  $file_open = fopen("survey_data.csv", "a");
  $no_rows = count(file("survey_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'Practice'  => $c1,
   'Age Group'  => $c2,
   'Youth%'  => $c3,
   'Issue'  => $c4,
   'Family Issues'  => $c5,
   'Pandemic effect'  => $c6,
   'Pour Out%'  => $c7,
   'Referring%'  => $c8,
   'Suicide'  => $c9,
   'Result%'  => $c10
  );
  fputcsv($file_open, $form_data);
  $error="Thank You!!";
  echo '<script>alert("Thank You..! For completing the survey"); location.replace(document.referrer);</script>';
  header( "Refresh:2; url=index_doctor.php");
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
  <title>bYOU | Home</title>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="https://kit.fontawesome.com/cfbb7eefe6.js" crossorigin="anonymous"></script>
  <!-- boxed bg -->
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <style type="text/css">
body
{
  background-color: white;
}
h2
{
   margin-top: 8%;
   font-family: "Open Sans";
}
form
{
 
  margin-left: 8%;
  font-size: 20px;
}
    #cs_article_text {
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    font-family: 'Open Sans', sans-serif;
    overflow: hidden;
}
#cs_article p, #cs_article li {
  font-family: 'Open Sans', sans-serif;
    font-size: 25px;
    color: #545454;
    padding-left: 5px;
}
.submitButton:hover{
color: #404040 !important;
font-weight: 700 !important;
padding: 150px;
letter-spacing: 3px;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
}
input[type="radio" i] {
    background-color: initial;
    cursor: default;
    -webkit-appearance: radio;
    box-sizing: border-box;
    margin: 3px 3px 0px 5px;
    padding: initial;
    border: initial;
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
          <a class="navbar-brand" href="index_doctor.html">
                    <img src="img/thanveer.png" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#intro">Home</a></li>
            <li class="active"><a href="patientlist.php">Patients</a></li>
             <li class="active"><a href="complaint.php">Complaint</a></li>
             <li class="active"><a href="survey.php">Survey</a></li>
            <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout')">Logout</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    <section>
      <h2 style="text-align: center;">SURVEY</h2>
    </section>
  <form action="" method="post">
    <?php echo $error;?>
    <p><b><i>1.</i>&nbsp;&nbsp;&nbsp; How many years have you practiced in your area of specialization post-training?</b><br>
       <input type="radio" name="q1" value="0-2 years">&nbsp;&nbsp;&nbsp;0-2 years<br>
      <input type="radio" name="q1" value="2-5 years">&nbsp;&nbsp;&nbsp;2-5 years<br>
      <input type="radio" name="q1" value="5-10 years">&nbsp;&nbsp;&nbsp;5-10 years<br>
      <input type="radio" name="q1" value="More than 10 years">&nbsp;&nbsp;&nbsp;More than 10 years<br>
    </p>
    <p><b><i>2.</i>&nbsp;&nbsp;&nbsp; What according to you is the age group that comes to you with the most number of cases?</b><br>
       <input type="radio" name="q2" value="12-18 years">&nbsp;&nbsp;&nbsp;12-18 years<br>
      <input type="radio" name="q2" value="18-25 years">&nbsp;&nbsp;&nbsp;18-25 years<br>
      <input type="radio" name="q2" value="25-35 years">&nbsp;&nbsp;&nbsp;25-35 years<br>
      <input type="radio" name="q2" value="35-50 years">&nbsp;&nbsp;&nbsp;35-50 years<br>
        <input type="radio" name="q2" value="More than 50 years">&nbsp;&nbsp;&nbsp;More than 50 years<br>
    </p>
     <p><b><i>3.</i>&nbsp;&nbsp;&nbsp; What according to you is the rough % of patients that you provide prescribed medication to?</b><br>
       <input type="radio" name="q3" value="Less than 25%">&nbsp;&nbsp;&nbsp;Less than 25%<br>
      <input type="radio" name="q3" value="Between 25% to 50%">&nbsp;&nbsp;&nbsp;Between 25% to 50%<br>
      <input type="radio" name="q3" value="Between 50% to 75%">&nbsp;&nbsp;&nbsp;Between 50% to 75%<br>
      <input type="radio" name="q3" value="More than 75%">&nbsp;&nbsp;&nbsp;More than 75%<br>
    </p>
    <p><b><i>4.</i>&nbsp;&nbsp;&nbsp;  What according to you are the issues that the youth is suffering from the most?</b><br>
       <input type="radio" name="q4" value="Anxiety">&nbsp;&nbsp;&nbsp;Anxiety <br>
      <input type="radio" name="q4" value="Bipolar Disorder">&nbsp;&nbsp;&nbsp;Bipolar Disorder<br>
      <input type="radio" name="q4" value="Stress Issues">&nbsp;&nbsp;&nbsp;Stress Issues<br>
      <input type="radio" name="q4" value="Suicidal Thoughts">&nbsp;&nbsp;&nbsp;Suicidal Thoughts<br>
      <input type="radio" name="q4" value="Alcohol and Drug Addicts">&nbsp;&nbsp;&nbsp;Alcohol and Drug Addicts<br>
      <input type="radio" name="q4" value="Relationship Issues">&nbsp;&nbsp;&nbsp;Relationship Issues<br>
      <input type="radio" name="q4" value="Depression">&nbsp;&nbsp;&nbsp;Depression<br>
      <input type="radio" name="q4" value="Anger Issues">&nbsp;&nbsp;&nbsp;Anger Issues<br>
    </p>
    <p><b><i>5.</i>&nbsp;&nbsp;&nbsp;How many of your patients have an issue related to their families?</b><br>
       <input type="radio" name="q5" value="Less than 25%">&nbsp;&nbsp;&nbsp;Less than 25%<br>
      <input type="radio" name="q5" value="Between 25% to 50%">&nbsp;&nbsp;&nbsp;Between 25% to 50%<br>
      <input type="radio" name="q5" value="Between 50% to 75%">&nbsp;&nbsp;&nbsp;Between 50% to 75%<br>
      <input type="radio" name="q5" value="More than 75%">&nbsp;&nbsp;&nbsp;More than 75%<br>
    </p>
    <p><b><i>6.</i> Has there been a sudden increase with the number of patients with mental health problems due to the ongoing pandemic that has affected the world?</b><br>
       <input type="radio" name="q6" value="Yes">&nbsp;&nbsp;&nbsp;Yes<br>
      <input type="radio" name="q6" value="No">&nbsp;&nbsp;&nbsp;No<br>
      <input type="radio" name="q6" value="Maybe">&nbsp;&nbsp;&nbsp;Maybe<br>
    </p>
    <p><b> Has there been a sudden increase with the number of patients with mental health problems due to the ongoing pandemic that has affected the world?</b><br>
      <p><b><i>7.</i>&nbsp;&nbsp;&nbsp;In terms of getting the information out and making the patient to pour out their feelings?</b><br>
      <input type="radio" name="q7" value="1">&nbsp;&nbsp;&nbsp;1<br>
      <input type="radio" name="q7" value="2">&nbsp;&nbsp;&nbsp;2<br>
      <input type="radio" name="q7" value="3">&nbsp;&nbsp;&nbsp;3<br>
      <input type="radio" name="q7" value="4">&nbsp;&nbsp;&nbsp; 4<br>
    </p>
    <p><b><i>8.</i>&nbsp;&nbsp;&nbsp;In terms of handling the situation by referring to a psychologist/psychiatrist if you’re from the other specialization?</b><br>
      <input type="radio" name="q8" value="1">&nbsp;&nbsp;&nbsp;1<br>
      <input type="radio" name="q8" value="2">&nbsp;&nbsp;&nbsp;2<br>
      <input type="radio" name="q8" value="3">&nbsp;&nbsp;&nbsp;3<br>
      <input type="radio" name="q8" value="4">&nbsp;&nbsp;&nbsp;4<br>
    </p>
     <p><b><i>9.</i>&nbsp;&nbsp;&nbsp;Have you had any patient that has committed sucide while under your supervision?</b><br>
      <input type="radio" name="q9" value="Yes">&nbsp;&nbsp;&nbsp;Yes<br>
      <input type="radio" name="q9" value="No">&nbsp;&nbsp;&nbsp;No<br>
    </p>
      <p><b><i>10.</i>&nbsp;&nbsp;&nbsp; What is the rough % of patients that have had a positive result from your practice?</b><br>
      <input type="radio" name="q10" value="Less than 25%">&nbsp;&nbsp;&nbsp;Less than 25%<br>
      <input type="radio" name="q10" value="Between 25% to 50%">&nbsp;&nbsp;&nbsp;Between 25% to 50%<br>
      <input type="radio" name="q10" value="Between 50% to 75%">&nbsp;&nbsp;&nbsp;Between 50% to 75%<br>
      <input type="radio" name="q10" value="More than 75%">&nbsp;&nbsp;&nbsp;More than 75%<br>
    </p>
        <center><input type="submit" name="submit" class="submitButton" style="background: #3FBBC0;color: #fff;border-radius: 30px;font-size: 18px; margin-bottom: 10%; padding: 10px;" value="submit"><br>
  </form>
</body>
</html>
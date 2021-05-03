<?php 
session_start();
include('database_connection.php');
 include('connection.php');
$did=$_SESSION['user_id'];
if(isset($_POST['submit']))
{
  $view = $_POST['view'];
$comments = $_POST['comments'];
$pid = $_POST['id'];


$query =  "INSERT INTO `complaint`(`id`,`doctor_id`, `complaint`, `message`,   `patient_id`) VALUES ('','$did','$view','$comments','$pid')";
$statement = $connect->prepare($query);
        $statement->execute();
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>bYOU | Complaints</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/stylec.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body class="agileits_w3layouts" id="page-top" data-spy="scroll" data-target=".navbar-custom">
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
            <li ><a href="index_doctor.php">Home</a></li>
            <li ><a href="patientlist.php">Patients</a></li>
             <li class="active"><a href="complaint.php">Complaint</a></li>
            <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout')">Logout</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    <h1 class="agile_head text-center" style="margin-top: 5%;">Complaint Form</h1>
    <div class="w3layouts_main wrap">
	  <h3>Please lodge your complaint here. </h3>
	    <form action="" method="post" class="agile_form">
		  <h2>Complaint about?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="Services" id="Services" required> 
				 	  <label for="Services">Services</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="patient" id="good"> 
					  <label for="good"> Patient</label>
				      <div class="check w3ls"></div>
				 </li>
				
			 </ul>	  
			<h2>Write a summary of your complaint...</h2>
			<textarea placeholder="Comments" class="w3l_summary" name="comments" required=""></textarea>
      <h2>If complaint against patient...</h2>
      <center>
   <select name="id" class="form-control">
<option value="pick">Select Patient </option><?php
$sql = mysqli_query($con, "SELECT id,pname From patdocs where duser_id='$did'");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['id'] ."'>" .$row['id']. " Patient Name: ".$row['pname']."</option>" ;
}
?>
</select></center>
<br>
			<center><input type="submit" value="submit complaint" class="btn" name="submit" /></center>
	  </form>
	</div>
</body>
</html>


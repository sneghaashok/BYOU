<?php 
 include('function.php');
include 'connection.php';
include('head.php');
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'byou2');
    $userid=$_SESSION['user_id'];
	  $get_id = $_SESSION['username'];
	  $get_pro = "SELECT*FROM login WHERE username= '$get_id'";

      $run_pro = mysqli_query($con,$get_pro);

       $row_pro = mysqli_fetch_array($run_pro);
	   
    	
      $p_name = $row_pro['Name'];
        $p_email = $row_pro['email'];
      $p_dob = $row_pro['dob'];
      $p_gender = $row_pro['gender'];
        $p_mobile = $row_pro['mobile'];   
        $old=$row_pro['password'];
        if(isset($_POST['update']))
        {
          $oldp=$_POST['oldp'];
          $newp=$_POST['newp'];
          if($oldp!=$old)
          {
            //$error=1;
            echo "<script>alert('Wrong Old password!!.')</script>";
          }
          elseif($oldp===$newp)
          {
           // $error=1;
            echo "<script>alert('Old password and New Password is same!!.')</script>";
          }
          //if($error=0)
          else{
            $query =  "UPDATE `login` SET `password`='$newp' WHERE `user_id`='$userid'";
$statement = $db->prepare($query);
        $statement->execute();
         echo "<script>alert('Password has been updated, Thank you.')</script>";
          }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>bYOU | Profile View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
 	<style>
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
  margin-top: 10%;
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
    width: 100px;
} 
.wpcf7-text {
    height: 45px;
}
.wp-form-control {
    border-radius: 0px;
    display: inline;
    font-size: 20px;
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
.appointment-form label {
    color: solid black  ;
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



</style>
  
    
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
            <li ><a href="index_patient.php">Home</a></li>
            <li><a href="service.php">Start</a></li>
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="about1.php" name="view_prof">How Counselling helps&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right angle_btn1"></i></a></li>
              </ul>
            </li>
           <li class="active"><a href="viewprofile.php" name="view_prof">View Profile</a></li>
             <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout')">Logout</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-area">
                        <!-- Start Service Title -->
                        <div class="section-heading">
                          
                            <h2>My Profile</h2>
                            <div class="line"></div>
                        </div>
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <form class="appointment-form" action="" method="post">
                                    
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Name <span class="required">*</span></label>
                                                <input type="text" class="wp-form-control wpcf7-text" value=" <?php echo $p_name?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Email <span class="required">*</span></label>
                                                <input type="email" class="wp-form-control wpcf7-email" value="<?php echo $p_email ?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Date Of Birth <span class="required">*</span></label>
                                                <input type="email" class="wp-form-control wpcf7-email" value=" <?php echo $p_dob ?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label"> Gender <span class="required">*</span></label>
                                                <input type="email" class="wp-form-control wpcf7-email" value=" <?php echo $p_gender ?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                      <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Phone <span class="required">*</span></label>
                                                <input type="number" class="wp-form-control wpcf7-text" value="<?php echo $p_mobile ?>" readonly>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                         <div class="row">
                                       <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">Old Password <span class="required">*</span></label>
                                                <input type="password" class="wp-form-control wpcf7-text"  name="oldp" required>
                                            </div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                         <div class="row">
                                        <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <label class="control-label">New Password <span class="required">*</span></label>
                                                <input type="password" class="wp-form-control wpcf7-text"  name="newp" required>
                                            </div>
                                             <div class="row">
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
 <div class="col-lg-2 col-md-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <center><button name="update" class="butn" >Update Password</button>
                                            </center></div>
                                            <div class="col-lg-2 col-md-2"></div>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>


    </div>
    
    </div>

</body>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

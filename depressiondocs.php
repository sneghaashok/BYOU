<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>bYOU | Services</title>
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
 <script src="https://kit.fontawesome.com/cfbb7eefe6.js" crossorigin="anonymous"></script>
  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#footer").load("footer.php"); 
});
</script> 
  <style type="text/css">

  
    .general-title1
    {
      padding-top: 80px;
      position: relative;
    margin: 50px 0px 60px 0px;
    }
    .butn:hover{
color: #404040 !important;
font-weight: 700 !important;
padding: 120px;
letter-spacing: 3px;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
}


.rev_box1 {
    padding: 10px;
    
    height: 490px;
}
@media only screen and (max-width: 767px) and (min-width: 320px)
{.rev_box1 {
    height: 545px;
}
.rev_box1 {
    padding: 10px;

    height: 490px;
}}
.rev_title {
    color: #6c6c6c;
    font-size: 28px;
    margin-top: 15px;
    margin-bottom: 8px;
}
.rev_cap {
    color: #9c9a9a;
    font-size: 20px;
    margin-bottom: 10px;
}
p {
    margin: 0 0 10px;
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
<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index_patient.php">Home</a></li>
            <li ><a href="pchat_index.php">Your Sessions</a></li>
            <li><a href="logout.php">Logout</a></li>
           
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    <div class="container" style="text-align: center;margin-bottom: 200px;">
            <div class="general-title1">
              <h2 class="n_one"><span>Talk To Counselor Online</span></h2>
            </div>
 <section class="docs">
  <div class="carousel-cell cell-new is-selected" style="position: absolute; left: 15%;">
  <div class="rev_box1">
                <div class="rev_img">
                
               <img style="width: 220px; height: 220px;" src="img/doctors/dd1.jpg">
                </div>
                <div class="rev_cntnt">
                <p class="rev_title">Counsellor Priyanka</p>
                <p class="rev_cap">(Masters in Clinical and Counselling Psychology)</p>
                 <p class="rev_cap">(Counsellor)</p>
                </div>
                <div class="btn_s_bottom">
                <a href="depdoc1.php">
                    <button class="butn" style=" margin-top:20px; background: #3FBBC0;color: #fff;border-radius: 30px;font-size: 16px; padding: 10px;">More About Her</button>
                  </a>
                </div>
              </div>
  </div><div class="carousel-cell cell-new" style="position: absolute; left: 45%;" aria-hidden="true">
  <div class="rev_box1">
                <div class="rev_img">
                
                <img style="width: 220px; height: 220px;" src="img/doctors/ds2.jpg">
                </div>
                <div class="rev_cntnt">
                <p class="rev_title">Counsellor Tanushree</p>
                <p class="rev_cap">(Masters in Clinical Psychology)</p>
                 <p class="rev_cap">(Therapist)</p>
              </div>
                <div class="btn_s_bottom">
                <a href="sleepdoc2.php">
                    <button class="butn" style="margin-top:20px; background: #3FBBC0;color: #fff;border-radius: 30px;font-size: 16px; padding: 10px;">More About Her</button>
                  </a>
                </div>
              </div>
  </div><div class="carousel-cell cell-new" aria-hidden="true" style="position: absolute; left: 75%;">
  <div class="rev_box1">
                <div class="rev_img">
                
                <img style="width: 220px; height: 220px;" src="img/doctors/ds3.jpg">
                </div>
                <div class="rev_cntnt">
                <p class="rev_title">Counsellor Shreya</p>
                <p class="rev_cap">(Masters in Counselling Psychology)</p>
                 <p class="rev_cap">(Counsellor)</p>
             </div>
                 <div class="btn_s_bottom">
                </a><a href="sleepdoc3.php">
                    <button class="butn" style="margin-top:20px; background: #3FBBC0;color: #fff;border-radius: 30px;font-size: 16px; padding: 10px;">More About Her</button>
                  </a>
                </div>
              </div>
  </div>  
 </section>
</body>
</html>
<?php
$timestamp = date("YmdHis"); // output: 20150715164614
?>
<html>
	<head>
		<title>bYOU | About Sleep</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css?v=<?php echo $timestamp;?>" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/style2.css?v=<?php echo $timestamp;?>">
 <script src="https://kit.fontawesome.com/cfbb7eefe6.js" crossorigin="anonymous"></script>
 
  <!-- boxed bg -->
    <script src="js/jquery-3.3.1.js"></script>
  <script src="js/scripts.js"></script>
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);
.boxes {
  margin: auto;
  padding: 50px;
  background: #484848;
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
/*Checkboxes styles*/
input[type="checkbox"] { display: none; }

input[type="checkbox"] + label {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 20px;
  font: 17px/20px 'Open Sans', sans-serif;
  color: black;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

input[type="checkbox"] + label:last-child { margin-bottom: 0; }

input[type="checkbox"] + label:before {
  content: '';
  display: block;
  width: 20px;
  height: 20px;
  border: 1px solid #6cc0e5;
  position: absolute;
  left: 0;
  top: 0;
  opacity: .6;
  -webkit-transition: all .12s, border-color .08s;
  transition: all .12s, border-color .08s;
}

input[type="checkbox"]:checked + label:before {
  width: 10px;
  top: -5px;
  left: 5px;
  border-radius: 0;
  opacity: 1;
  border-top-color: transparent;
  border-left-color: transparent;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
#veryHealthy, #healthy, #neutral, #unhealthy, #veryUnhealthy{
  display: none;
}

#veryHealthy img, #healthy img, #neutral img, #unhealthy img, #veryUnhealthy img {
  width: 50%;
  height: 50%;
  margin-bottom: 20px;
}

  	.ew-header {
    font-family: "Open Sans";
    font-size: 40px;
    font-weight: 700;
    text-align: center;
    line-height: 45px;
    color: #212121;
    margin-bottom: 2rem;
}
.test
{
	margin-left: 10%;
	margin-right: 10%;
}
.bod
{
	background-color: white;
}


hr
{
  
  margin-left: 5%;
  margin-right: 6%;
}
form
{
  font-size: 18px;
  color: black;
}
.form-group
{
  padding-bottom: 8px;
  border-bottom: 2px solid black;
}
  </style>
	</head>
<body class="bod" data-spy="scroll" data-target=".navbar-custom" >
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
            <li ><a href="index_patient.php">Home</a></li>
          <li class="active"><a href="pchat_index.php">Your Sessions</a></li>
          
            <li><a href="logout.php">Logout</a></li>
         
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
</nav>
  <section class="col-sm-12" style="padding-top: 8%;">
  <a id="main-content"></a>
                      <div class="region region-content">
     <div class="ew-header text-center">
                <h2 >Stress Management Test</h2>
              </div>
            
</section>
 <div class="container">
    <form id="healthSurvey">
      
      <div class="form-group">
        <p><b>1)</b>&nbsp;&nbsp;In the past year, have you experienced any of the following events?</p>
        <input type="checkbox" name="stressfulEvents" value="option1" id="box1"><label for="box1">Change in sleep habits.</label><br>
        <input type="checkbox" name="stressfulEvents" value="option2" id="box2"><label for="box2">Change in residence.</label><br>
        <input type="checkbox" name="stressfulEvents" value="option3" id="box3"><label for="box3">Change in responsibilities at work.</label><br>
        <input type="checkbox" name="stressfulEvents" value="option4" id="box4"><label for="box4">Change in financial state.</label><br>
        <input type="checkbox" name="stressfulEvents" value="option5" id="box5"><label for="box5">Change in frequency of arguments.</label><br>
      </div>

      <div class="form-group">
        <p><b>2)</b>&nbsp;&nbsp;In the past year, have you experienced any of the following symptoms?</p>
        <input type="checkbox" name="symptoms" value="option1" id="box6"><label for="box6">Low energy.</label><br>
        <input type="checkbox" name="symptoms" value="option2" id="box7"><label for="box7">Headaches.</label><br>
        <input type="checkbox" name="symptoms" value="option3" id="box8"><label for="box8">Constipation.</label><br>
        <input type="checkbox" name="symptoms" value="option4" id="box9"><label for="box9">Chest pain.</label><br>
        <input type="checkbox" name="symptoms" value="option5" id="box10"><label for="box10">Insomnia.</label><br>
      </div>
      <div class="form-group">
        <p><b>3)</b>&nbsp;&nbsp;In the past year, have you used any of these relief methods?</p>
        <input type="checkbox" name="stressRelievers" value="option1" id="box11"><label for="box11">Exercising.</label><br>
        <input type="checkbox" name="stressRelievers" value="option2" id="box12"><label for="box12">Takind Supplements</label><br>
        <input type="checkbox" name="stressRelievers" value="option3" id="box13"><label for="box13">Reducing caffeine intake.</label><br>
        <input type="checkbox" name="stressRelievers" value="option4" id="box14"><label for="box14">Spending time with friends and family.</label><br>
        <input type="checkbox" name="stressRelievers" value="option5" id="box15"><label for="box15">Laugh.</label><br>
      </div>
       <div class="form-group">
        <p> <b>4)</b>&nbsp;&nbsp;In general, how satisfied are you with your life?</p>
        <input type="checkbox" name="stressRelievers" value="option1" id="box16"><label for="box16">Very Satisfied</label><br>
        <input type="checkbox" name="stressRelievers" value="option2" id="box17"><label for="box17">Satisfied.</label><br>
        <input type="checkbox" name="symptoms" value="option3" id="box18"><label for="box18">Somewhat Satisfied.</label><br>
        <input type="checkbox" name="stressfulEvents" value="option4" id="box19"><label for="box19">Dissatisfied.</label><br>
        <input type="checkbox" name="stressfulEvents" value="option5" id="box20"><label for="box20">Very Dissatisfied.</label><br>
      </div>
        <div class="form-group">
        <p>  <b>5)</b>&nbsp;&nbsp; How often do you find yourself scrambling to meet a deadline at work?</p>
        <input type="checkbox" name="stressfulEvents" value="option1" id="box21"><label for="box21">All the time.</label><br>
        <input type="checkbox" name="stressfulEvents" value="option2" id="box22"><label for="box22">Often.</label><br>
        <input type="checkbox" name="symptoms" value="option3" id="box23"><label for="box23">Sometimes.</label><br>
        <input type="checkbox" name="stressRelievers" value="option4" id="box24"><label for="box24">Rarely.</label><br>
        <input type="checkbox" name="stressRelievers" value="option5" id="box25"><label for="box25">Never.</label><br>
      </div>
       <div class="form-group">
        <p><b>6)</b>&nbsp;&nbsp;  Do you consider fighting to be a serious problem in your relationship with either a partner or family member</p>
        <input type="checkbox" name="stressfulEvents" value="option1" id="box26"><label for="box26">Yes.</label><br>
        <input type="checkbox" name="symptoms" value="option2" id="box27"><label for="box27">Sometimes.</label><br>
        <input type="checkbox" name="stressRelievers" value="option3" id="box28"><label for="box28">No.</label><br>   
      </div>
       <div class="form-group">
        <p> <b>7)</b>&nbsp;&nbsp;How often do you lose your patience with a partner or family member?</p>
        <input type="checkbox" name="stressfulEvents" value="option1" id="box29"><label for="box29">All the time.</label><br>
        <input type="checkbox" name="stressfulEvents" value="option2" id="box30"><label for="box30">Often.</label><br>
        <input type="checkbox" name="symptoms" value="option3" id="box31"><label for="box31">Sometimes.</label><br>
        <input type="checkbox" name="stressRelievers" value="option4" id="box32"><label for="box32">Rarely.</label><br>
        <input type="checkbox" name="stressRelievers" value="option5" id="box33"><label for="box33">Never.</label><br>
      </div>
     <div class="form-group">
        <p><b>8)</b>&nbsp;&nbsp;     How would you rate your self-esteem?</p>
        <input type="checkbox" name="stressfulEvents" value="option1" id="box34"><label for="box34">Very Low.</label><br>
        <input type="checkbox" name="stressfulEvents" value="option2" id="box35"><label for="box35">Low.</label><br>
        <input type="checkbox" name="symptoms" value="option3" id="box36"><label for="box36">Average.</label><br>
        <input type="checkbox" name="stressRelievers" value="option4" id="box37"><label for="box37">High.</label><br>
        <input type="checkbox" name="stressRelievers" value="option5" id="box38"><label for="box38">Very High.</label><br>
      </div>
    
      <center>
      <button type="submit"  class="submitButton" style="background: #3FBBC0; color: #fff; border-radius: 30px;  font-size: 18px;   margin-bottom: 10%; padding: 10px; text-align: center;">Submit</button></center>
    </form>

    <span id="veryHealthy">
      <h5>You have very healthy habits and keep stress at bay.</h5>
   
      <p><button value="Refresh Page" class="submitButton" style="background: #3FBBC0; color: #fff; border-radius: 30px;  font-size: 18px;   margin-bottom: 10%; padding: 10px; text-align: center;" onClick="window.location.reload()">Start Over</button></p>
    </span>
    <span id="healthy">
      <h5>You have healthy habits and manage stress well.</h5>
      <img src="img/healthy.jpg" alt="healthy">
      <p><button value="Refresh Page" class="btn btn-dark" onClick="window.location.reload()">Start Over</button></p>
    </span>
    <span id="neutral">
      <h5>You experience stress at manageable levels.</h5>
     
      <p><button value="Refresh Page" class="btn btn-dark" onClick="window.location.reload()">Start Over</button></p>
    </span>
    <span id="unhealthy">
      <h5>You have unhealthy habits and are prone to stress.</h5>
     
      <p><button value="Refresh Page" class="btn btn-dark" onClick="window.location.reload()">Start Over</button></p>
    </span>
    <span id="veryUnhealthy">
      <h5>You have very unhealthy habits and don't manage stress well.</h5>
    
      <p><button value="Refresh Page" class="btn btn-dark" onClick="window.location.reload()">Start Over</button></p>
    </span>
  </div>
   <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About bYOU</h5>
                <p>
                 bYOU is the best online counseling and therapy site.
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Information</h5>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Doctors</a></li>
                  <li><a href="#">Report a Problem</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>bYOU center</h5>
                <p>
                  For a face to face contact
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                </span> Monday - Saturday, 8am to 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                </span> +91 1234567890
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                </span> byou@gmail.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>VIT University, Vellore-632014</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fab fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - bYOU.com. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    <!--
                      All the links in the footer should remain intact. 
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                    -->
                    Designed by bYOU.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>
  </body>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
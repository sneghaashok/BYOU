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
  
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <style type="text/css">

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
select
{
  margin-left: 85%;
  padding-top: 5px;
  padding-bottom: 5px;
  font-weight: bold;
  text-align: center;
}
option
{
  font-weight: bold;
}
form
{
  font-size: 18px;
}
#questionText
{
  margin-right: 15%;
}
hr
{
  
  margin-left: 5%;
  margin-right: 6%;
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
                <h2 >Sleep Deprivation Test</h2>
              </div>
            
</section>
</div>
<form id="questionForm">
    <div id="question" class="test">
      <div class="question1">
        <div id="questionText">
          <label for="q1">1).&nbsp;&nbsp; Do you have difficulty staying focused or alert?</label>
        </div>
        <div id="options">
          <select id="q1">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question2">
        <div id="questionText">
          <label for="q2">2).&nbsp;&nbsp; Do you struggle to stay awake during the day?</label>
        </div>
        <div id="options">
          <select id="q2">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question3">
        <div id="questionText">
          <label for="q3">3).&nbsp;&nbsp; Do you sleep less than 6 hours most nights?</label>
        </div>
        <div id="options">
          <select id="q3">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question4">
        <div id="questionText">
          <label for="q4">4).&nbsp;&nbsp; Have you noticed yourself gaining weight?</label>
        </div>
        <div id="options">
          <select id="q4">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question5">
        <div id="questionText">
          <label for="q5">5).&nbsp;&nbsp; Do you ever feel light-headed after standing or performing a physical activity?</label>
        </div>
        <div id="options">
          <select id="q5">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question6">
        <div id="questionText">
          <label for="q6">6).&nbsp;&nbsp; Do you suffer from High Blood Pressure?</label>
        </div>
        <div id="options">
          <select id="q6">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question7">
        <div id="questionText">
          <label for="q7">7).&nbsp;&nbsp; Do you have noticable priorbital puffiness, also known as "bags under the eyes"?</label>
        </div>
        <div id="options">
          <select id="q7">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question8">
        <div id="questionText">
          <label for="q8">8).&nbsp;&nbsp;Are you irritable, easily annoyed or short-tempered? </label>
        </div>
        <div id="options">
          <select id="q8">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question9">
        <div id="questionText">
          <label for="q9">9).&nbsp;&nbsp; Do you suffer from Nystagmus, characterized by rapid and involuntary movement of the eyes? </label>
        </div>
        <div id="options">
          <select id="q9">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question10">
        <div id="questionText">
          <label for="q10">10).&nbsp;&nbsp;Do you suffer from a general weariness or malaise throughout the day? </label>
        </div>
        <div id="options">
          <select id="q10">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question11">
        <div id="questionText">
          <label for="q11">11).&nbsp;&nbsp;Do you suffer from dramatic mood swings resulting in mania or depression? </label>
        </div>
        <div id="options">
          <select id="q11">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question12">
        <div id="questionText">
          <label for="q12">12).&nbsp;&nbsp; Do you suffer from frequent headaches?</label>
        </div>
        <div id="options">
          <select id="q12">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>
    <hr><br>
    <div id="question" class="test">
      <div class="question13">
        <div id="questionText">
          <label for="q13">13).&nbsp;&nbsp; Do you suffer from involuntary hand tremors?</label>
        </div>
        <div id="options">
          <select id="q13">
            <option value="0">Never</option>
            <option value="1">Sometimes</option>
            <option value="2">Often</option>
            <option value="3">Always</option>
          </select>
        </div>
      </div>
    </div>

    <hr><br>
    <center>  <button name="submit" type="submit" class="submitButton" style="background: #3FBBC0;color: #fff;border-radius: 30px;font-size: 18px; margin-bottom: 10%; padding: 10px;">Submit</button></center>
  </form>

  <script type="text/javascript">
 document.getElementById('questionForm').addEventListener('submit', estimateTotal);

    function estimateTotal(event) {
      event.preventDefault();
      console.log("submit button works, and prints the points to the console")


      var ques1 = document.getElementById('q1').value,
        ques2 = document.getElementById('q2').value,
        ques3 = document.getElementById('q3').value,
        ques4 = document.getElementById('q4').value,
        ques5 = document.getElementById('q5').value,
        ques6 = document.getElementById('q6').value,
        ques7 = document.getElementById('q7').value,
        ques8 = document.getElementById('q8').value,
        ques9 = document.getElementById('q9').value,
        ques10 = document.getElementById('q10').value,
        ques11 = document.getElementById('q11').value,
        ques12 = document.getElementById('q12').value,
        ques13 = document.getElementById('q13').value;

      var points = 0;
      for (q1val = 0; q1val <= 3; q1val++) {
        if (ques1 == q1val) {
          points += q1val;
        }
      }
      for (q2val = 0; q2val <= 3; q2val++) {
        if (ques2 == q2val) {
          points += q2val;
        }
      }
      for (q3val = 0; q3val <= 3; q3val++) {
        if (ques3 == q3val) {
          points += q3val;
        }
      }
      for (q4val = 0; q4val <= 3; q4val++) {
        if (ques4 == q4val) {
          points += q4val;
        }
      }
      for (q5val = 0; q5val <= 3; q5val++) {
        if (ques5 == q5val) {
          points += q5val;
        }
      }
      for (q6val = 0; q6val <= 3; q6val++) {
        if (ques6 == q6val) {
          points += q6val;
        }
      }
      for (q7val = 0; q7val <= 3; q7val++) {
        if (ques7 == q7val) {
          points += q7val;
        }
      }
      for (q8val = 0; q8val <= 3; q8val++) {
        if (ques8 == q8val) {
          points += q8val;
        }
      }
      for (q9val = 0; q9val <= 3; q9val++) {
        if (ques9 == q9val) {
          points += q9val;
        }
      }
      for (q10val = 0; q10val <= 3; q10val++) {
        if (ques10 == q10val) {
          points += q10val;
        }
      }
      for (q11val = 0; q11val <= 3; q11val++) {
        if (ques11 == q11val) {
          points += q11val;
        }
      }
      for (q12val = 0; q12val <= 3; q12val++) {
        if (ques12 == q12val) {
          points += q12val;
        }
      }
      for (q13val = 0; q13val <= 3; q13val++) {
        if (ques13 == q13val) {
          points += q13val;
        }
      }
      /**
      if(ques1 === "YES"){points++;}
      if(ques2 === "YES"){points++;}
      if(ques3 === "YES"){points++;}
      if(ques4 === "YES"){points++;}
      if(ques5 === "YES"){points++;}
      if(ques6 === "YES"){points++;}
      if(ques7 === "YES"){points++;}
      if(ques8 === "YES"){points++;}
      if(ques9 === "YES"){points++;}
      if(ques10 === "YES"){points++;}
      if(ques11 === "YES"){points++;}
      if(ques12 === "YES"){points++;}
      if(ques13 === "YES"){points++;}
      */
      console.log(points);

     window.open("results.php?points=" + points + "&from=sleep", "_self");


    }
  </script>
           </section> 
  </body>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
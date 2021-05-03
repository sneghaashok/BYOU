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
    .ew-header{
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
form
{
  font-size: 20px;
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
                <h2 >Anger Management Test</h2>
              </div>
            
</section>
<section>
  <div id="cs_article_text"><p><i>Use this short screening test to help determine if you should seek help (diagnosis and treatment) for anger problems.</i></p><p><b><i>Instructions:</i></b> The items below refer to how you have behaved <b>during the past year</b>. Please indicate whether each question is TRUE or FALSE as a description of you during the past year.</p><p><i>NOTE: If you suspect that you have an anger management problem you should seek help from a health professional regardless of how you score on this screening test.</i></p>
    <form name="form1" method="post" action="angertestresult.php">
      <input type="hidden" name="type" value="doc">
      <input type="hidden" name="id" value="3396"><p><b><i>1.</i> I don’t show my anger about everything that makes me mad, but when I do – look out.</b><br>
      <input type="radio" name="100" value="1"> True 
      <input type="radio" name="100" value="0"> False</p>
      <p><b><i>2.</i> I still get angry when I think of the bad things people did to me in the past. </b><br>
      <input type="radio" name="200" value="1"> True
      <input type="radio" name="200" value="0"> False</p>
      <p><b><i>3.</i> Waiting in line, or waiting for other people, really annoys me. </b><br>
      <input type="radio" name="300" value="1"> True 
      <input type="radio" name="300" value="0"> False</p>
      <p><b><i>4.</i> I fly off the handle easily.</b><br>
      <input type="radio" name="400" value="1"> True 
      <input type="radio" name="400" value="0"> False</p>
      <p><b><i>5.</i> I often find myself having heated arguments with the people who are closest to me.</b><br>
      <input type="radio" name="500" value="1"> True 
      <input type="radio" name="500" value="0"> False</p>
      <p><b><i>6.</i> I sometimes lie awake at night and think about the things that upset me during the day. </b><br>
      <input type="radio" name="600" value="1"> True 
      <input type="radio" name="600" value="0"> False</p>
      <p><b><i>7.</i> When someone says or does something that upsets me, I don’t usually say anything at the time, but later spend a lot of time thinking up cutting replies I could and should have made. </b><br>
      <input type="radio" name="700" value="1"> True 
      <input type="radio" name="700" value="0"> False</p>
      <p><b><i>8.</i> I find it very hard to forgive someone who has done me wrong. </b><br>
      <input type="radio" name="800" value="1"> True 
      <input type="radio" name="800" value="0"> False</p>
      <p><b><i>9.</i> I get angry with myself when I lost control of my emotions. </b><br>
      <input type="radio" name="900" value="1"> True 
      <input type="radio" name="900" value="0"> False</p>
      <p><b><i>10.</i> People really irritate me when they don’t behave the way they should, or when they act like they don’t have the good sense of a head of lettuce. </b><br>
      <input type="radio" name="1000" value="1"> True
      <input type="radio" name="1000" value="0"> False</p>
      <p><b><i>11.</i> If I get really upset about something, I have a tendency to feel sick later, either with a weak spell, headache, upset stomach, or diarrhea.</b><br>
      <input type="radio" name="1100" value="1"> True 
      <input type="radio" name="1100" value="0"> False</p>
      <p><b><i>12.</i> People I've trusted have often let me down, leaving me feeling angry or betrayed.</b><br>
      <input type="radio" name="1200" value="1"> True 
      <input type="radio" name="1200" value="0"> False</p>
      <p><b><i>13.</i> When things don’t go my way, I get depressed.</b><br>
      <input type="radio" name="1300" value="1"> True 
      <input type="radio" name="1300" value="0"> False</p>
      <p><b><i>14.</i> I am apt to take frustration so badly that I cannot put it out of my mind.</b><br>
      <input type="radio" name="1400" value="1"> True 
      <input type="radio" name="1400" value="0"> False</p>
      <p><b><i>15.</i> I've been so angry at times I couldn't remember things I said or did.</b><br>
      <input type="radio" name="1500" value="1"> True 
      <input type="radio" name="1500" value="0"> False</p>
      <p><b><i>16.</i> After arguing with someone, I hate myself.</b><br>
      <input type="radio" name="1600" value="1"> True
      <input type="radio" name="1600" value="0"> False</p>
      <p><b><i>17.</i> I've had trouble on the job because of my temper.</b><br>
      <input type="radio" name="1700" value="1"> True
      <input type="radio" name="1700" value="0"> False</p>
      <p><b><i>18.</i> When riled up, I often blurt out things I later regret saying.</b><br>
      <input type="radio" name="1800" value="1"> True
      <input type="radio" name="1800" value="0"> False</p>
      <p><b><i>19.</i> Some people are afraid of my bad temper.</b><br>
      <input type="radio" name="1900" value="1"> True 
      <input type="radio" name="1900" value="0"> False</p>
      <p><b><i>20.</i> When I get angry, frustrated or hurt, I comfort myself by eating or using alcohol or other drugs.</b><br>
      <input type="radio" name="2000" value="1"> True
      <input type="radio" name="2000" value="0"> False</p>
      <p><b><i>21.</i> When someone hurts or frustrates me, I want to get even.</b><br>
      <input type="radio" name="2100" value="1"> True 
      <input type="radio" name="2100" value="0"> False</p>
      <p><b><i>22.</i> I've gotten so angry at times that I've become physically violent, hitting other people or breaking things.</b><br>
      <input type="radio" name="2200" value="1"> True
      <input type="radio" name="2200" value="0"> False</p>
      <p><b><i>23.</i> At times, I've felt angry enough to kill.</b><br>
      <input type="radio" name="2300" value="1"> True 
      <input type="radio" name="2300" value="0"> False</p>
      <p><b><i>24.</i> Sometimes I feel so hurt and alone I feel like committing suicide.</b><br>
      <input type="radio" name="2400" value="1"> True 
      <input type="radio" name="2400" value="0"> False</p>
      <p><b><i>25.</i> I’m a really angry person, and I know I need help learning to control my temper and angry feelings because it has already caused me a lot of problems.</b><br>
      <input type="radio" name="2500" value="1"> True
      <input type="radio" name="2500" value="0"> False</p><p>
        <center><input type="submit" name="Submit" class="submitButton" style="background: #3FBBC0;color: #fff;border-radius: 30px;font-size: 18px; margin-bottom: 10%; padding: 10px;" value="Submit"><br></p></form>
</div>
</section>
</div>
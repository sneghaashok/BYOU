<!--Patient request approval-->
<?php
session_start();
 include("function.php");
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
 <script src="https://kit.fontawesome.com/cfbb7eefe6.js" crossorigin="anonymous"></script>
  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <style type="text/css">
    .butn
    {
      background: #3FBBC0;color: #fff;border-radius: 30px;font-size: 16px; padding: 10px;
    }
       .butn:hover{
color: #404040 !important;
font-weight: 700 !important;
padding: 12px;
letter-spacing: 3px;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
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
          <a class="navbar-brand" href="index_doctor.php">
                    <img src="img/thanveer.png" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
           <ul class="nav navbar-nav">
           <li ><a href="index_doctor.php">Home</a></li>
            <li class="active" ><a href="patientlist.php">Patients</a></li>
            <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout')">Logout</a></li>
          
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
      </nav>
     
  <main role="main">

      <section class="jumbotron text-center" style="margin-top: 5%;">
        <div class="container">
            <?php
              $username=$_SESSION['username'];
                $query = "select * from `requests` where dname='$username';";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                
                    <h4 class="jumbotron-heading"><?php echo $row['pname'] ?></h4>
                      <p class="lead text-muted"><?php echo $row['message'] ?></p>
                      <p>

                        <a href="accept.php?id=<?php echo $row['id']?> " class="butn">Accept</a>
                        <a href="reject.php?id=<?php echo $row['id'] ?>" class="butn">Reject</a>
                      </p>
            <?php
                    }
                }else{
                    echo "No Pending Requests, Thank You.";
                }
            ?>
          
        </div>
      </section>
</body>
</html>
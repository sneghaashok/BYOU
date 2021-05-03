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

<link rel="stylesheet" href="adminmain.css"> 
<style>
  .top-area
{
  background-color: #3FBBC0;
}
table{
  text-align: center;
  font-family: 'Open Sans', sans-serif;
    width: 85%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 3px;

}

th{
    font-size: 20px;
    font-weight: bold;
border-bottom: 4px solid black;
border-right: 2px solid black;
border-left: 2px solid black;
	background-color: #3FBBC0;
    color: white;
	text-align: center;
  padding: 8px;
}
tr,td{
 font-family: 'Open Sans', sans-serif;
	border: 2px solid black;
	background-color: white;
    color: black;
     padding: 8px;
}
td
{
    font-size: 15px;
}
h2
{
  font-size: 22px;
}
.activen
{
  color: #3FBBC0;
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
            <li><a href="mainpage.php">Home</a></li>
            <li class="activen"><a href="comaplaints.php">Complaint</a></li>
            <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout')">Logout</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
<center><h1 style="font-size: 25px;">COMPLAINTS</h1><hr>
<?php
session_start();
$con = mysqli_connect('localhost','root','','bYOU2');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT  login.Name,patdocs.pname, complaint.* FROM login,patdocs,complaint where login.user_id=complaint.doctor_id    ";
$result = mysqli_query($con,$sql);
echo "<br><h2>TOTAL COMPLAINTS =<b>".mysqli_num_rows($result)."</b></h2><br>";
echo "<table>
<tr>
<th>ID</th>
<th>Doctor ID</th>
<th>Doctor Name</th>
<th>About</th>
<th>Message</th>
<th>Patient ID</th>
<th>Patient Name</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
    echo "<td>Dr. " . $row['doctor_id'] . "</td>";
     echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['complaint'] . "</td>";
    echo "<td>" . $row['message'] . "</td>";
    echo "<td>" . $row['patient_id'] . "</td>";
    echo "<td>" . $row['pname'] . "</td>";
    echo "</tr>";
    break; 
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
<?php
session_start();
include 'connection.php';
if(isset($_POST['Submit1']))
{
	if (isset($_POST['spam'])&&$_POST['spam']=='Yes') 
	{ 
		//$did=$_POST['did'];
			$did=$_POST['did'];
		 $sql2= "INSERT INTO spam_users(user_id,Name,username,email,dob,gender,mobile,password,usertype,department) SELECT * FROM login where user_id = $did"; 
		 if (mysqli_query($conn, $sql2)) { 
		 	echo "Record added successfully in Spam Users table.  Refreshing....";
		 	 header( "Refresh:3; url=deletepat.php");
		 	  } 
		 else {
		 echo "Error deleting record: " . mysqli_error($conn);
		  }
		   }
	else{
	$did=$_POST['did'];	
	$sql = "DELETE FROM login WHERE user_id= $did ";
		$sqlda = "DELETE FROM patdocs WHERE id= $did ";
	if (mysqli_query($conn, $sql))
		{
		echo "Record deleted successfully from users table.  Refreshing....";
		header( "Refresh:3; url=deletepat.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}
		if (mysqli_query($conn, $sqlda))
		{
		echo "Record deleted successfully from patdocs table.  Refreshing....";
		header( "Refresh:3; url=deletepat.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}
	}
}
if(isset($_POST['Submit2']))
{
	if (isset($_POST['spam'])&&$_POST['spam']=='Yes') 
	{ 
		//$did=$_POST['did'];
	$did=$_POST['username'];
		 $sql2= "INSERT INTO spam_users(user_id,Name,username,email,dob,gender,mobile,password,usertype,department) SELECT * FROM login where user_id = $did"; 
		 if (mysqli_query($conn, $sql2)) { 
		 	echo "Record added successfully in Spam Users table.  Refreshing....";
		 	 header( "Refresh:3; url=deletepat.php");
		 	  } 
		   }

	$did=$_POST['username'];
	$sql = "DELETE FROM login WHERE user_id = $did ";
	$sqlda = "DELETE FROM patdocs WHERE id= $did ";
	if (mysqli_query($conn, $sql))
		{
		echo "Record deleted successfully.  Refreshing....";
		header( "Refresh:2; url=deletepat.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}
	if (mysqli_query($conn, $sqlda))
		{
		echo "Record deleted successfully from Users table.  Refreshing....";
		header( "Refresh:2; url=deletepat.php");
		}
	else
		{
			echo "Error deleting record: " . mysqli_error($conn);
		}
}	
if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header( "Refresh:1; url=index.php"); 
	}
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
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
  <link href="css/adminmain.css" rel="stylesheet">
 <script src="https://kit.fontawesome.com/cfbb7eefe6.js" crossorigin="anonymous"></script>
  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <title>bYOU | Admin</title><link rel="stylesheet" href="adminmain.css"> 
  <style type="text/css">
  	.top-area
{
  background-color: #3FBBC0;
}
  </style>
</head>
<body d="page-top" data-spy="scroll" data-target=".navbar-custom.">
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
            <li class="active"><a href="mainpage.php">Home</a></li>
            <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout')">Logout</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
<center><h1>DELETE PATIENT</h1><hr>
<form method="post" >  
<input type="checkbox" name="spam" value="Yes">Spam User<br>
Enter Patient ID:<center><input type="number" name="did"></center>
			<button type="submit" name="Submit1">Delete by User ID</button>
			<br>---------OR---------<br>
Select Name:<br>
<?php
				require_once('connection.php');
				$doctor_result = $conn->query('select * from login where usertype="patient" order by user_id ASC');
				?>
				<center>
				<select name="username">
				<option value="">---Select Name---</option>
				<?php
				if ($doctor_result->num_rows > 0) {
				while($row = $doctor_result->fetch_assoc()) {
				?>
				<option value="<?php echo $row['user_id']; ?>"><?php echo "(User ID= $row[user_id])  ".$row["Name"]; ?></option>
				<?php
					}
					}
				?>
				</select></center>
				
				<button type="submit" name="Submit2">Delete by Name</button>
</form>			
<?php
?>			
</body>
</html>
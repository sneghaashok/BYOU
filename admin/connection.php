<?php
      
   $connect = new PDO("mysql:host=localhost;dbname=byou2;charset=utf8mb4", "root", "");
	$conn = mysqli_connect("localhost","root","","byou2");
	 
	 if(!$conn){
	 	die("Connection Failed!:".mysqli_connect_error());
	 }
?>
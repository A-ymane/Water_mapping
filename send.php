<?php 
$hostname_mysqli = "localhost";
$username_mysqli = "root";
$password_mysqli = "";
$database_mysqli = "pikelife";
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];

$db = new mysqli($hostname_mysqli,$username_mysqli,$password_mysqli,$database_mysqli);
if($db->connect_error){
	die("Connect error ({$db->connect_errno}) {$db->connect_error}");
} 
$name = $_POST["name"];
$email = $_POST["email"];
$lat = $_POST["lat"];
$long = $_POST["long"];

if($q2>0 && $q2<4)
$flag = 2;
else if ($q2<7)
$flag = 3;
else 
$flag = 1;



	$db->query("INSERT INTO `water`(`name`, `email`, `lat`, `long`,`flag`) VALUES ('$name','$email','33.540627','-5.1068292','$flag');");
				header("Location: test.html");

		
?>
<?php

/*fetch all the picture of a specific moment in JSON format*/

$hostname_mysqli = "localhost";
$username_mysqli = "root";
$password_mysqli = "";
$database_mysqli = "water";
$db = new mysqli($hostname_mysqli,$username_mysqli,$password_mysqli,$database_mysqli);

if($db->connect_error){
	die("Connect error ({$db->connect_errno}) {$db->connect_error}");
}

$result = $db->query("SELECT * FROM info");

$outp = "[";

while($rs = $result->fetch_array()) {

    if ($outp != "[") {$outp .= ",";}

    $outp .= '['.$rs["lat"].",".$rs["longd"].","."\"0\"".",".$rs["flag"]. ']';

}

$outp .="]";



$db->close();



echo($outp); 
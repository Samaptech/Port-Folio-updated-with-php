<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con == "yes"){
die("connection failed". mysqli_connect_error($con));
}
else{
    echo("Connection Successfully connected");
}


?>
<?php
$dbHost = "172.31.22.43";
$dbUsername = "Samuel200595786";
$dbPassword = "vb9dRKhq-o";
$dbName = "Samuel200595786";
// We create our connection and save to a variable
$con = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if(!$con){
    die("Connection failed: " . mysqli_connect_error())
}else{
    echo"<h3>Connected to the database</h3>";
}
?>
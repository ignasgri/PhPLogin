<?php 

$dbServername = "localhost";
$dbUsername = "root";
$dbPasseord = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPasseord, $dbName);

// dont need to close php file is this file contains only php script
<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "pweb pr menggila";

$con = mysqli_connect($serverName, $userName, $password, $dbname);

if (!$con) {
    die("Connection failed: ". mysqli_connect_error());
}
?>
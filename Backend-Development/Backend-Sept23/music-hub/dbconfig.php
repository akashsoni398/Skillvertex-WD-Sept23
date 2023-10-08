<?php 

$dbhost = "localhost";
$dbdatabase = "music-hub";
$dbuser = "root";
$dbpasswd = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpasswd,$dbdatabase);

if(!$conn) {
    echo "Database connection error:",mysqli_connect_error();
}
?>
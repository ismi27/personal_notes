<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "db_personal_notes";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
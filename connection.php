<?php
$username = "root";
$pass = "";
$host = "localhost";
$db_name = "temphumidity";
$conn = mysqli_connect($host, $username, $pass);
$db = mysqli_select_db($conn, $db_name);
?>
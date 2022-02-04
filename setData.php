<?php
include('connection.php');

// SQL query to select data from database
// $sql_show = "SELECT * FROM dht22 ";
// $sql_show2 = "SELECT * FROM oneoff ";

// $data = $conn->query("SELECT * FROM dht22")->fetchAll();
// $data = $conn->query("SELECT * FROM dht22")->execute();


// $data = $data->fetchAll();

$data = "SELECT * FROM dht22 ";
$data = $conn->query($data);
$conn->close();
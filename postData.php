<?php
include('connection.php');
$sql_insert = "INSERT INTO dht22 (H,T,U, I1, I2, I3) VALUES ('" . $_POST["H"] . "',  '" . $_POST["T"] . "',  '" . $_POST["U"] . "', '" . $_POST["I1"] . "',  '" . $_POST["I2"] . "', '" . $_POST["I3"] . "')";
if (mysqli_query($con, $sql_insert)) {
    echo "Done";
    mysqli_close($con);

} else {
    echo "error is " . mysqli_error($con);
}

?>
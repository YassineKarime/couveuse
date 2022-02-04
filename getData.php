<?php
include ('connection.php');
// $result = "INSERT INTO dht22 (H,T,U, I1, I2, I3) VALUES (40,28,200,1200,200000,10000)";
$result = "INSERT INTO dht22 (T, H) VALUES ('".$_GET["T"]."', '".$_GET["H"]."')";
if(mysqli_query($conn,$result))
{
echo "Done";
mysqli_close($conn);
}
else
{
echo "error is ".mysqli_error($conn);
}
//
// SQL query to select data from database


?>
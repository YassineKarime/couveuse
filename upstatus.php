<?php

// Connect to database 
include('connection.php');

// if (isset($_GET['id'])) {
//     if ($_GET['status'] == 0) {
//         $course_id = $_GET['id'];
//         $sql = "UPDATE `oneoff` SET `status`=1 WHERE id='$course_id'";
//     } else {
//         $course_id = $_GET['id'];
//         $sql = "UPDATE `oneoff` SET `status`=0 WHERE id='$course_id'";
//     }
//     // Execute the query
//     mysqli_query($con, $sql);
// }
if (isset($_POST['status'])) {
    if (!$_POST['status'] == 0) {
        $sql = "UPDATE `oneoff` SET `status`=1 WHERE id=1";
    } else {
        $sql = "UPDATE `oneoff` SET `status`=0 WHERE id=1";
    }
    // Execute the query
    mysqli_query($con, $sql);
}
// Go back to course-page.php
header('location: showData.php');

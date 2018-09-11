<?php
session_start();
include_once 'cdbh_inc.php';

if (isset($_SESSION['u_id'])) {
    $UserID = $_SESSION['u_id'];
    $UserUID = $_SESSION['u_uid'];


    $sql = "SELECT * FROM computer_science WHERE user_id='$UserID'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../courses.php?not-enrolled");
        exit();
    } 

} else {
    header("Location: ../courses.php?failed-not-logged-in");
    exit();
}


?>
<?php
session_start();
include_once 'dbh_inc.php';

$PostedPassword = $_POST['password'];
$UserPassword = $_SESSION['u_pwd'];
$UserID = $_SESSION['u_id'];

if (empty($PostedPassword)) {
    header("Location: ../profile.php?password-required");
    exit();
}
if ($PostedPassword == $UserPassword) {
    $sql = "DELETE FROM users WHERE user_id='$UserID'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../profile.php?Record-deleted-successfully");
    }
} else {
    header("Location: ../profile.php?invalid-password");
    exit();
}
?>
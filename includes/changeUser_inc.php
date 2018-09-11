<?php
session_start();

include_once 'dbh_inc.php';

$PostedPassword = sha1($_POST['password']);
$UserPassword = $_SESSION['u_pwd'];
$UserID = $_SESSION['u_id'];

if (!empty($_POST['first'])) {
    $fname = $_POST['first'];
} else {
    $fname = $_SESSION['u_first'];
}
if (!empty($_POST['last'])) {
    $lname = $_POST['last'];
} else {
    $lname = $_SESSION['u_last'];
}
if (!empty($_POST['age'])) {
    $age = $_POST['age'];
} else {
    $age = $_SESSION['u_age'];
}
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = $_SESSION['u_email'];
}
if (!empty($_POST['username'])) {
    $uname = $_POST['username'];
} else {
    $uname = $_SESSION['u_uid'];
}


if (empty($PostedPassword)) {
    header("Location: ../profile.php?password-required");
    exit();
} elseif ($PostedPassword == $UserPassword) {
    $sql1 = "UPDATE users SET user_first='$fname' WHERE user_id='$UserID'";
    $sql2 = "UPDATE users SET user_last='$lname' WHERE user_id='$UserID'";
    $sql3 = "UPDATE users SET user_age='$age' WHERE user_id='$UserID'";
    $sql4 = "UPDATE users SET user_email='$email' WHERE user_id='$UserID'";
    $sql5 = "UPDATE users SET user_uid='$uname' WHERE user_id='$UserID'";


    if (mysqli_query($conn, $sql1));
        if (mysqli_query($conn, $sql2));
            if (mysqli_query($conn, $sql3));
                if (mysqli_query($conn, $sql4));
                    if (mysqli_query($conn, $sql5));
                        session_unset();
                        header("Location: ../login.php?change-success");
                        exit();
        

} else {
    echo 'Test';
    header("Location: ../profile.php?invalid-password");
    exit();
}
?>
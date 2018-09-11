<?php

session_start();

if (isset($_POST['submit'])) {

    include 'dbh_inc.php';

    $uid  = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd  = mysqli_real_escape_string($conn, $_POST['pwd']);
    $hashPwd = sha1($pwd);

    // Error Handlers
    // Check if inputs empty
    
    $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../login.php?no-account-found");
        exit();
    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            if ($hashPwd == $row['user_pwd']) {
                $_SESSION['u_id'] = $row['user_id'];
                $_SESSION['u_first'] = $row['user_first'];
                $_SESSION['u_last'] = $row['user_last'];
                $_SESSION['u_age'] = $row['user_age'];
                $_SESSION['u_role'] = $row['user_role'];
                $_SESSION['u_email'] = $row['user_email'];
                $_SESSION['u_uid'] = $row['user_uid'];
                $_SESSION['u_pwd'] = $row['user_pwd'];
                header("Location: ../login.php?login_success");
                exit();
                }
            }
        }

}
header("Location: ../login.php?Username_or_password_incorrect")
?>
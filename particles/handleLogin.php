<?php
include './config.php';

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {

    $useremail = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    $sql = "SELECT * FROM `users1` WHERE `user_email` = '$useremail'";

    $result = mysqli_query($conn, $sql);
    $emailExist = mysqli_num_rows($result);

    // checking email exit or not
    if ($emailExist > 0) {
        $row = mysqli_fetch_assoc($result);
        $loginPassword = $row['user_password'];
        if (password_verify($password, $loginPassword)) {
            session_start();

            $_SESSION['loggedin'] = true;
            $_SESSION['adminId'] = $row['user_id'];
            $_SESSION['adminName'] = $row['user_name'];
            header("Location:../index.php");
            exit();
        }
    }
}
header("Location:../login.php?success=false");
exit();

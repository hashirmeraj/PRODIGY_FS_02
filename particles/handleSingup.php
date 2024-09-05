<?php
include './config.php';

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $password = $_POST['password'];
    $ConfPassword = $_POST['ConfPassword'];

    $sql = "SELECT `user_email`  AS email_count FROM users1 WHERE user_email = '$useremail'";

    $result = mysqli_query($conn, $sql);
    $emailExist = mysqli_num_rows($result);


    // checking email exit or not
    if ($emailExist > 0) {
        $error = 'email';
    } else {

        if ($password == $ConfPassword) {

            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users1` (`user_name`, `user_email`, `user_password`, `date_time`) VALUES ('$username', '$useremail', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            header("Location:../login.php?success=true");
            exit();
        } else {

            $error = 'password';
        }
    }
}
header("Location:../singup.php?success=false&&error=" . urlencode($error));
exit();

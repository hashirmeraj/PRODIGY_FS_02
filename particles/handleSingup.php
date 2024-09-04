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
    if ($emailExist > 0) {
        echo 'Email Already Exist';
    } else {
    }
}

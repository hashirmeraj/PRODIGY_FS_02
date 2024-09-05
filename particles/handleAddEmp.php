<?php
include './config.php';

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $Phone = $_POST['Phone'];
    $street = $_POST['street'];
    $country = $_POST['country'];

    $sql = "SELECT `emp_email`  AS email_count FROM employee_table
 WHERE emp_email = '$useremail'";

    $result = mysqli_query($conn, $sql);
    $emailExist = mysqli_num_rows($result);


    // checking email exit or not
    if ($emailExist > 0) {
        $error = 'exist';
    } else {

        $sql = "INSERT INTO `employee_table` ( `emp_name`, `emp_email`, `emp_country`, `emp_phone`, `emp_street_ad`, `date_time`) VALUES
        ( '$username', '$useremail', '$country', 'phone', '$street', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        header("Location:../addEmp.php?success=true");
        exit();
    }
}
header("Location:../addEmp.php?success=false&&error=" . urlencode($error));
exit();

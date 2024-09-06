<?php
include './config.php';
session_start();

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $empid = $_GET['id'];
    $sql = "DELETE FROM `employee_table` WHERE `emp_id`= '$empid'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:../index.php?delete=true");
        exit();
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'update') {
    $empId = $_GET['id'];

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        $username = $_POST['name'];
        $useremail = $_POST['email'];
        $Phone = $_POST['Phone'];
        $street = $_POST['street'];
        $country = $_POST['country'];

        // Admin details from session (logged-in admin)
        $adminId = $_SESSION['adminId'];    // Admin user_id from session
        $adminName = $_SESSION['adminName']; // Admin user_name from session

        // Set MySQL session variables for the current admin
        $setAdminVarsSql = "SET @current_admin_id = '$adminId', @current_admin_name = '$adminName'";
        mysqli_query($conn, $setAdminVarsSql);

        // Update employee information

        $sql = " UPDATE `employee_table` SET
     
        `emp_name`='$username',
        `emp_email`='$useremail',
        `emp_country`='$country',
        `emp_phone`='$Phone',
        `emp_street_ad`='$street' 
        WHERE `emp_id`= '$empId'";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location:../addEmp.php?update=true");
            exit();
        }
    }
}
header("Location:../addEmp.php?update=false");
exit();

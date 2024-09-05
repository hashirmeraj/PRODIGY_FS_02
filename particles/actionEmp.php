<?php
include './config.php';

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $empid = $_GET['id'];
    $sql = "DELETE FROM `employee_table` WHERE `emp_id`= '$empid'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:../addEmp.php?delete=true");
        exit();
    }
}

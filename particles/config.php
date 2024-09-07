<?php

$servername = 'localhost:3307';
$username = 'root';
$password = '';
$dbname = 'employee_curd';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {

    echo mysqli_connect_error();
}

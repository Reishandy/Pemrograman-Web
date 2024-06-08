<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_crud";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn || mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hard coded username and password for demonstration

    if ($username != "reishandy") {
        header("Location: login.php?error=username");
    } elseif ($password != "haa?") {
        header("Location: login.php?error=password");
    } else {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../dashboard/dashboard.php");
    }
}
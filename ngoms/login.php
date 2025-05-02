<?php
session_start();
ob_start();
include 'include/conn.php';  // Your connection file

if (isset($_POST['username']) AND isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $query = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");

    // Check number of rows
    $count = mysqli_num_rows($query);

    if ($count == 1) {
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
    } else {
        header("location: index.php");
    }
}
ob_end_flush();
?>


<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'ngoms';

// Create connection and select database in one step
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
// DB CONNECT

$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'myschool';

// Connecting to database
$conn = mysqli_connect(
    $hostname,
    $username,
    $password,
    $database
);

// Check connection status
if(!$conn) {
    echo "Failed";
}

?>
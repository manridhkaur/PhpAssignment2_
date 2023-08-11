<?php

session_start();

include("db_connection.php");


$email = $_POST['email'];
$password = $_POST['password_1'];


$sql = "SELECT id FROM users WHERE email = '$email' AND password_1 = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    header("Location: login_success.php");
    exit();
} else {
    
    header("Location: login_success.php");
}

?>
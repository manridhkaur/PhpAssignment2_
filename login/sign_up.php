<?php

session_start();

include("db_connection.php");


$email = $_POST['email'];
$password = $_POST['password_1'];

 $hashedPassword = password_hash($password_1, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (email, password_1) VALUES ('$email', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    // Redirect to login.php after successful sign-up
    header("Location: sign_in.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

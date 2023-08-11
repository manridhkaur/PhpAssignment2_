<?php


session_destroy();


if (!isset($_SESSION['user_id'])) {
    header("Location: sign_in.html");
    exit();
}
// Redirect to the login page
header("Location: sign_in.html"); 
?>

<?php
session_start();

// Dummy credentials for demonstration
$correct_username = 'admin';
$correct_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['username'] = $username;
        header('Location: index.html');
    } else {
        echo 'Invalid username or password';
    }
}
?>

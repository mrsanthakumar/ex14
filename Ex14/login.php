<?php

// Predefined username and password for validation
$validUsername = 'user123';
$validPassword = 'pass123';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve entered username and password
    $enteredUsername = isset($_POST['username']) ? $_POST['username'] : '';
    $enteredPassword = isset($_POST['password']) ? $_POST['password'] : '';

    // Validate username and password
    if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
        echo "Login Successful! Welcome, $validUsername!";
    } else {
        echo "Login Failed. Please check your username and password.";
    }
}

?>

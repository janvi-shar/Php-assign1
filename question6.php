<?php

// Stored credentials
$stored_username = "user123";
$stored_password = "password123";

// Function to check credentials
function check_credentials($username, $password) {
    global $stored_username, $stored_password;
    if ($username === $stored_username && $password === $stored_password) {
        echo "Login successful";
    } else {
        echo "Invalid credentials";
    }
}

// Example usage
$user_input_username = "user122"; // Example: user input for username
$user_input_password = "password124"; // Example: user input for password

check_credentials($user_input_username, $user_input_password);

?>
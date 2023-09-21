<?php
session_start();

// Check if the submitted username and password are correct (you need to implement this part)
if ($_POST['username'] === 'king' && $_POST['password'] === 'asdf') {
    // Set a session variable to indicate that the user is logged in
    $_SESSION['loggedin'] = true;
    
    // Redirect the user to the dashboard page after successful login
    header('Location: dashboard.php');
    exit;
} else {
    echo 'Invalid credentials. Please try again.';
}
?>

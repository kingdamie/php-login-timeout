<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script>
        // Set a timer using JavaScript
        window.onload = function() {
            setTimeout(function() {
                alert("Hello there, you time is up");
                window.location.href = 'login.php'; // Redirect to logout page after timer expires
            }, 10000); // Timer set for 60 seconds (adjust as needed)
        }
    </script>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <!-- Dashboard content goes here -->
    <nav>
        <a href="profile.php">profile</a>
        <a href="profile.php">edit data</a>
        <a href="profile.php">hint</a>
    </nav>
</body>
</html>


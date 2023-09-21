<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Redirect to the login page
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h2>proflie</h2>
</body>
</html>
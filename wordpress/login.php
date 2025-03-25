<?php
// Start session
session_start();

// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if username is provided in the request (POST or GET)
if (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
    // Sanitize the username input to prevent XSS
    $username = htmlspecialchars($_REQUEST['username'], ENT_QUOTES, 'UTF-8');

    // Store the username in session
    $_SESSION['username'] = $username;

    // Check if 'page' is provided in the request and is a valid string
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        // Sanitize and validate the page to avoid potential security risks
        $page = basename($_GET['page']); // Only allow the page part without directory traversal

        // Redirect the user to the specified page
        header("Location: {$page}.php");
        exit(); // Ensure no further code is executed after redirect
    } else {
        // If no page is provided, redirect to a default page (e.g., dashboard)
        header("Location: dashboard.php");
        exit();
    }
} else {
    // If username is not provided, show an error or redirect
    echo "Error: Username is required!";
    exit();
}
?>
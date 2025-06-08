<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logged Out | Skating Polly</title>
    
    <link rel="stylesheet" href="styles/base.css">
    <link rel="stylesheet" href="styles/typography.css">
    <link rel="stylesheet" href="styles/layout.css">
    <link rel="stylesheet" href="styles/components.css">
    <link rel="stylesheet" href="styles/modals.css">
</head>
<body>
    <?php include("includes/header.php"); ?>
    <?php include("includes/modals.php"); ?>
    <p>You’ve been logged out.</p>
    <a href="live.php">Click here to return to the homepage</a>
    
    <script src="javascript/modals.js"></script>
</body>
</html>

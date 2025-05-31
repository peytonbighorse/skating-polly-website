<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logged Out | Skating Polly</title>
    <link rel="stylesheet" href="styles/base.css" />
    <link rel="stylesheet" href="styles/typography.css" />
    <link rel="stylesheet" href="styles/layout.css" />
    <link rel="stylesheet" href="styles/components.css" />
    <link rel="stylesheet" href="styles/modals.css" />
    <link rel="stylesheet" href="styles/contact.css" />
</head>
<body>
    <h1>You’ve been logged out.</h1>
    <a href="../live.php">Click here to return to the homepage</a>
</body>
</html>

<?php
session_start(); 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        $new_user_id = $stmt->insert_id;

        
        $_SESSION['user_id'] = $new_user_id;

        $profile_stmt = $conn->prepare("INSERT INTO user_profiles (user_id) VALUES (?)");
        $profile_stmt->bind_param("i", $new_user_id);
        $profile_stmt->execute();
        $profile_stmt->close();


        header("Location: ../create-profile.php");
        exit;
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
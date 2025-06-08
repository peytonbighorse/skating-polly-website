<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../includes/db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../live.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Collect form data safely
$fav_song = $_POST['fav_song'] ?? null;
$fav_album = $_POST['fav_album'] ?? null;
$fav_video = $_POST['fav_video'] ?? null;
$fav_color = $_POST['fav_color'] ?? null;

$prompt1 = $_POST['prompt1'] ?? null;
$response1 = $_POST['response1'] ?? null;
$prompt2 = $_POST['prompt2'] ?? null;
$response2 = $_POST['response2'] ?? null;
$prompt3 = $_POST['prompt3'] ?? null;
$response3 = $_POST['response3'] ?? null;
$prompt4 = $_POST['prompt4'] ?? null;
$response4 = $_POST['response4'] ?? null;

// Check if user already has a profile
$checkSql = "SELECT user_id FROM user_profiles WHERE user_id = ?";
$checkStmt = $conn->prepare($checkSql);
$checkStmt->bind_param("i", $user_id);
$checkStmt->execute();
$checkStmt->store_result();

if ($checkStmt->num_rows > 0) {
    // Update existing profile
    $stmt = $conn->prepare("
        UPDATE user_profiles
        SET fav_song = ?, fav_album = ?, fav_video = ?, fav_color = ?,
            prompt1 = ?, response1 = ?, prompt2 = ?, response2 = ?,
            prompt3 = ?, response3 = ?, prompt4 = ?, response4 = ?
        WHERE user_id = ?
    ");
    $stmt->bind_param("ssssssssssssi", $fav_song, $fav_album, $fav_video, $fav_color,
                      $prompt1, $response1, $prompt2, $response2,
                      $prompt3, $response3, $prompt4, $response4, $user_id);
} else {
    // Insert new profile
    $stmt = $conn->prepare("
        INSERT INTO user_profiles (
            user_id, fav_song, fav_album, fav_video, fav_color,
            prompt1, response1, prompt2, response2, prompt3, response3, prompt4, response4
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->bind_param("issssssssssss", $user_id, $fav_song, $fav_album, $fav_video, $fav_color,
                      $prompt1, $response1, $prompt2, $response2,
                      $prompt3, $response3, $prompt4, $response4);
}

if ($stmt->execute()) {
    header("Location: ../profile.php");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

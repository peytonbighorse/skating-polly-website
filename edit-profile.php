<?php
session_start();
include 'includes/db_connect.php';

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM user_profiles WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$profile = $result->fetch_assoc();

$fav_song = $profile['fav_song'] ?? '';
$fav_album = $profile['fav_album'] ?? '';
$fav_video = $profile['fav_video'] ?? '';
$fav_color = $profile['fav_color'] ?? '';
$prompt1 = $profile['prompt1'] ?? '';
$response1 = $profile['response1'] ?? '';
$prompt2 = $profile['prompt2'] ?? '';
$response2 = $profile['response2'] ?? '';
$prompt3 = $profile['prompt3'] ?? '';
$response3 = $profile['response3'] ?? '';
$prompt4 = $profile['prompt4'] ?? '';
$response4 = $profile['response4'] ?? '';
$mode = 'edit';

include 'includes/profile-form.php';
?>

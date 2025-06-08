<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once("db_connect.php"); 
$favColor = "#FFFCF5";

if (isset($_SESSION['user_id'])) {
    $stmt = $conn->prepare("SELECT fav_color FROM user_profiles WHERE user_id = ?");
$stmt->bind_param("i", $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();
    if ($result && !empty($result['fav_color'])) {
        $favColor = $result['fav_color'];
    }
}
?>
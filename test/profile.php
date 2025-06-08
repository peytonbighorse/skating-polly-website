<?php
session_start();
require_once '../test/includes/db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: live.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Get profile data
$sql = "SELECT u.username, u.icon AS user_icon, p.* 
        FROM users u 
        LEFT JOIN user_profiles p ON u.id = p.user_id 
        WHERE u.id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    echo "<p>No profile found. <a href='create-profile.php'>Create one here</a>.</p>";
    exit();
}

$profileUserId = $data['user_id'];


$containerClass = strtolower($data['username']) . ' profile-container';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($data['username']); ?> Profile | Skating Polly</title>
  <link rel="stylesheet" href="/test/styles/base.css">
  <link rel="stylesheet" href="/test/styles/typography.css">
  <link rel="stylesheet" href="/test/styles/layout.css">
  <link rel="stylesheet" href="/test/styles/components.css">
  <link rel="stylesheet" href="/test/styles/profile.css">
  <style>
  :root {
    --user-fav-color: <?php echo htmlspecialchars($data['fav_color'] ?? '#000'); ?>;
  }
</style>

</head>
<body >

<?php include("../test/includes/header.php"); ?>

<?php if (!$data): ?>
  <p>No profile data found. <a href="create-profile.php">Create your profile</a>.</p>
<?php else: ?>
<div class="profile-container">
  <div class="profile-left">
    <img src="../test/assets/Images/pmb-portrait.png" alt="drawing of peyton with her dog" class="profile-icon" />
    <div class="quiz-container">
      <h4 class="profile-section-head">Quizzes</h4>
      <ul class="quiz-field-container profile-field-container">
        <li class="profile-field">Which Skating Polly member are you?</li>
        <li class="profile-field">Find out your chaos level</li>
        <li class="profile-field">Build your perfect day in the van to reveal your tour persona</li>
      </ul>
    </div>
  </div>

  <div class="profile-right">
    <div class="profile-right-heading">
      <div class="heading-left">
        <span class="profile-name"><?php echo htmlspecialchars($data['username'] ?? ''); ?></span>
      </div>
      <div class="heading-right">
        <div class="quiz-result" id="chaos-level">Chaos Level: 10</div>
        <div class="quiz-result" id="member-class">Class: Kelli</div>
        <div class="quiz-result" id="tour-persona">Tour Persona: The Navigator</div>
      </div>
    </div>

    <!-- Favorites -->
    <div class="about-me-container">
      <h4 class="profile-section-head">About Me</h4>
      <div class="about-me-fields-container">
        <div class="about-me-left">
          <ul class="profile-field-container">
            <li class="profile-field">Favorite SP Song: <span><?php echo htmlspecialchars($data['fav_song'] ?? ''); ?></span></li>
            <li class="profile-field">Favorite SP Video: <span><?php echo htmlspecialchars($data['fav_video'] ?? ''); ?></span></li>
            <li class="profile-field">Favorite SP Album: <span><?php echo htmlspecialchars($data['fav_album'] ?? ''); ?></span></li>
            <li class="profile-field">
  Favorite Color:
  <span style="display: inline-block; background-color: <?php echo htmlspecialchars($data['fav_color'] ?? ''); ?>; border: 1px solid #000; vertical-align: middle;"><?php echo htmlspecialchars($data['fav_color'] ?? ''); ?></span>
</li>
          </ul>
        </div>
        <div class="about-me-right">
          <ul class="profile-field-container">
            <li class="profile-field"><?php echo htmlspecialchars($data['prompt1'] ?? 'Prompt 1'); ?>:
              <span><?php echo htmlspecialchars($data['response1'] ?? ''); ?></span>
            </li>
            <li class="profile-field"><?php echo htmlspecialchars($data['prompt2'] ?? 'Prompt 2'); ?>:
              <span><?php echo htmlspecialchars($data['response2'] ?? ''); ?></span>
            </li>
            <li class="profile-field"><?php echo htmlspecialchars($data['prompt3'] ?? 'Prompt 3'); ?>:
              <span><?php echo htmlspecialchars($data['response3'] ?? ''); ?></span>
            </li>
            <li class="profile-field"><?php echo htmlspecialchars($data['prompt4'] ?? 'Prompt 4'); ?>:
              <span><?php echo htmlspecialchars($data['response4'] ?? ''); ?></span>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Collections (placeholder) -->
    <div class="collections-container">
      <h4 class="profile-section-head">Collections</h4>
      <div class="about-me-fields-container">
        <div class="about-me-left">
          <ul class="profile-field-container">
            <li class="profile-field">Keep looking to find this collectible!</li>
            <li class="profile-field">Keep looking to find this collectible!</li>
            <li class="profile-field">Keep looking to find this collectible!</li>
            <li class="profile-field">Keep looking to find this collectible!</li>
          </ul>
        </div>
        <div class="about-me-right">
          <ul class="profile-field-container">
            <li class="profile-field">Keep looking to find this collectible!</li>
            <li class="profile-field">Keep looking to find this collectible!</li>
            <li class="profile-field">Keep looking to find this collectible!</li>
            <li class="profile-field">Keep looking to find this collectible!</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $profileUserId): ?>
  <button class="edit-profile-button" onclick="window.location.href='edit-profile.php?user_id=<?= $profileUserId ?>'">Edit Profile</button>
<?php endif; ?>
<?php endif; ?>

<script src="../test/javascript/profile-buttons.js"></script>
</body>
</html>



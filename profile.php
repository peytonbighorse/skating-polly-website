<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['user_id'])) {
    header("Location: live.php");
    exit;
}

include 'includes/db_connect.php';

$user_id = $_SESSION['id'];
$stmt = $conn->prepare("
    SELECT username
    FROM users
    WHERE id = ?
");
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("
    SELECT fav_song, fav_album, fav_video, fav_color, icon,
           prompt1, response1, prompt2, response2, prompt3, response3, prompt4, response4
    FROM user_profiles
    WHERE user_id = ?
");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$profile = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile | Skating Polly</title>
  <link rel="stylesheet" href="styles/base.css" />
  <link rel="stylesheet" href="styles/typography.css" />
  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="styles/components.css" />
  <link rel="stylesheet" href="styles/profile.css" />
</head>
<body>
<?php include("includes/header.php"); ?>

<?php if (!$profile): ?>
  <p>No profile data found. <a href="create-profile.php">Create your profile</a>.</p>
<?php else: ?>
<div class="profile-container">
  <div class="profile-left">
    <img src="assets/Images/pmb-portrait.png" alt="drawing of peyton with her dog" class="profile-icon" />
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
        <span class="profile-name"><?php echo htmlspecialchars($profile['username'] ?? ''); ?></span>
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
            <li class="profile-field">Favorite SP Song: <span><?php echo htmlspecialchars($profile['fav_song'] ?? ''); ?></span></li>
            <li class="profile-field">Favorite SP Video: <span><?php echo htmlspecialchars($profile['fav_video'] ?? ''); ?></span></li>
            <li class="profile-field">Favorite SP Album: <span><?php echo htmlspecialchars($profile['fav_album'] ?? ''); ?></span></li>
            <li class="profile-field">Favorite Color: <span><?php echo htmlspecialchars($profile['fav_color'] ?? ''); ?></span></li>
          </ul>
        </div>
        <div class="about-me-right">
          <ul class="profile-field-container">
            <li class="profile-field"><?php echo htmlspecialchars($profile['prompt1'] ?? 'Prompt 1'); ?>:
              <span><?php echo htmlspecialchars($profile['response1'] ?? ''); ?></span>
            </li>
            <li class="profile-field"><?php echo htmlspecialchars($profile['prompt2'] ?? 'Prompt 2'); ?>:
              <span><?php echo htmlspecialchars($profile['response2'] ?? ''); ?></span>
            </li>
            <li class="profile-field"><?php echo htmlspecialchars($profile['prompt3'] ?? 'Prompt 3'); ?>:
              <span><?php echo htmlspecialchars($profile['response3'] ?? ''); ?></span>
            </li>
            <li class="profile-field"><?php echo htmlspecialchars($profile['prompt4'] ?? 'Prompt 4'); ?>:
              <span><?php echo htmlspecialchars($profile['response4'] ?? ''); ?></span>
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
<?php endif; ?>

<script src="javascript/profile-buttons.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/base.css">
    <link rel="stylesheet" href="../styles/typography.css">
    <link rel="stylesheet" href="../styles/layout.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/modals.css"> 
     <style>
      .sp-heading {
        color: <?= htmlspecialchars($favColor) ?>;
      }
    </style>
</head>
<body style="--fav-color: <?= htmlspecialchars($favColor) ?>;">
    <div class="register-login-buttons">
      <?php if (isset($_SESSION['user_id'])): ?>
      <button class="profile-button" onclick="window.location.href='/test/profile.php'">My Profile</button>
      <button class="logout-button" onclick="window.location.href='/test/logout.php'">Logout</button>
      <?php include("music-player.php"); ?>
      <?php else: ?>
      <button class="register-button">Register</button>
      <button class="login-button">Login</button>
      <?php endif; ?>
    </div>
    <div class="heading">
      <h1 class="sp-heading">SKATING POLLY</h1>
      <div class="social-links header-links">
        <a href="https://www.instagram.com/skatingpolly" target="_blank"
          ><img src="assets/Socials/ig-button.png" alt="instagram link"
        /></a>
        <a href="https://www.youtube.com/skatingpolly" target="_blank"
          ><img src="assets/Socials/youtube-button.png" alt="youtube link"
        /></a>
        <a href="https://skatingpollyofficial.bandcamp.com/" target="_blank"
          ><img src="assets/Socials/bandcamp-button.png" alt="bancamp link"
        /></a>
        <a
          href="https://music.apple.com/us/artist/skating-polly/433876026"
          target="_blank"
          ><img
            src="assets/Socials/apple-music-button.png"
            alt="apple music link"
        /></a>
        <a
          href="https://open.spotify.com/artist/1ST6hERy8rGdwUaNAZxfG9"
          target="_blank"
          ><img src="assets/Socials/spotify-button.png" alt="spotify link"
        /></a>
      </div>
      <div class="page-links header-links">
        <a href="live.php"
          ><img
            src="assets/Page-Links/live-button.png"
            alt="live shows button"
            class="live-button"
        /></a>

        <a href="about.php"
          ><img
            src="assets/Page-Links/about-button.png"
            alt="about button"
            class="about-button"
        /></a>

        <a
          href="https://patreon.com/skatingpolly?utm_medium=unknown&utm_source=join_link&utm_campaign=creatorshare_creator&utm_content=copyLink"
          target="_blank"
          ><img
            src="assets/Page-Links/patreon-button.png"
            alt="link to patreon"
            class="fanclub-button"
        /></a>
        <a
          href="https://skating-polly.myshopify.com/collections/all"
          target="_blank"
          ><img
            src="assets/Page-Links/shop-button.png"
            alt="link to shopify"
            class="shop-button"
        /></a>
        <a href="contact.php"
          ><img
            src="assets/Page-Links/contact-button.png"
            alt="contact page button"
            class="contact-button"
        /></a>
        <a
          href="https://www.elcaminomedia.com/store?category=Skating+Polly"
          target="_blank"
          ><img
            src="assets/Page-Links/ccl-button.png"
            alt="link to purchase chaos county line"
            class="ccl-button"
        /></a>
      </div>
    </div>
    <hr />
</body>
</html>
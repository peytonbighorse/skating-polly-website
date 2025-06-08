<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test/styles/footer.css" />
    <title>Footer</title>
</head>
<body style="--fav-color: <?= htmlspecialchars($favColor) ?>;">
    <?php include 'includes/get-user-color.php'; ?>
    <footer>
      <hr />
      <h6><a href="terms-and-privacy.php" class="terms-link">Terms & Privacy</a></h6>
    </footer>
</body>
</html>
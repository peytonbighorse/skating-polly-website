<?php

$fav_song = $fav_song ?? '';
$fav_album = $fav_album ?? '';
$fav_video = $fav_video ?? '';
$fav_color = $fav_color ?? '';
$prompt1 = $prompt1 ?? '';
$response1 = $response1 ?? '';
$prompt2 = $prompt2 ?? '';
$response2 = $response2 ?? '';
$prompt3 = $prompt3 ?? '';
$response3 = $response3 ?? '';
$prompt4 = $prompt4 ?? '';
$response4 = $response4 ?? '';
$mode = $mode ?? 'create'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile | Skating Polly</title>
    <link rel="stylesheet" href="../test/styles/base.css">
    <link rel="stylesheet" href="../test/styles/typography.css">
    <link rel="stylesheet" href="../test/styles/layout.css">
    <link rel="stylesheet" href="../test/styles/components.css"> 
    <link rel="stylesheet" href="../test/styles/profile.css"> 
</head>
<body>
    <?php include("header.php"); ?>
    <?php include "profile-options.php"; ?>
    <h2><?php echo ($mode === 'edit') ? 'Edit Your Profile' : 'Create Your Profile'; ?></h2>
        <form action="../test/backend/save-profile.php" method="POST" class="create-profile-form">
            <!--SP Song-->
            <div class="form-group">
            <label for="fav_song">Favorite SP Song:</label>
            <select name="fav_song" id="fav_song" required>
                <option value="">-- Select One --</option>
                <?php foreach ($fav_songs as $song): ?>
                    <option value="<?php echo htmlspecialchars($song); ?>">
                    <?php echo htmlspecialchars($song); ?>
                </option>
                <?php endforeach; ?>
            </select>
            </div>
            <!--SP Album-->
            <div class="form-group">
            <label for="fav_album">Favorite SP Album:</label>
            <select name="fav_album" id="fav_album" required>
                <option value="">-- Select One --</option>
                <?php foreach ($fav_albums as $album): ?>
                    <option value="<?php echo htmlspecialchars($album); ?>">
                    <?php echo htmlspecialchars($album); ?>
                </option>
                <?php endforeach; ?>
            </select>
            </div>
            <!--SP Video-->
            <div class="form-group">
            <label for="fav_video">Favorite SP Video:</label>
            <select name="fav_video" id="fav_video" required>
                <option value="">-- Select One --</option>
                <?php foreach ($fav_videos as $video): ?>
                    <option value="<?php echo htmlspecialchars($video); ?>">
                    <?php echo htmlspecialchars($video); ?>
                </option>
                <?php endforeach; ?>
            </select>
            </div>
            <!--Fav color-->
            <div class="form-group">
            <label for="fav_color">Favorite Color:</label>
            <input type="color" id="fav_color" name="fav_color" value="#ff0000">
            </div>
            <!--Optional prompt 1-->
            <div class="form-group">
            <label for="prompt1">Choose a prompt:</label>
            <select name="prompt1" id="prompt1">
                <option value="">-- Select One --</option>
                <?php foreach ($profile_prompts as $prompt): ?>
                <option value="<?php echo htmlspecialchars($prompt); ?>"><?php echo htmlspecialchars($prompt); ?></option>
                <?php endforeach; ?>
            </select>
            <br/>
            <label for="response1">Your answer:</label>
            <input type="text" name="response1" id="response1" placeholder="Write your answer here">
            </div>
            <!--Optional prompt 2-->
            <div class="form-group">
            <label for="prompt2">Choose a prompt:</label>
            <select name="prompt2" id="prompt2">
                <option value="">-- Select One --</option>
                <?php foreach ($profile_prompts as $prompt): ?>
                <option value="<?php echo htmlspecialchars($prompt); ?>"><?php echo htmlspecialchars($prompt
            ); ?></option>
                <?php endforeach; ?>
            </select>
            <br/>
            <label for="response2">Your answer:</label>
            <input type="text" name="response2" id="response2" placeholder="Write your answer here">
            </div>
            <!--Optional prompt 3-->
            <div class="form-group">
            <label for="prompt3">Choose a prompt:</label>
            <select name="prompt3" id="prompt3">
                <option value="">-- Select One --</option>
                <?php foreach ($profile_prompts as $prompt): ?>
                <option value="<?php echo htmlspecialchars($prompt); ?>"><?php echo htmlspecialchars($prompt); ?></option>
                <?php endforeach; ?>
            </select>
            <br/>
            <label for="response3">Your answer:</label>
            <input type="text" name="response3" id="response3" placeholder="Write your answer here">
            </div>
            <!--Optional prompt 4-->
            <div class="form-group">
            <label for="prompt4">Choose a prompt:</label>
            <select name="prompt4" id="prompt4">
                <option value="">-- Select One --</option>
                <?php foreach ($profile_prompts as $prompt): ?>
                <option value="<?php echo htmlspecialchars($prompt); ?>"><?php echo htmlspecialchars($prompt); ?></option>
                <?php endforeach; ?>
            </select>
            <br/>
            <label for="response4">Your answer:</label>
            <input type="text" name="response4" id="response4" placeholder="Write your answer here">
            </div>
            <button type="submit">Save</button>
        </form>
    
</body>
</html>

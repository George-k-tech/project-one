<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container">
            <form action="processregister.php" method="post">
                <h1>Change Password</h1>
                <input type="password" name="current-password" id="current-password" placeholder="Current Password">
        
                <input type="password" name="new-password" id="new-password" placeholder="New Password">
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm New Password">
        
                <button type="submit"><input type="submit" name="change-password" value="Change Password"></button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Change Password</h1>
                    <p>Don't want to update password?</p>
                    <button class="sm-btn"><a href="index.php">Go Back</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
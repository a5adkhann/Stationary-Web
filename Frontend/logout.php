<?php
session_start();
session_unset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Stationary Web</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="logout-section">
        <p>You have signed out from your current session. All session data has been securely stored and removed from public view, preventing unauthorized access to your information .</p>

        <p>To complete the sign out process, it is recommended that you please close your Browser Window.</p>

        <p>Click <a style="color: #8C2523; text-decoration: none;" href="./index.php">Here</a> to proceed to Web</p>
    </div>
</body>
</html>
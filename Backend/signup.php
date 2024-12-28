<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Stationary Web</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>
        <form action="logics.php" class="signup-form-parent" method="POST">
            <h1 class="signin-title">Sign Up</h1>
            <div id="form-divider">
                <label>Name</label>
                <input type="text" id="signupField" name="user_name" required placeholder="Enter your name">
            </div>

            <div id="form-divider">
                <label>Email</label>
                <input type="email" id="signupField" name="user_email" required placeholder="Enter your email">
            </div>

            <div id="form-divider">
                <label>Password</label>
                <input type="password" id="signupField" name="user_password" required placeholder="Enter your password">
            </div>

            <div id="form-divider">
                <label>Confirm Password</label>
                <input type="password" id="signupField" name="user_cpassword" required placeholder="Enter your password again">
            </div>

            <div id="form-divider">
                <button id="signupBtn" type="submit" name="signup">Sign Up</button>
            </div>

            <div id="form-divider">
                <p>Already have an Account? <a style="color: #BE2622; text-decoration: none;" href="./signin.php">Sign In</a></p>
            </div>

            <div id="form-divider">
                <p>Proceed to: <a style="color: #FFF; text-decoration: none;" href="../Frontend/index.php">Stationary Web</a></p>
            </div>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>
        <form class="signin-form-parent">
            <h1 class="signin-title">Sign in</h1>
            <div id="form-divider">
                <label>Email Address</label>
                <input type="email" id="signinField" name="email" required placeholder="Enter your email">
            </div>

            <div id="form-divider">
                <label>Password</label>
                <input type="password" id="signinField" name="password" required placeholder="Enter your password">
            </div>

            <div id="form-divider">
                <button id="signinBtn" type="submit">Sign In</button>
            </div>

            <div id="form-divider">
                <p>Don't have an Account? <a style="color: #BE2622; text-decoration: none;" href="./signup.php">Sign Up</a></p>
            </div>

            <div id="form-divider">
                <p>Proceed to: <a style="color: #FFF; text-decoration: none;" href="../Frontend/index.php">Stationary Web</a></p>
            </div>
        </form>
    </div>
</body>
</html>

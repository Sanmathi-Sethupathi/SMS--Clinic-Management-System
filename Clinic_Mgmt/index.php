<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Clinic - Login & Signup</title>
    <link rel="stylesheet" href="./css/style.css">
	<script src="js/script.js"></script>
</head>
<body>
    <div id="particles-js"></div>
    <div class="card">
        <div class="toggle-container">
            <h2 id="login-title" class="active">Login Form</h2>
            <h2 id="signup-title">Signup Form</h2>
        </div>

       <!-- Login Form -->
<div id="login-form" class="form-container active">
    <div class="login_register">
        <a href="#" class="login active">Login</a>
        <a href="#" id="switch-signup">Signup</a>
    </div>
    <form class="form" action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" class="text" required>
        <input type="password" name="password" placeholder="Password" class="pass" required>
        <button type="submit" class="login_btn">Login</button>
    </form>

    <a href="#" class="fp">Forgot password?</a>
   <br>
</div>

<!-- Signup Form -->
<div id="signup-form" class="form-container">
    <div class="login_register">
        <a href="#" id="switch-login">Login</a>
        <a href="#" class="register active">Signup</a>
    </div>
    <form class="form" action="signup.php" method="POST">
        <input type="text" name="username" placeholder="Username" class="username" required>
        <input type="password" name="password" placeholder="Password" class="pass" required>
        <input type="password" name="retype_password" placeholder="Retype Password" class="repass" required>
        <select name="role" class="role" required>
            <option value="">Select Role</option>
            <option value="admin">Admin</option>
            <option value="patient">Patient</option>
        </select>
        <button type="submit" class="signup_btn">Signup</button>
    </form>

    
</div>

    </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/index.js"></script>
	<script src="js/script.js"></script>
</body>
</html>

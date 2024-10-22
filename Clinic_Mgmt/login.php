<?php
require 'db.php'; // Include the database connection

session_start(); // Start the session to store user data

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // Fetch user
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Verify password
    if ($user && password_verify($password, $user['password'])) {
        // Store user info in session
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        
        // Redirect based on role
        if ($user['role'] === 'admin') {
            header("Location: ./doctor/check_bookings.php");
            exit();
        } else if ($user['role'] === 'patient') {
            header("Location: home.php");
            exit();
        }
    } else {
        echo "Invalid username or password.";
    }
}
?>

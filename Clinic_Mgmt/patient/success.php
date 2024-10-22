<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Successful</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #A4D7E1; /* Pastel blue background */
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    padding: 40px;
    text-align: center;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.success-icon {
    font-size: 5rem;
    color:#001F3F; /* Green color for success icon */
}

p {
    font-size: 1.2rem;
    margin: 20px 0;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1rem;
    color: white;
    background-color: #001F3F; /* Green button color */
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #333; /* Darker green on hover */
}


</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="success-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1>Booking Successful!</h1>
        <p>Thank you for your reservation. Your booking has been confirmed.</p>
        <a href="../home.php" class="btn">Back to Home</a>

    </div>
</body>
</html>

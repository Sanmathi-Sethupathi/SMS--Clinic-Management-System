<?php
// Database configuration
$host = 'localhost'; // Database host
$db = 'clinic_db'; // Database name
$user = 'root'; // Database username
$pass = ''; // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
        $patient_name = $_POST['patient_name'];
        $doctor_name = $_POST['doctor_name'];
        $phone = $_POST['phone'];
        $appointment_date = $_POST['appointment_date'];
        $appointment_time = $_POST['appointment_time'];
        $area = $_POST['area'];
        $category=$_POST['category'];

        // Prepare SQL statement
        $sql = "INSERT INTO doctor_patient_bookings (patient_name, doctor_name, phone, appointment_date, appointment_time, area,category) 
                VALUES (:patient_name, :doctor_name, :phone, :appointment_date, :appointment_time, :area,:category)";
        $stmt = $pdo->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':patient_name', $patient_name);
        $stmt->bindParam(':doctor_name', $doctor_name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':appointment_date', $appointment_date);
        $stmt->bindParam(':appointment_time', $appointment_time);
        $stmt->bindParam(':area', $area);
        $stmt->bindParam(':category', $category);
        
        // Execute the statement
        if ($stmt->execute()) {
           
            header('Location:success.php');
        } else {
            echo "Failed to book the appointment.";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>

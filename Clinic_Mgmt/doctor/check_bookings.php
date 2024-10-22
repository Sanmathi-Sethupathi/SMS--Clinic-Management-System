<?php
require '../db.php'; // Include the database connection

session_start(); // Start the session to store user data

// Check if user is logged in and is a doctor
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
// Handle logout request
if (isset($_POST['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: ../index.php"); // Redirect to login page
    exit();
}

// Database connection
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "clinic_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle status update request
if (isset($_POST['update_status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $update_sql = "UPDATE doctor_patient_bookings SET status = '$status' WHERE id = $id";
    
    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Status updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating status: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Doctor-Patient Bookings</title>
    <link rel="stylesheet" href="../css/mybookings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Additional styles for the logout button */
        .logout-btn {
            float: right;
            margin: 20px;
            padding: 10px 15px;
            background-color: #dc3545; /* Bootstrap danger color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout-btn:hover {
            background-color: #c82333; /* Darker shade for hover effect */
        }
    </style>
</head>
<body>
<form method="POST">
        <button type="submit" name="logout" class="logout-btn">Logout</button>
    </form>
    
<div class="container">
    <h2>Your Doctor-Patient Bookings</h2>
    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="width:100%">
                    <thead style="width:100%">
                        <tr>
                        <th>ID</th>
                    <th>Patient Name</th>
                    
                    <th>Phone</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Area</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Update Status</th>
                    <th>Options</th>
                    <th>   </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch bookings for the logged-in doctor
                        $doctor_name = $_SESSION['username'];
                        $sql = "SELECT * FROM doctor_patient_bookings WHERE doctor_name = '$doctor_name'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['id']}</td>
                                <td>{$row['patient_name']}</td>
                                <td>{$row['doctor_name']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['appointment_date']}</td>
                                <td>{$row['appointment_time']}</td>
                                <td>{$row['area']}</td>
                                <td>{$row['category']}</td>
                                <td>{$row['status']}</td>
                                        
                                        <form method='POST'>
                                            <td>
                                                <input type='hidden' name='id' value='{$row['id']}'>
                                                <select name='status'>
                                                    <option value='Confirmed' " . ($row['status'] == 'Confirmed' ? 'selected' : '') . ">Confirmed</option>
                                                    <option value='Pending' " . ($row['status'] == 'Pending' ? 'selected' : '') . ">Pending</option>
                                                    <option value='Cancelled' " . ($row['status'] == 'Cancelled' ? 'selected' : '') . ">Cancelled</option>
                                                </select>
                                            </td>
                                            <td><button type='submit' name='update_status' class='btn btn-success'>Update</button></td>
                                        </form>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='9' class='text-center'>No bookings found.</td></tr>";
                        }

                        // Function for styling payment status
                        function getPaymentStatusClass($status) {
                            switch ($status) {
                                case 'Paid':
                                    return 'btn-success';
                                case 'Pending':
                                    return 'btn-warning';
                                case 'Overdue':
                                    return 'btn-danger';
                                default:
                                    return '';
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9" class="text-center">Load more bookings</td>
                        </tr>
                    </tfoot>
                </table>
            </div><!--end of .table-responsive-->
        </div>
    </div>
</div>
</body>
</html>

<?php
$conn->close();
?>

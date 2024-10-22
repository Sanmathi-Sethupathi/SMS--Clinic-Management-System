<?php
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

// Handle deletion request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM doctor_patient_bookings WHERE id = $delete_id";
    
    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('Appointment deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error deleting appointment: " . $conn->error . "');</script>";
    }
}

if (isset($_POST['back'])) {
    header("Location: home.php"); // Redirect to home page
    exit();
}

// Handle update request
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $patient_name = $_POST['patient_name'];
    $doctor_name = $_POST['doctor_name'];
    $phone = $_POST['phone'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $area = $_POST['area'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    $update_sql = "UPDATE doctor_patient_bookings 
                   SET patient_name = '$patient_name', doctor_name = '$doctor_name', phone = '$phone',
                       appointment_date = '$appointment_date', appointment_time = '$appointment_time', 
                       area = '$area', category = '$category', status = '$status' 
                   WHERE id = $id";
    
    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Appointment updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating appointment: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Doctor-Patient Bookings</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,400&display=swap');

        :root{
    --primary: #1f2e88 ;
    --secondary: #2f66d4 ;
    --hover: #a2d9f5;
    --black: #333;
    --white: #fff;
    --light-color: #666;
    --light-bg: #eee;
    --border:.2rem solid rgba(0,0,0,0.1);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,0.1);
  }
  *{
    font-family: 'Poppins', sans-serif;
    margin:0;
    padding: 0;
    box-sizing:border-box;
    text-decoration: none;
    text-transform: capitalize;
    outline: none;
    border: none;
    transition: 0.2s linear;
  }

  html{
    font-size: 62.2%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
  }

   header{
    position: fixed;
    display: flex;
    align-items: center;
    justify-content: space-between;
    top:0;
    left: 0;
    right: 0;
    padding: 2rem 9%;
    background: var(--white);
    box-shadow: var(--box-shadow);
    z-index: 1000;
  }

  .header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: var(--black);
  }

  .header .logo i{
    color: var(--primary);
    padding-right: .5rem;
  }

  .header .navbar a{
    font-size: 1.7rem;
    color: var(--black);
    margin: 0 1rem;
  }

  .header .navbar a:hover{
    color: var(--primary);
  }

  .header .btn{
    margin-top: 0;
  }

  #menu-btn{
    font-size: 2.5rem;
    cursor: pointer;
    color: var(--black);
    margin-left: 1.7rem;
    display: none;
  }

  #menu-btn:hover{
    color: var(--primary);
  }
  .btn{
    margin-top: 1rem;
    display: inline-block;
    padding: 1rem 3rem;
    border-radius: .5rem;
    background: var(--primary);
    font-size: 1.7rem;
    color: var(--white);
    cursor: pointer;
  }

  .btn:hover{
    background: var(--secondary);
  }
  /* end header */

        

        .container {
            max-width: 1200px;
            margin: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }



        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            font-size:1.5rem;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .edit-icon, .fa-pencil, .fa-trash {
            cursor: pointer;
            margin: 0 5px;
        }

        .fa-pencil {
            color: #007bff;
        }

        .fa-trash {
            color: #dc3545;
        }

        .edit-form {
            display: none;
            background-color: #f9f9f9;
            padding: 10px;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-success:hover {
            background-color: #218838; /* Darker green for hover */
        }

        input[type="text"], input[type="date"], input[type="time"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Style for the edit button */
        .edit-button {
            background-color: #007bff; /* Bootstrap primary color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 6px 10px;
        }
    </style>
</head>
<body>
    <header class="header">
  <!-- Logo -->
  <a href="#" class="logo">
    <i class="fas fa-tooth"></i>
    DentistCare
  </a>

  <!-- Navbar -->
  <nav class="navbar">
    <a href="../home.php">Home</a>
    <a href="../home.php">About Us</a>
    <a href="../home.php">Services</a>
    <a href="../home.php">Our Team</a>
    <a href="patient/mybookings.php">My Bookings</a>
    <a href="../home.php">Blog</a>
  </nav>

  <!-- Appointment button -->
  <a href="index.php" class="btn">Log out</a>
  <div id="menu-btn" class="fas fa-bars"></div>
</header>

<br><br><br><br><br><br><br>

<div class="container">
    <h2>Your Doctor-Patient Bookings</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Phone</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Area</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM doctor_patient_bookings";
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
                                <td><a href='#' class='edit-icon' data-id='{$row['id']}'><i class='fa fa-pencil'></i></a></td>
                                <td><a href='?delete_id={$row['id']}' onclick='return confirm(\"Are you sure you want to delete this appointment?\");'><i class='fa fa-trash'></i></a></td>
                              </tr>";

                        // Inline form for editing
                        echo "<tr class='edit-form' id='edit-form-{$row['id']}'>
                                <form method='POST'>
                                    <td><input type='hidden' name='id' value='{$row['id']}' />{$row['id']}</td>
                                    <td><input type='text' name='patient_name' value='{$row['patient_name']}' required></td>
                                    <td><input type='text' name='doctor_name' value='{$row['doctor_name']}' required></td>
                                    <td><input type='number' name='phone' value='{$row['phone']}' required></td>
                                    <td><input type='date' name='appointment_date' value='{$row['appointment_date']}' required></td>
                                    <td><input type='time' name='appointment_time' value='{$row['appointment_time']}' required></td>
                                    <td><input type='text' name='area' value='{$row['area']}' required></td>
                                    <td><input type='text' name='category' value='{$row['category']}' required></td>
                                    <td><input type='text' name='status' value='{$row['status']}' required disabled></td>
                                    <td colspan='2'><button type='submit' name='update' class='btn-success'>Update</button></td>
                                </form>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='11'>No appointments found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    document.querySelectorAll('.edit-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const editForm = document.getElementById(`edit-form-${id}`);
            editForm.style.display = editForm.style.display === 'table-row' ? 'none' : 'table-row';
        });
    }); 
</script>
</body>
</html>

<?php
session_start();
require_once('hospitaldb_connect.php');

if (!isset($_SESSION['d_name']) && !isset($_SESSION['d_email'])) {
    header("Location: doctorsigninpage.php");
    exit;
}

if (isset($_GET['patient_name'])) {
    $patient_name = $_GET['patient_name'];
    $appointments_query = "SELECT a.*, p.name AS patient_name FROM appointments a INNER JOIN patients p ON a.patient_email = p.email WHERE p.name = '$patient_name' ORDER BY a.appointment_date asc";
    $appointments_result = mysqli_query($connection, $appointments_query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Patient History </title>

    <style>
            table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color:#6e7574;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #cbd0c2;
        }
        tr:nth-child(odd) {
            background-color: #cddab6;
        }
        button  {
            background-color: #0b5f82;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }

        button:hover {
            background-color: #194812;
        }

        .content-btn {
        background-color: #97d989;
        color: #fff;
        font-size: 16px;
        }

    </style>    
</head>
<body>
    <h1> 📅 Appointment History for Patient: <?php echo $patient_name; ?></h1>
    <?php
    if (isset($appointments_result)) {
        if (mysqli_num_rows($appointments_result) > 0) {
            echo '<table border="1">
                <tr>
                    <th>Patient Name</th>
                    <th>Appointment Date</th>
                    <th>Prescription</th>
                    <th>Appointment Status</th>
                </tr>';
            while ($row = mysqli_fetch_assoc($appointments_result)) {
                echo "<tr>";
                echo "<td>" . $row['patient_name'] . "</td>";
                echo "<td>" . $row['appointment_date'] . "</td>";
                echo "<td>" . $row['prescription'] . "</td>";
                echo "<td>" . $row['appointment_status'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No appointment history found for $patient_name.";
        }
    }
    ?>
    <br>
    
    <button type="button" class = "content-btn" > <a href="doctordashboard.php">Go Back to Dashboard</a> </button>
</body>
</html>
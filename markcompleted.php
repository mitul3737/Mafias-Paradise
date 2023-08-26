<?php
session_start();
require_once('hospitaldb_connect.php');

if (!isset($_SESSION['d_name']) && !isset($_SESSION['d_email'])) {
    header("Location: doctorsigninpage.php");
    exit;
}

if (isset($_GET['appointment_id'])) {
    $appointment_id = $_GET['appointment_id'];
    $update_query = "UPDATE appointments SET appointment_status = 'completed', prescription = 'prescribed' WHERE doctor_email = '{$_SESSION['d_email']}' AND patient_email = '$appointment_id'";

    if (mysqli_query($connection, $update_query)) {
        header("Location: doctordashboard.php");
        exit;
    } else {
        echo "Error marking appointment as completed: " . mysqli_error($connection);
    }
}
?>
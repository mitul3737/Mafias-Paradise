<?php
session_start();
require_once('hospitaldb_connect.php');

if (!isset($_SESSION['admin_id'])) {
    header("Location: adminsigninpage.php");
    exit;
}

if (isset($_POST['patient_email']) && isset($_POST['doctor_email']) && isset($_POST['appointment_date']) && isset($_POST['slot_number'])) {
    $patient_email = $_POST['patient_email'];
    $doctor_email = $_POST['doctor_email'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_type = "Regular";
    $appointment_status = "pending";
    $prescription = "pending";
    $slot_num = $_POST['slot_number'];
    $insert_query = "INSERT INTO appointments (patient_email, doctor_email, appointment_date, appointment_type, appointment_status, slot_number, prescription) VALUES ('$patient_email', '$doctor_email', '$appointment_date', '$appointment_type', '$appointment_status', '$slot_num', '$prescription')";
    
    if (mysqli_query($connection, $insert_query)) {
        header("Location: admindashboard.php");
        exit;
    } else {
        echo "Error booking appointment: " . mysqli_error($connection);
    }
} else {
    echo "Invalid input";
}
?>
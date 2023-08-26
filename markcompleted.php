<?php
session_start();
require_once('hospitaldb_connect.php');

if (!isset($_SESSION['d_name']) && !isset($_SESSION['d_email'])) {
    header("Location: doctorsigninpage.php");
    exit;
}

if ((isset($_GET['appointment_p_email'])) && (isset($_GET['appoint_slot_date']))) {
    $appointment_id = $_GET['appointment_id'];
    $appointment_p_email = $_GET['appointment_p_email'];
    $appoint_slot_date = $_GET['appoint_slot_date'];
    $update_query = "UPDATE appointments SET appointment_status = 'completed', prescription = 'prescribed' WHERE doctor_email = '{$_SESSION['d_email']}' AND patient_email = '$appointment_p_email' AND slot_number = '$appoint_slot_date'";
    if (mysqli_query($connection, $update_query)) {
        header("Location: doctordashboard.php");
        exit;
    } else {
        echo "Error marking appointment as completed: " . mysqli_error($connection);
    }
}
?>
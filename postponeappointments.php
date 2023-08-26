<?php
session_start();
require_once('hospitaldb_connect.php');

if (!isset($_SESSION['d_name']) && !isset($_SESSION['d_email'])) {
    header("Location: doctorsigninpage.php");
    exit;
}

if (isset($_POST['postpone_date'])) {
    $postpone_date = $_POST['postpone_date'];

    $update_query = "UPDATE appointments SET appointment_date = appointment_date+1 WHERE doctor_email = '{$_SESSION['d_email']}' AND appointment_date = '$postpone_date'";
    
    if (mysqli_query($connection, $update_query)) {
        header("Location: doctordashboard.php");
        exit;
    } else {
        echo "Error postponing appointments: " . mysqli_error($connection);
    }
}
?>


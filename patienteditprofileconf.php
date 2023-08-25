<?php
session_start();
require_once('hospitaldb_connect.php');

if (!isset($_SESSION['p_name']) && !isset($_SESSION['p_email'])) {
    header("Location: patientsigninpage.php");
    exit;
}

$p_email = $_SESSION['p_email'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $weight = $_POST['weight'];
    $blood_group = $_POST['blood_group'];
    $blood_pressure = $_POST['blood_pressure'];
    $height = $_POST['height'];

    $update_query = "UPDATE patients SET name='$name', gender='$gender', address='$address', phone_number='$phone_number', weight=$weight, blood_group='$blood_group', blood_pressure='$blood_pressure', height=$height WHERE email='$p_email'";

    if (mysqli_query($connection, $update_query)) {
        header("Location: patientdashboard.php");
        exit;
    } else {
        echo "Error updating profile: " . mysqli_error($connection);
    }
}


?>
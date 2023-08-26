<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        require_once('hospitaldb_connect.php');
        session_start();
        if (!isset($_SESSION['admin_id'])) {
            header("Location: adminsigninpage.php");
            exit;
        }
        if (isset($_POST['patient_email']) && isset($_POST['test_id']) && isset($_POST['test_date']) && isset($_POST['slot_number'])) {
            $patient_email = $_POST['patient_email'];
            $test_id = $_POST['test_id'];
            $test_date = $_POST['test_date'];
            $slot_number = $_POST['slot_number'];
            $test_status = "pending";
            $test_report = "pending";

            $insert_query = "INSERT INTO booked_tests (test_id, patient_email, slot_number, booked_date, test_report, test_status) VALUES ($test_id, '$patient_email', '$slot_number', '$test_date', '$test_report', '$test_status')";

            if (mysqli_query($connection, $insert_query)) {
                header("Location: admindashboard.php");
                exit;
            } else {
                echo "Error booking test: " . mysqli_error($connection);
            }
        } else {
            echo "Invalid input";
        }

    ?>
    
</body>
</html>
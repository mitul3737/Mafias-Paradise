<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Patient History </title>
    <link rel="stylesheet" href="patientshowhistorydesign.css">
    
</head>
<body>
    <?php
    session_start();
    require_once('hospitaldb_connect.php');


    if (!isset($_SESSION['p_name']) && !isset($_SESSION['p_email'])) {
        header("Location: patientsigninpage.php");
        exit;
    }

    $p_name = $_SESSION['p_name'];
    $p_email = $_SESSION['p_email'];
    $patient_name_query = "SELECT name FROM patients WHERE email = '$p_email'";
    $patient_name_result =  mysqli_query($connection, $patient_name_query);
    if ($row = mysqli_fetch_assoc($patient_name_result)) {
        $p_name = $row['name'];
    }

    ?>
    <div class="dashboard-container">
        <div class="sidebar">
            <h1> Navigation Bar </h1>
            <ul>
                <li><button class="sidebar-button"><a href="patientdashboard.php"> 🗒️ Dashboard </a> </button></li>
                <li><button class="sidebar-button"><a href="patienteditprofile.php"> 📝 Edit Profile </a> </button></li>
                <li><button class="sidebar-button"><a href="patientshowhistory.php"> 🔎 Show History </a> </button></li>
                <li style="display:flex;flex-direction:row;gap:3px;"><button class="sidebar-button book-now book-appointment"><a href="bookappointment.php"> Book Appointment </a> </button><button class="sidebar-button book-now book-test"> <a href="booktest.php"> Book Test </a> </button></li>
            </ul>

            <form action="patientlogout.php" method="post" class="logout-form">
                <input type="submit" value="Log Out">
            </form>
        </div>
    
        <div class="content">
            <h1> Profile History </h1>
            </br>
            
            <h3>Your Appointment History:</h3>
            <table>
                <tr>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Appointment Status</th>
                    <th>Prescription</th>
                </tr>
            <?php
            $appointments_history_query = "SELECT a.appointment_date, d.name AS doctor_name, a.appointment_status AS appointment_status, a.prescription AS prescription FROM appointments a JOIN doctors d ON a.doctor_email = d.email WHERE a.patient_email = '$p_email' ORDER BY a.appointment_date DESC";
            $appointments_history_result = mysqli_query($connection, $appointments_history_query);

            if ($appointments_history_result && mysqli_num_rows($appointments_history_result) > 0) {
                while ($appointment = mysqli_fetch_assoc($appointments_history_result)) {
                    echo "<tr>";
                    echo "<td>" . $appointment['appointment_date'] . "</td>";
                    echo "<td>" . $appointment['doctor_name'] . "</td>";
                    echo "<td>" . $appointment['appointment_status'] . "</td>";
                    echo "<td>" . $appointment['prescription'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No appointment history available.</td></tr>";
            }
            ?>
            </table>

        <h3>Your Test History:</h3>
        <table>
            <tr>
                <th>Date</th>
                <th>Test Name</th>
                <th>Status</th>
            </tr>
            <?php
            $tests_history_query = "SELECT bt.booked_date, t.test_name as test_name, bt.test_status FROM booked_tests bt JOIN test t ON bt.test_id = t.test_id WHERE bt.patient_email = '$p_email' ORDER BY bt.booked_date DESC";
            $tests_history_result = mysqli_query($connection, $tests_history_query);

            if ($tests_history_result && mysqli_num_rows($tests_history_result) > 0) {
                while ($test = mysqli_fetch_assoc($tests_history_result)) {
                    echo "<tr>";
                    echo "<td>" . $test['booked_date'] . "</td>";
                    echo "<td>" . $test['test_name'] . "</td>";
                    echo "<td>" . $test['test_status'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No test history available.</td></tr>";
            }
            ?>
        </table>

        <h3>Your Room Allocation History:</h3>
        <table>
            <tr>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Room Number</th>
            </tr>
        <?php
        $room_allocation_history_query = "SELECT * FROM allocated_rooms WHERE patient_email = '$p_email' ORDER BY start_date DESC";
        $room_allocation_history_result = mysqli_query($connection, $room_allocation_history_query);

        if ($room_allocation_history_result && mysqli_num_rows($room_allocation_history_result) > 0) {
            while ($room_allocation = mysqli_fetch_assoc($room_allocation_history_result)) {
                echo "<tr>";
                echo "<td>" . $room_allocation['start_date'] . "</td>";
                echo "<td>" . $room_allocation['end_date'] . "</td>";
                echo "<td>" . $room_allocation['room_number'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No room allocation history available.</td></tr>";
        }
        ?>
    </table>

    </div>


</body>
</html>
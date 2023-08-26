<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Patient Dashboard </title>
    <link rel="stylesheet" href="css/patientdashboarddesign.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
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
    $appointments_query = "SELECT * FROM appointments WHERE patient_email = '$p_email' AND (appointment_status = 'pending' OR appointment_status = 'delayed') ORDER BY appointment_date asc";
    $appointments_result = mysqli_query($connection, $appointments_query);
    $reports_query = "SELECT bt.test_id, bt.slot_number, bt.booked_date, bt.test_report, bt.test_status FROM booked_tests bt WHERE bt.patient_email = '$p_email'";
    $reports_result = mysqli_query($connection, $reports_query);
    $room_query = "SELECT * from allocated_rooms where patient_email = '$p_email'";
    $room_result =  mysqli_query($connection, $room_query);

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
            <h1>
            <?php
            echo "Welcome, " , $p_name, "!!  ";
            ?>
            </h1>
            </br>

            <div>
                <h2> 📅 Appointments Dashboard <button type="button" class = "content-btn"><a href="bookappointment.php"> Book Now </a> </button> </h2>
                <?php
                if (mysqli_num_rows($appointments_result) > 0) {
                    echo '<table border="1">
                        <tr>
                            <th>Slot Number</th>
                            <th>Doctor Name</th>
                            <th>Appointment Date</th>
                            <th>Prescription</th>
                            <th>Appointment Status</th>
                        </tr>';
                    while ($row = mysqli_fetch_assoc($appointments_result)) {
                        echo "<tr>";
                        echo "<td>" . $row['slot_number'] . "</td>";

                        $doctor_email = $row['doctor_email'];
                        $doctor_query = "SELECT name FROM doctors WHERE email = '$doctor_email'";
                        $doctor_result = mysqli_query($connection, $doctor_query);
                        $doctor_name = mysqli_fetch_assoc($doctor_result)['name'];
                        echo "<td>" . $doctor_name . "</td>";
                        echo "<td>" . $row['appointment_date'] . "</td>";
                        echo "<td>" . $row['prescription'] . "</td>";
                        echo "<td>" . $row['appointment_status'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No Appointments booked yet!!";
                }
                ?>
            </div>

            <br/>
            <br/>

            <div>
                <h2> 🩸 Tests & Reports Dashboard <button type="button" class = "content-btn"><a href="booktest.php"> Book Now </a> </button>  </h2>
                <?php
                if (mysqli_num_rows($reports_result) > 0) {
                    echo '<table border="1">
                        <tr>
                            <th>Test ID</th>
                            <th>Test Name</th>
                            <th>Slot Number</th>
                            <th>Booked Date</th>
                            <th>Test Report</th>
                            <th>Test Status</th>
                        </tr>';
                    while ($row = mysqli_fetch_assoc($reports_result)) {
                        echo "<tr>";
                        echo "<td>" . $row['test_id'] . "</td>";

                        $t_id = $row['test_id'];
                        $test_name_query = "SELECT test_name FROM test WHERE test_id = '$t_id'";
                        $test_query = mysqli_query($connection, $test_name_query);
                        $test_name = mysqli_fetch_assoc($test_query)['test_name'];
                        echo "<td>" . $test_name . "</td>";
                        echo "<td>" . $row['slot_number'] . "</td>";
                        echo "<td>" . $row['booked_date'] . "</td>";
                        echo "<td>" . $row['test_report'] . "</td>";
                        echo "<td>" . $row['test_status'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No Tests booked yet!!";
                }
                ?>
            </div>

            <br/>
            <br/>

            <div>
                <h2>🏥 Rooms Allocated For You  </h2>
                <br/>
                <?php
                if (mysqli_num_rows($room_result) > 0) {
                    echo '<table border="1">
                        <tr>
                            <th>Room Number</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>';
                    while ($row = mysqli_fetch_assoc($room_result)) {
                        echo "<tr>";
                        echo "<td>" . $row['room_number'] . "</td>";
                        echo "<td>" . $row['start_date'] . "</td>";
                        echo "<td>" . $row['end_date'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No rooms booked for you yet!!";
                }
                ?>
            </div>
            <h2> 🔎 Search Patient</h2>
            <div class="col-md-8 col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="Enter City" required>
                </div>
            </div>
            <div>
                <h2> 🩸 Tests & Reports Dashboard <button type="button" class = "content-btn"><a href="booktest.php"> Book Now </a> </button>  </h2>
                <?php
                if (mysqli_num_rows($reports_result) > 0) {
                    echo '<table border="1">
                        <tr>
                            <th>Test ID</th>
                            <th>Test Name</th>
                            <th>Slot Number</th>
                            <th>Booked Date</th>
                            <th>Test Report</th>
                            <th>Test Status</th>
                        </tr>';
                    while ($row = mysqli_fetch_assoc($reports_result)) {
                        echo "<tr>";
                        echo "<td>" . $row['test_id'] . "</td>";

                        $t_id = $row['test_id'];
                        $test_name_query = "SELECT test_name FROM test WHERE test_id = '$t_id'";
                        $test_query = mysqli_query($connection, $test_name_query);
                        $test_name = mysqli_fetch_assoc($test_query)['test_name'];
                        echo "<td>" . $test_name . "</td>";
                        echo "<td>" . $row['slot_number'] . "</td>";
                        echo "<td>" . $row['booked_date'] . "</td>";
                        echo "<td>" . $row['test_report'] . "</td>";
                        echo "<td>" . $row['test_status'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No Tests booked yet!!";
                }
                ?>
            </div>

            <br/>
            <br/>

            <div>
                <h2>🏥 Rooms Allocated For You  </h2>
                <br/>
                <?php
                if (mysqli_num_rows($room_result) > 0) {
                    echo '<table border="1">
                        <tr>
                            <th>Room Number</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>';
                    while ($row = mysqli_fetch_assoc($room_result)) {
                        echo "<tr>";
                        echo "<td>" . $row['room_number'] . "</td>";
                        echo "<td>" . $row['start_date'] . "</td>";
                        echo "<td>" . $row['end_date'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No rooms booked for you yet!!";
                }
                ?>
            

        </div>
    </div>


</body>
</html>
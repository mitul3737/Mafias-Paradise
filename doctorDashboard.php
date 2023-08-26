<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    
    <link rel="stylesheet" href="css/patientdashboarddesign.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div>
    <?php
    session_start();
    require_once('hospitaldb_connect.php');

    if (!isset($_SESSION['d_name']) && !isset($_SESSION['d_email'])) {
        header("Location: doctorsigninpage.php");
        exit;
    }

    $d_name = $_SESSION['d_name'];
    $d_email = $_SESSION['d_email'];

    $pending_appointments_query = "SELECT a.*, p.name AS patient_name FROM appointments a INNER JOIN patients p ON a.patient_email = p.email WHERE a.doctor_email = '$d_email' AND (a.appointment_status = 'pending' OR a.appointment_status = 'delayed') ORDER BY a.appointment_date asc";
    $pending_appointments_result = mysqli_query($connection, $pending_appointments_query);
    ?>
    <div class="dashboard-container">
        <div class="sidebar">
            <h1> Navigation Bar </h1>
            <ul>
                <li><button class="sidebar-button"><a href="patientdashboard.php"> 🗒️ Dashboard </a> </button></li>
                <li><button class="sidebar-button"><a href="patienteditprofile.php"> 📝 Edit Profile </a> </button></li>
                
                
            </ul>

            <form action="doctorlogout.php" method="post" class="logout-form">
                <input type="submit"  value="Log Out">
            </form>
        </div>
        <div class="content">
            <h1>
                <?php echo "Welcome, " , $d_name, "!"; ?>
    
            </h1>

            <div>
                <h2> 📌 Appointments Dashboard </h2>
                <?php
                if (mysqli_num_rows($pending_appointments_result) > 0) {
                    echo '<table border="1" >
                        <tr>
                            <th>Patient Name</th>
                            <th>Slot Number</th>
                            <th>Appointment Date</th>
                            <th>Prescription</th>
                            <th>Appointment Status</th>
                            <th>Mark Completed</th>
                        </tr>';
                    while ($row = mysqli_fetch_assoc($pending_appointments_result)) {
                        echo "<tr>";
                        echo "<td>" . $row['patient_name'] . "</td>";
                        echo "<td>" . $row['slot_number'] . "</td>";
                        echo "<td>" . $row['appointment_date'] . "</td>";
                        echo "<td>" . $row['prescription'] . "</td>";
                        echo "<td>" . $row['appointment_status'] . "</td>";
                        echo '<td><a href="markcompleted.php?appointment_id=' . $row['patient_email'] . '">Mark Completed</a></td>';
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No appointment pending.";
                }
                ?>
            </div>
            </br>
            </br>
            

            <div>
                <h2> 🔎 Search Patient</h2>
                <div class="col-md-8 col-lg-6">
                    <form action="searchpatienthistory.php" method="get">
                        <!--<label for="patient_name">Enter Patient Name:</label> -->
                        
                        <div class="form-group">
                            <input type="text" name="patient_name" class="form-control" placeholder="Enter Patient Name" id="patient_name" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class = "btn btn-success" value="Search">
                        </div>
                    </form>
                </div>
            </div>
            </br>
            </br>
        

            <div>
                <h2> 📅 Postpone Appointments</h2>
                <div class="col-md-8 col-lg-6">
                    <form action="postponeappointments.php" method="post">
                        <label for="postpone_date">Select Date:</label>
                        <div class="form-group">
                            <input type="date" name="postpone_date" class ="form-control" id="postpone_date" required>
                        </div>
                        <div class="form-group">
                            <input type="submit"  class = "btn btn-success" value="Postpone">
                        </div>
                    </form>
                </div>    
            </div>

        </div>
    </div>    

</body>
</html>
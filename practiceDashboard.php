<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="css/practice.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
    
    <!--<div class="grid-container"> --> 
         <!--<div class="grid-item">   
                
            <h1>
                Navbar
            </h1>            
            <div class= "flex-item">
            
                <form action="doctorlogout.php" method="post">
                <button class = "button">    <input type="submit" value="Log Out"></button>
                </form>
            </div>   
        </div>  -->

        <!--<div class="grid-item"> -->  
    <!-- <div class="pagewrapper">-->        
    <div class = "flex-container">
    
        <div class= "flex-item">
            <h1>
            <?php echo "Welcome, " , $d_name, "! "; ?>
            <<form action="doctorlogout.php" method="post">
                <input type="submit" class ="btn-btn-success" value="Log Out">
            </form> 
            </h1>
        </div>    

        <div class= "flex-item">
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

        <div class= "flex-item">
            <h2> 🔎 Search Patient</h2>
            <div class="col-md-8 col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="Enter City" required>
                </div>
            </div>
           
            <!--
            <form action="searchpatienthistory.php" method="get">
                <label for="patient_name">Enter Patient Name:</label>
                <input type="text" name="patient_name" id="patient_name" required>
                <input type="submit" value="Search">
            </form> -->
        </div>

        <div class= "flex-item">
            <h2> 📅 Postpone Appointments</h2>
            <form action="postponeappointments.php" method="post">
                <label for="postpone_date">Select Date:</label>
                <input type="date" name="postpone_date" id="postpone_date" required>
                <input type="submit" value="Postpone">
            </form>
        </div>

    </div>
        
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Patient Profile </title>
    <link rel="stylesheet" href="patienteditprofiledesign.css">
    
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
                <li><button class="sidebar-button"><a href="editprofile.php"> 📝 Edit Profile </a> </button></li>
                <li><button class="sidebar-button"><a href="patientshowhistory.php"> 🔎 Show History </a> </button></li>
                <li style="display:flex;flex-direction:row;gap:3px;"><button class="sidebar-button book-now book-appointment"><a href="bookappointment.php"> Book Appointment </a> </button><button class="sidebar-button book-now book-test"> <a href="booktest.php"> Book Test </a> </button></li>
            </ul>

            <form action="patientlogout.php" method="post" class="logout-form">
                <input type="submit" value="Log Out">
            </form>
        </div>
    
        <div class="content">

            <?php
            $profile_query = "SELECT * FROM patients WHERE email = '$p_email'";
            $profile_result = mysqli_query($connection, $profile_query);

            if ($profile_result && mysqli_num_rows($profile_result) > 0) {
                $profile_data = mysqli_fetch_assoc($profile_result);
                ?>
                <form action="patienteditprofileconf.php" method="post" class="profile-form">
                    <h2> Update Profile </h2>
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="<?php echo $profile_data['name']; ?>"><br>

                    <label for="email">Email*: </label>
                    <input type="email" name="email" value="<?php echo $profile_data['email']; ?>" disabled><br>

                    <label for="gender">Gender:</label>
                    <input type="text" name="gender" value="<?php echo $profile_data['gender']; ?>"><br>

                    <label for="address">Address:</label>
                    <input type="text" name="address" value="<?php echo $profile_data['address']; ?>"><br>

                    <label for="phone_number">Phone Number:</label>
                    <input type="text" name="phone_number" value="<?php echo $profile_data['phone_number']; ?>"><br>

                    <label for="weight">Weight:</label>
                    <input type="number" name="weight" value="<?php echo $profile_data['weight']; ?>"><br>

                    <label for="blood_group">Blood Group:</label>
                    <input type="text" name="blood_group" value="<?php echo $profile_data['blood_group']; ?>"><br>

                    <label for="blood_pressure">Blood Pressure:</label>
                    <input type="text" name="blood_pressure" value="<?php echo $profile_data['blood_pressure']; ?>"><br>

                    <label for="height">Height:</label>
                    <input type="number" name="height" value="<?php echo $profile_data['height']; ?>"><br>

                    <input type="submit" value="Update Profile">

                    <p> * To change email, contact register office with proper verification details </p>
                </form>
            <?php
            } else {
                echo "Error Occured!! Log out and Sign in again.. Sorry for the inconvenience.";
            }
    ?>
</div>
        </div>
    </div>


</body>
</html>
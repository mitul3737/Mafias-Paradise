<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #6e7574;
            color: #fff;
            padding: 20px;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        select, input[type="date"], input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #275a0e;
            border: none;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #4CAF50;
        }
        .back-btn {
            padding: 5px 10px;
            background-color:  #F0FFF0;
            color: #696969;
            border-radius: 3px;
            cursor: pointer;
            font-size: 12px;
            text-align: center;
        }

    </style>
</head>
<body>
    <h1>Book Appointment</h1>

    <?php
    session_start();
    require_once('hospitaldb_connect.php');

    if (!isset($_SESSION['admin_id'])) {
        header("Location: admindashboard.php");
        exit;
    }

    $doctors_query = "SELECT email, name FROM doctors";
    $doctors_result = mysqli_query($connection, $doctors_query);
    ?>

    <form action="adminbookappointmentconf.php" method="post">
        <label for="patient_email">Patient Email:</label>
        <input type="text" name="patient_email" id="patient_email" required>
        </br>
        <label for="doctor">Select Doctor:</label>
        <select name="doctor_email" id="doctor">
            <?php
            while ($row = mysqli_fetch_assoc($doctors_result)) {
                echo '<option value="' . $row['email'] . '">' . $row['name'] . '</option>';
            }
            ?>
        </select>
        </br>
        <label for="appointment_date">Select Appointment Date:</label>
        <input type="date" name="appointment_date" id="appointment_date" required>
        </br>
        <label for="slot_number">Select a Slot: </label>
        <input type="text" name="slot_number" id="slot_number" required>
        </br>
        </br>
        <input type="submit" value="Book Appointment">
    </form>
</body>
</html>
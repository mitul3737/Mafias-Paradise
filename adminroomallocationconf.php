<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #10446bf3;
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

    <?php
        require_once('hospitaldb_connect.php');
        session_start();
        if (!isset($_SESSION['admin_id'])) {
            header("Location: adminsigninpage.php");
            exit;
        }
        if (isset($_POST['p_email']) && isset($_POST['room_no']) && isset($_POST['start_date']) && isset($_POST['end_date'])) {
            $p_email = $_POST['p_email'];
            $room_no = $_POST['room_no'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];

            $p_name_query = "SELECT name from patients where email = '$p_email'";
            $p_name_result = mysqli_query($connection, $p_name_query);
            $p_name = mysqli_fetch_assoc($p_name_result)['name'];

            $sql = "INSERT INTO allocated_rooms VALUES ('$p_email', '$p_name', '$room_no', '$start_date', '$end_date')";
            $sql_result = mysqli_query($connection, $sql);

            if (mysqli_affected_rows($connection)) {
                header("Location: admindashboard.php");
                exit;
            } else {
                echo "Room Allocation Failed!";
            }

        }

    ?>
    
</body>
</html>
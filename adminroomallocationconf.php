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
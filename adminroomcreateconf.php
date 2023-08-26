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
        if (isset($_POST['room_type']) && isset($_POST['room_no'])) {
            $room_type = $_POST['room_type'];
            $room_no = $_POST['room_no'];

            $sql = "INSERT INTO rooms VALUES ('$room_no', '$room_type')";

            $result = mysqli_query($connection, $sql);

            if (mysqli_affected_rows($connection)) {
                header("Location: admindashboard.php");
                exit;
            } else {
                echo "Room Creation Failed!";
            }

        }

    ?>
    
</body>
</html>
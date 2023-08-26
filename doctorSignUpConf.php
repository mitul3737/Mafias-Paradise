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
        if (isset($_POST['d_name']) && isset($_POST['d_email']) && isset($_POST['d_pass']) && isset($_POST['d_gender']) && isset($_POST['d_address']) && isset($_POST['d_phone']) && isset($_POST['d_spec']) && isset($_POST['d_desig']) && isset($_POST['d_dept']) && isset($_POST['d_room'])) {
            $d_name = $_POST['d_name'];
            $d_email = $_POST['d_email'];
            $d_pass = $_POST['d_pass'];
            $d_gender = $_POST['d_gender'];
            $d_address = $_POST['d_address'];
            $d_phone = $_POST['d_phone'];
            $d_spec = $_POST['d_spec'];
            $d_desig = $_POST['d_desig'];
            $d_dept = $_POST['d_dept'];
            $d_room = $_POST['d_room'];

            $sql = "INSERT INTO doctors VALUES ('$d_name', '$d_email', '$d_pass', '$d_gender', '$d_address', '$d_phone', '$d_spec', '$d_desig', '$d_dept', '$d_room')";

            $result = mysqli_query($connection, $sql);

            if (mysqli_affected_rows($connection)) {
                header("Location: admindashboard.php");
                exit;
            } else {
                echo "Registration Failed!";
            }

        }

    ?>
    
</body>
</html>
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
        if (isset($_POST['test_id']) && isset($_POST['test_type']) && isset($_POST['test_name'])) {
            $test_id = $_POST['test_id'];
            $test_type = $_POST['test_type'];
            $test_name = $_POST['test_name'];

            $sql = "INSERT INTO test VALUES ('$test_id', '$test_type', '$test_name')";

            $result = mysqli_query($connection, $sql);

            if (mysqli_affected_rows($connection)) {
                header("Location: admindashboard.php");
                exit;
            } else {
                echo "Test Creation Failed!";
            }

        }

    ?>
    
</body>
</html>
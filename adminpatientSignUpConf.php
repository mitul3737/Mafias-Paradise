<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        require_once('hospitaldb_connect.php');//connection request
        session_start();
        if (!isset($_SESSION['admin_id'])) {//if session variable is not set
            header("Location: adminsigninpage.php");
            exit;
        }
        if (isset($_POST['p_name']) && isset($_POST['p_email']) && isset($_POST['p_gender']) && isset($_POST['p_address']) && isset($_POST['p_phone']) && isset($_POST['p_pass']) && isset($_POST['p_height']) && isset($_POST['p_weight']) && isset($_POST['p_bg']) && isset($_POST['p_bp']))//if all the fields are filled (not empty) or null will also work as requried option given in form) {
            $p_name = $_POST['p_name'];
            $p_email = $_POST['p_email'];
            $p_gender = $_POST['p_gender'];
            $p_address = $_POST['p_address'];
            $p_phone = $_POST['p_phone'];
            $p_pass = $_POST['p_pass'];
            $p_height = $_POST['p_height'];
            $p_weight = $_POST['p_weight'];
            $p_bg = $_POST['p_bg'];
            $p_bp = $_POST['p_bp'];

            $sql = "INSERT INTO patients VALUES ('$p_name', '$p_email', '$p_pass', '$p_gender', '$p_address', '$p_phone', '$p_weight', '$p_bg', '$p_bp', '$p_height')";//sql query which inserts all the values in the respective columns of the table

            $result = mysqli_query($connection, $sql);//connection request and query passing and sending to database

            if (mysqli_affected_rows($connection)) {//if the query is passed and affected rows are returned
                header("Location: admindashboard.php");
                exit;
            } else {//if the query is not passed
                echo "Registration Failed!";
            }




        }

    ?>
    
</body>
</html>
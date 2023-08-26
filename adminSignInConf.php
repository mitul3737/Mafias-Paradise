<?php
    require_once('hospitaldb_connect.php');

    if (isset($_POST['admin_id']) && isset($_POST['admin_pass'])) {
        $admin_id = $_POST['admin_id'];
        $pass = $_POST['admin_pass'];
        $sql = "SELECT * FROM hospital_admins where admin_id = '$admin_id' AND admin_pass = '$pass'";
        

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) != 0) {
            $row = mysqli_fetch_assoc($result);
            $admin_id = $row['admin_id'];
            session_start();
            $_SESSION['admin_id'] = $admin_id;
            header("Location: admindashboard.php");
            exit;
        } else {
            header("Location: adminsigninpage.php");
            exit;
        }
    
    
    }




?>
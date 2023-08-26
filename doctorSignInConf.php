<?php
    require_once('hospitaldb_connect.php');

    if (isset($_POST['d_email']) && isset($_POST['d_pass'])) {
        $email = $_POST['d_email'];
        $pass = $_POST['d_pass'];
        $sql = "SELECT * FROM doctors where email = '$email' AND password = '$pass'";
        

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) != 0) {
            $row = mysqli_fetch_assoc($result);
            $d_name = $row['name'];
            $d_email = $row['email'];
            session_start();
            $_SESSION['d_name'] = $d_name;
            $_SESSION['d_email'] = $d_email;
            header("Location: doctordashboard.php");
            exit;
        } else {
            header("Location: doctorsigninpage.php");
            exit;
        }
    
    
    }

?>
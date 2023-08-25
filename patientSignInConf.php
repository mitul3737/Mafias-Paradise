<?php
    require_once('hospitaldb_connect.php');

    if (isset($_POST['p_email']) && isset($_POST['p_pass'])) {
        $email = $_POST['p_email'];
        $pass = $_POST['p_pass'];
        $sql = "SELECT * FROM patients where email = '$email' AND password = '$pass'";
        

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) != 0) {
            $row = mysqli_fetch_assoc($result);
            $p_name = $row['name'];
            $p_email = $row['email'];
            session_start();
            $_SESSION['p_name'] = $p_name;
            $_SESSION['p_email'] = $p_email;
            header("Location: patientdashboard.php");
            exit;
        } else {
            header("Location: patientsigninpage.php");
            exit;
        }
    
    
    }




?>
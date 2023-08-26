<?php
    require_once('hospitaldb_connect.php');  // we are connecting database

    if (isset($_POST['admin_id']) && isset($_POST['admin_pass'])) {  // we are checking if its a null value or not
        $admin_id = $_POST['admin_id'];  // retrieve the posted value from the form 
        $pass = $_POST['admin_pass'];
        $sql = "SELECT * FROM hospital_admins where admin_id = '$admin_id' AND admin_pass = '$pass'";
        

        $result = mysqli_query($connection, $sql); // retrieve the whole row from table // mqli_query is default function

        if (mysqli_num_rows($result) != 0) {
            $row = mysqli_fetch_assoc($result);
            $admin_id = $row['admin_id'];
            session_start();
            $_SESSION['admin_id'] = $admin_id; // this session variable will be used in different pages later
            header("Location: admindashboard.php");
            exit;
        } else {
            header("Location: adminsigninpage.php");
            exit;
        }
    
    
    }




?>
<?php
    require_once('hospitaldb_connect.php');

    if (isset($_POST['admin_id']) && isset($_POST['admin_pass'])) {
        $admin_id = $_POST['admin_id'];
        $pass = $_POST['admin_pass'];
        $sql = "SELECT * FROM hospital_admins where admin_id = '$admin_id' AND admin_pass = '$pass'";//sql query which selects all row of with admin_id and admin_pass
        

        $result = mysqli_query($connection, $sql); //connection request and query passing

        if (mysqli_num_rows($result) != 0) { //if there is a row with admin_id and admin_pass
            $row = mysqli_fetch_assoc($result);//fetch the row
            $admin_id = $row['admin_id'];//assign that certain row's admin_id to $admin_id
            session_start();//start session
            $_SESSION['admin_id'] = $admin_id;//assign $admin_id to session variable to use it in other page
            header("Location: admindashboard.php");//redirect to admindashboard.php
            exit;
        } else {
            header("Location: adminsigninpage.php");
            exit;
        }
    
    
    }




?>
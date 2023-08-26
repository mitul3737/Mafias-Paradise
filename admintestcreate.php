<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Creating Test </title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #6e7574;
            color: #fff;
            padding: 20px;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        select, input[type="date"], input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #275a0e;
            border: none;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #4CAF50;
        }
        .back-btn {
            padding: 5px 10px;
            background-color:  #F0FFF0;
            color: #696969;
            border-radius: 3px;
            cursor: pointer;
            font-size: 12px;
            text-align: center;
        }

    </style>
</head>
<body>
    <h1> Creating Test </h1>
    <?php
    session_start();
    require_once('hospitaldb_connect.php');
    
    if (!isset($_SESSION['admin_id'])) {
        header("Location: admindashboard.php");
        exit;
    }

    $admin_id = $_SESSION['admin_id'];

   ?>

    <form action="admintestcreateconf.php" method="post">
        Test ID: <input type="text" name = "test_id" required> <br/>
        Test Type: <input type="text" name = "test_type" required> <br/>
        Test Name: <input type="text" name = "test_name" required> <br/>
        <br/>
        <input type="submit" value="Register">

    </form>            

</body>
</html>
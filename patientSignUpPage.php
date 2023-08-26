<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Patient Sign Up </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #10446bf3;
            color: #fff;
            padding: 20px;
            margin: 0;
        }
        h2 {
            background-color: #4682B4;
            color: #fff;
            padding: 10px;
            font-size: 20px;
            margin: 0;
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 80px;
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
        select, input[type="password"], input[type="text"], input[type="submit"] {
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
            border-radius: 0px;
            cursor: pointer;
            font-size: 12px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1> Patient Sign Up </h1>

    <div>
        <form action="patientsignupconf.php" method="post">
            <h2> Fill up your required Informations </h2> </br> </br>
            Patient Name: <input type="text" name = "p_name" required> <br/>
            Email: <input type="text" name = "p_email" required> <br/>
            Gender: <input type="text" name = "p_gender" required> <br/>
            Address: <input type="text" name = "p_address" required> <br/>
            Phone Number: <input type="text" name = "p_phone" required> <br/>
            Password: <input type="password" name = "p_pass" required> <br/>
            Height (optional): <input type="text" name = "p_height"> <br/>
            Weight (optional): <input type="text" name = "p_weight"> <br/>
            Blood Group (optional): <input type="text" name = "p_bg"> <br/>
            Blood Pressure (optional): <input type="text" name = "p_bp"> <br/>
            <br/>
            <input type="submit" value="Register">
            <button type="button" class="back-btn"><a href="hospitalhompage.php"> back to Homepage </a> </button>
        </form>            
    </div>

</body>
</html>
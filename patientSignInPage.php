<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Log In</title>
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
        .create-btn {
            padding: 5px 10px;
            background-color:  #90EE90;
            color: #191970;;
            border-radius: 3px;
            cursor: pointer;
            font-size: 12px;
            text-align: center;
        }

    </style>

</head>
<body>
<h1> SIGN IN </h1>

<form action="patientsigninconf.php" method="post">
    <h2> Patient Sign In </h2> </br> </br>
    Email: <input type="text" name="p_email"> <br/>
    Password: <input type="password" name="p_pass"> <br/> <br/>
    <input type="Submit" value ="Sign In">
    <div style="display:flex;flex-direction:row;gap:125px;">
    <button type="button" class="back-btn"><a href="hospitalhompage.php"> back to Homepage </a> </button>
    <button type="button" class="create-btn"><a href="patientsignuppage.php"> Create Account Instead </a> </button>
    </div>
</form>
    
</body>
</html>

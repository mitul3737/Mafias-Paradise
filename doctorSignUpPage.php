<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .top-head {
            background-color: #10446bf3;
           
            padding: 20px;
            margin: 0;
            width: 100%
        }
        .flex-cont{
            display: flex;
            width: 90%;
            flex-wrap: wrap;
            align-content: space-between;

        }
         h1{
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            align-content: space-between;
            background-color: #6e7574;
            color: #fff;
            padding: 10px;
            margin: 0;

        }
    </style>    
</head>
<body>
    
    
     
<?php
    session_start();
    require_once('hospitaldb_connect.php');

    if (!isset($_SESSION['admin_id'])) {
        header("Location: adminsigninpage.php");
        exit;
    }
?>
    <div class = "flex-cont">
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
                <div class="container">
                    <div class="loginbox">
                        <div class="login-right">
                            <div class="login-left-wrap">


                                <button type="button"><a href="hospitalhompage.php"> back to Homepage </a> </button>
                                </br>
                                </br>
                                <h1> Doctor Sign Up </h1>
                                </br>
                                
                                <div class = form-center>
                                    <form action="doctorsignupconf.php" method="post">
                                    <div class="form-group">
                                            <input type="text" name = "d_name" class="form-control" placeholder="Doctors Name*" required> <br/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "d_email" class="form-control" placeholder="Email*" required> <br/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name = "d_pass" class="form-control" placeholder="Password*" required> <br/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "d_gender" class="form-control" placeholder="Gender*" required> <br/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "d_address" class="form-control" placeholder="Address*" required> <br/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "d_phone" class="form-control" placeholder="Phone Number*" required> <br/>
                                        </div>                                            
                                        <div class="form-group">
                                            <input type="text" name = "d_spec" class="form-control" placeholder="Specialization*"> <br/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "d_desig" class="form-control" placeholder="Designation*" required> <br/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "d_dept" class="form-control" placeholder="Department*" required> <br/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "d_room" class="form-control" placeholder="Room number*" required> <br/>
                                        </div>
                                        <br/>
                                        <button type="button" class="btn btn-success"><input type="submit" value="Register"  class="btn btn-success"></button>

                                    </div> 

                                    </form>  
                                </div>                                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>       

        </div>                                       
    </div>

</body>
</html>
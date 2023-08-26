<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Log In </title>
</head>
<body>

<!-- CSS LINK-->
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    
<div class="page-wrappers login-body full-row bg-gray">
                <div class="login-wrapper">
                    <div class="container">
                        <div class="loginbox">
                            <div class="login-right">
                                <div class="login-left-wrap">
                                    <button type="button" class="btn btn-light"><a href="hospitalhompage.php"> back to Homepage </a> </button>
                                    </br>
                                    </br>
                                    <h1> ADMIN </h1>
                                    </br>
                                    
                                    <div class = form-center>
                                        <form action="adminsigninconf.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="admin_id" class ="form-control" placeholder="Your email*" required> <br/>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="admin_pass" class="form-control" placeholder= "Password" required> <br/> <br/>
                                        </div>

                                        <div class="form-group">   
                                                            
                                        <button type="button" class="btn btn-success"><input type="Submit"  class="btn btn-success" ></button>
                                            

                                           <!-- Admin ID: <input type="text" name="admin_id"> <br/>
                                            Password: <input type="password" name="admin_pass"> <br/> <br/>
                                            <input type="Submit" value ="Sign In"> -->
                                        </form>
                                    </div>

                                        
                                    </body>
                                    </html>
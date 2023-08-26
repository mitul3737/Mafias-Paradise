<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
</head>
<body>

    <!-- CSS LINK -->
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">



    <?php
        session_start();
    ?>
    <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-left-wrap">    
                                <button type="button" class="btn btn-light"><a href="hospitalhompage.php"> back to Homepage </a> </button></br>
                                </br>

                                
                                <h1> Patient's Info s</h1>

                                <div class = form-center>
                                    <form action="adminpatientsignupconf.php" method="post">

                                        <div class="form-group">
                                            <input type="text" name = "p_name" class="form-control" placeholder="Patient's Name*" required> <br/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name = "p_email" class="form-control" placeholder="Email*" required> <br/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name = "p_gender" class="form-control" placeholder="Gender*" required> <br/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name = "p_address" class="form-control" placeholder="Address*" required> <br/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name = "p_phone" class="form-control" placeholder="Phone Number*" required> <br/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name = "p_pass" class="form-control" placeholder="Password*" required> <br/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name = "p_height" class="form-control" placeholder="Height"> <br/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name = "p_weight" class="form-control" placeholder="Weight"> <br/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name = "p_bg" class="form-control" placeholder="Blood Group"> <br/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name = "p_bp" class="form-control" placeholder="Blood Pressure"> <br/>
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
    


</body>
</html>
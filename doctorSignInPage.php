<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Doctor Log In </title>
</head>
<body>

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
                                <h1> DOCTOR SIGN IN PAGE </h1>
                                </br>        
                                    <form action="doctorSignInConf.php" method="post">
                                        <div class="form-group">
                                        <input type="text" name="d_email" class ="form-control" placeholder="Your email"> <br/>
                                        </div>
                                        <div class="form-group">
                                        <input type="password" name="d_pass" class ="form-control" placeholder="password"> <br/> <br/>
                                        </div>

                                        <button type="button" class="btn btn-success"><input type="Submit" value ="Sign In"  class="btn btn-success"></button>
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
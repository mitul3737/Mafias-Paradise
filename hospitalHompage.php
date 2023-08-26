<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hompage</title>

    <!-- CSS Link -->
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <link rel="stylesheet" href="css/homepage.css">

    <link rel="stylesheet" href="css/patientdashboarddesign.css">
<!-- Carousel Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    

</head>

<body>
<header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">PH
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                         
                            <li><a href="#about_us">About Us</a></li>
                            <!--<li><a href="#gallery">Gallery</a></li>-->
                            <li><a href="#contact_us">Contact Us</a></li>
                            <li><a href="#logins">Logins</a></li>  
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-success" href="patientdashboard.php">Book an Appointment</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- ################# Slider Starts Here#######################--->

<div class="container">
    <h2>Programmers Hospital</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

        <div class="item active">
            <img src="assets/images/slider/carousel1.webp" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
            <h3>Experienced Doctors</h3>
            <p></p>
            </div>
        </div>

        <div class="item">
            <img src="assets/images/slider/carousel2.webp" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
            <h3>Extra care</h3>
            <p>Patients is like our family!</p>
            </div>
        </div>
        
        <div class="item">
            <img src="assets/images/slider/carousel3.webp" style="width:100%;">
            <div class="carousel-caption">
            <h3>Advanced Services</h3>
            <p></p>
            </div>
        </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  <!--  ************************* Logins ************************** -->
    
    
    <section id="logins" class="our-blog container-fluid">
    <div class="container">
    <div class="inner-title">

            <h2>Logins</h2>
        </div>
        <div class="col-sm-12 blog-cont">
            <div class="row no-margin">
                <div class="col-sm-4 blog-smk">
                    <div class="blog-single">

                            <img src="assets/images/patient1.webp" alt="">

                        <div class="blog-single-det">
                            <h6>Patient</h6>
                            
                                <button type="button" class="btn btn-success"  style="border-radius:30px" > <a href="patientsigninpage.php"> login </a> </button>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 blog-smk">
                    <div class="blog-single">

                            <img src="assets/images/doctor2.webp" alt="">

                        <div class="blog-single-det">
                            <h6>Doctors</h6>

                                <button type="button" class="btn btn-success"  style="border-radius:30px"><a href="doctorsigninpage.php"> login </a>  </button>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4 blog-smk">
                    <div class="blog-single">

                            <img src="assets/images/admin1.webp" alt="">

                        <div class="blog-single-det">
                            <h6>Admin</h6>
                            
                            
                                <!--<button class="btn btn-success btn-sm">Click Here</button> -->
                                <button type="button" class="btn btn-success"  style="border-radius:30px"><a href="adminsigninpage.php"> login </a> </button>
                        
                        </div>
                    </div>
                </div>
    </section>                

    <!--
    <h2> Log In </h2>
    <button type="button"><a href="patientsigninpage.php"> For Patients </a> </button>
    <button type="button"><a href="doctorsigninpage.php"> For Doctors </a>  </button>
    <button type="button"><a href="adminsigninpage.php"> Administrators Only </a> </button>
    <p> or, </p>
    <button type="button"><a href="patientsignuppage.php"> Create account </a> </button>-->


    <!--  ************************* About Us Starts Here ************************** -->
    <div class = "container">
        <section id="about_us" class="about-us">
            <div class="row no-margin">
                
                
                    <h1>About Our Hospital</h1>
                    <div class = "font-size-text">
                        <p>
                            Programmers Hospital was established in 2010 with the aim of providing quality healthcare services to patients. 
                            The hospital is known for its state-of-the-art facilities and highly trained medical staff. Here are some special features of Programmers Hospital:
                            </a>
                            Advanced Technology: Programmers Hospital uses the latest technology to provide accurate diagnoses and effective treatments. The hospital has invested in electronic health records, telemedicine, and other digital solutions to improve patient care.
                            </a>
                            Specialized Care: Programmers Hospital offers specialized care in areas such as cardiology, oncology, neurology, and orthopedics. The hospital has a team of highly skilled doctors and nurses who are trained to provide personalized care to each patient.
                            </a>
                            Patient-Centered Approach: Programmers Hospital puts patients at the center of everything it does. The hospital believes in treating patients with compassion and respect, and providing them with the information they need to make informed decisions about their health.
                            </a>
                            Community Outreach: Programmers Hospital is committed to giving back to the community. The hospital organizes health camps, blood donation drives, and other events to promote health and wellness in the community.
                            </a>
                            Programmers Hospital is dedicated to providing the highest quality healthcare services to patients. The hospital's mission is to improve the health and well-being of the community by providing compassionate, patient-centered care.
                        </p>   
                    
                </div>    
        </section>    
    </div>
    </br>
    </br>

    <!-- ################# Footer Starts Here#######################--->


    <section id="contact_us" footer class="footer">
        <div class="container">
            <div class="row">
       
                <!--<div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>-->
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">



                        <?php  echo 'Merul badda, opposite of Bracu New Campus, Dhaka';?> <br>
                        Phone: <?php  echo '01782312434';?> <br>
                        Email: <?php  echo 'programmershos@gmail.com';?><br>
                        Timing: <?php  echo '24 hours';?>
                        
                    </address>
                    


                </div>
            </div>
        </div>
        
    </br>
    </br>

    </footer>
    





</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>

    <link rel="stylesheet" href="css/admindashboarddesign.css">
    <style>
        h3 {
           vertical-align: text-top;
        }

        .top-head{
            background-color: rgb(96, 103, 110);
            padding: 20px;
        }
    </style>    
</head>
<body>
    <div class = "top-head">
        <h1> ADMIN DASHBOARD </h1>
    </div>
    <?php
    session_start(); //session continued
    require_once('hospitaldb_connect.php');//connection request
    
    if (!isset($_SESSION['admin_id'])) {//if session variable is not set
        header("Location: adminsigninpage.php");//redirect to adminsigninpage.php
        exit;
    }

    $admin_id = $_SESSION['admin_id'];//assign session variable to $admin_id which will be used in other pages

   ?>
   <div class="dashboard-container">
        <div class="sidebar">
            <h1> Navigation Bar </h1>
            <ul>
                <li><button class="sidebar-button"><a href="admindashboard.php"> 🗒️ Dashboard </a> </button></li>
                <li><button class="sidebar-button"><a href="patienteditprofile.php"> 📝 Edit Profile </a> </button></li>
                
                
            </ul>

            <form action="adminlogout.php" method="post" class ="logout-form">
                <input type="submit" value="Log Out">
            </form>
        </div>    
        <!--<div class="content"> -->
      
        <div class = "flex-container">
            <div> 
                <h3> Profile Creation HUB </h3>
                </br>
                </br> 
                <button type="button"><a href="adminpatientsignuppage.php"> Create Patient Profile </a> </button>
                </br>
                </br>
                <button type="button"><a href="doctorsignuppage.php"> Create Doctor Profile </a> </button>
            </div> 

            <div> 
                    
                <h3> Room Handling HUB </h3>
               
                <button type="button"><a href="adminroomcreate.php"> Create Room </a> </button>
                </br>
                </br>
                <button type="button"><a href="adminroomallocation.php"> Room Allocation </a> </button>
            </div>

            <div> 
                <h3> Test Handling HUB </h3>

                <button type="button"><a href="admintestcreate.php"> Create Test </a> </button>
                </br>
                </br>
                <button type="button"><a href="admintestallocation.php"> Test Allocation </a> </button>
            </div>   
            <div>       
                <h3> Appointment HUB </h3>
                </br>
                <button type="button"><a href="adminbookappointment.php"> Book Appointment </a> </button>
            </div>
            </br>
            </br>
        </div>  
     
        <!--</div>-->
        <!--
        <div class = "container">
            <div class = "box"> 
                <h2> Profile Creation HUB </h2>

                <button type="button"><a href="adminpatientsignuppage.php"> Create Patient Profile </a> </button>
                <br/>
                <button type="button"><a href="doctorsignuppage.php"> Create Doctor Profile </a> </button>
            </div>
            <div class = "box"> 
                <h3> Room Handling HUB </h3>
        
                <button type="button"><a href="adminroomcreate.php"> Create Room </a> </button>
                <br/>
                <button type="button"><a href="adminroomallocation.php"> Room Allocation </a> </button>
            </div>
            <div class = "box">  
                <h4> Test Handling HUB </h4>

                <button type="button"><a href="admintestcreate.php"> Create Test </a> </button>
                <br/>
                <button type="button"><a href="admintestallocation.php"> Test Allocation </a> </button>
            </div>
            <div class = "box"> 
                <h5> Appointment Booking HUB </h5>

                <button type="button"><a href="adminbookappointment.php"> Book Appointment </a> </button>
            </div>-->
            <br/>
        </div>    
    </div>    


</body>
</html>

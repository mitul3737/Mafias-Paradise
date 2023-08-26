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
            background-color: rgb(110 122 133);;
            padding: 10px;
            color: white;
        }
    </style>    
</head>
<body>
    <div class = "top-head">
        <h1> ADMIN DASHBOARD </h1>
    </div>
    <?php
    session_start();
    require_once('hospitaldb_connect.php');
    
    if (!isset($_SESSION['admin_id'])) {  // checking if any value exist inside the session
        header("Location: adminsigninpage.php");
        exit;
    }

    $admin_id = $_SESSION['admin_id'];

   ?>
   <div class="dashboard-container">
        <div class="sidebar">
            <h1> Navigation Bar </h1>
            <ul>
                <li><button class="sidebar-button"><a href="admindashboard.php"> 🗒️ Dashboard </a> </button></li>
                
                
                
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
     

            <br/>
        </div>    
    </div>    


</body>
</html>

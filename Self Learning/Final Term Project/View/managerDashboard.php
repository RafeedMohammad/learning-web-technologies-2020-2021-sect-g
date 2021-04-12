<?php
    session_start();
    include '../Partial View/header.php';
    if(isset($_SESSION['flag'])){
?>


<!DOCTYPE html>
    <html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <nav>

        
        </nav>
        
            <table class="table table-dark" align="center" width="70%" style="background-color:powderblue;" >
                <thead class="thead-dark">
                
                    <tr>
                        <th align="left"><img src="../Resources/logo.jpg" width="100" height="100"></th>
                        <td><p><a href="home.php"> Home</a></p></td>
                        <td><p><a href="../Controller/logout.php"> Logout</a></p></td>
                        <td><p><a href=""> Registration</a></p></td>
                    </tr>

                </thead>
               
                 <tr>
                     <td class="col-sm-2">
                          &nbsp;<h1>Account</h1>
                         
                         <ul class="list-group">
                             <a href="dashboard.php"><li class="list-group-item list-group-item-action active">Dashboard</li></a>
                             <a href="profile.php"><li>View Profile</li></a>
                             <a href="edit_profile.php"><li>Edit Profile</li></a>
                             <a href="profile_pic.php"><li>Change Profile Picture</li></a>
                             <a href=""><li>Change Password</li></a>
                             <a href="view.php"><li>View Patients</li></a>
                             <a href="servicesList.php"><li>Service List</li></a>
                             <a href="#"><li>Manage Employees</li></a>
                             <a href="#"><li>Appointments</li></a>
                             <a href="../Controller/logout.php"><li>Logout</li></a>

                         </ul>
                        </td>

                    <th colspan="4" style="text-align: center";><h1>Welcome home</h1></th> 
                </tr>
                <tfoot>
                    <tr>
                        <td colspan="4" style="border:1pt solid black;" align = "center">Copyright @ 2021</td>
                    </tr>
                </tfoot>
            </table>
           
    </body>
    </html>


 <?php
    }
    else
    {
        header('location: login.html');
    }
?>

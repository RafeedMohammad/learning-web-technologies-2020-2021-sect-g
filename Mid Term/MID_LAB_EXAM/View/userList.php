<?php
    $title = "User List Page";
   //session_start();
    //$_SESSION['flag'] = true;
    //include('header.php');

?>

 

    <a href="AdminDashboard.php">Back</a> |
    <a href="../controller/logout.php">logout</a>    
    <br><br>


   <!--  <form>
        <input type="text" name="valueToSearch" placeholder="Type to search"><br><br>
        <input type="text" name="search" value="filter"><br><br>
    </form> -->

    
    <h1>User list</h1>

 

    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ROLE</th>
        </tr>
        <?php

 

        $userArr = file_get_contents('../model/users.json');
        $userArr = json_decode($userArr);
        foreach($userArr as $user)
        {
            
            echo "<tr>";
            
            
                 echo "<td>"; echo $user->Id;  echo "</td>";
                 echo "<td>"; echo $user->name;  echo "</td>";
                 echo "<td>"; echo $user->email; echo "</td>"; 
                 echo "<td>"; echo $user->role; echo "</td>";
            echo '
            
                
            </tr>
            
            
            ';

 

        }    

 

        ?>

 

        
        
    </table>

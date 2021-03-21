<?php
        require_once('../Model/userModel.php');

        $users = getAllUser();

       
            echo "<table border=1>
                    <tr>
                        <td>ID</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Type</td>
                        <td>Action</td>
                    </tr>";

        foreach($users as $user)
        {
            
       
             echo 	"<tr>
                        <td>{$user['ID']}</td>
                        <td>{$user['Name']}</td>
                        <td>{$user['Email']}</td>
                        <td>{$user['Role']}</td>
                        <td><a href = view.php>View|</a><a href = edit.php>Edit|</a><a href = delete.php>Delete</a></td>
                       
                    </tr>";

        }
        
           

            
        
        echo "</table>";


?>
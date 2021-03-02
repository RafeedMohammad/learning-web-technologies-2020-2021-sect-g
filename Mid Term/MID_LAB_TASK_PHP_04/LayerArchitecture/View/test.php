<?php
    $users = file_get_contents('C:\xampp\htdocs\Web\Mid Term\MID_LAB_TASK_PHP_04\LayerArchitecture\Model\users.json');
    $users = json_decode($users);

    // echo "<pre>";
    // print_r($users);

    echo '<table border = "1">';
    
    echo '<th>'."ID".'</th>';
    echo '<th>'."Name".'</th>';
    echo '<th>'."Email ID".'</th>';
    echo '<th>'."Password".'</th>';


    foreach($users as $user)
    {
       
      

        echo '</th>';
        echo '<tr>';
                echo '<td>'.$user->Id.'</td>';
                echo '<td>'.ucfirst($user->name).'</td>';
                echo '<td>'.$user->email.'</td>';
                echo '<td>'.md5($user->password).'</td>';
        echo '</tr>';
        
    }

    echo '</table>';

    
?>
<?php
    session_start();

        $connection = mysqli_connect('localhost', 'root', '');

        mysqli_select_db($connection, 'medico');

	

        $sql = "SELECT * from user";
        $result = mysqli_query($connection, $sql);
        echo "<table border=1>
                <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Type</td>
                    <td>Action</td>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo 	"<tr>
                        <td>{$row['ID']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['Role']}</td>
                        <td><a href = edit.php>Edit|</a><a href = delete.php>Delete</a></td>
                       
                    </tr>";
        }
        echo "</table>";


?>
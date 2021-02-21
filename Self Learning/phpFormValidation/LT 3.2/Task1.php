<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <?php

        

        if(isset($_POST['submit']))
        {
            $mystring = $_POST['email'];
            $find = '@';
            $pos = strpos($mystring, $find);
            if(empty($_POST['email']))
            {
                echo "<p style = 'color:red'>Field must not be empty</p>";
            }

            else if($pos == false)
            {
                echo "<p style = color:red>Please enter a valid email address</p>";
            }

            else{

                echo "Submitted";

            }
        }
    ?>


    <h2>Email</h2>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="Email Address"></input>
        <input type="submit" name="submit" value="submit"></input>
    </form>
    
</body>
</html>
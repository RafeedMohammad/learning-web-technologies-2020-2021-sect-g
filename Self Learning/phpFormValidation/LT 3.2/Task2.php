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
    
            if(empty($_POST['name']))
            {
                echo "<p style = 'color:red'>Field must not be empty</p>";
            }

            else if(strlen($_POST['name'] < 2))
            {
                echo "<p style = 'color:red'>String length must be greater than 2</p>";
            }

            else{

                echo "Submitted";

            }
        }
    ?>


    <h2>Name</h2>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Full Name"></input>
        <input type="submit" name="submit" value="submit"></input>
    </form>
    
</body>
</html>
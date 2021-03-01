<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Change Password</legend>
            <?php

        

            if(isset($_POST['submit']))
            {
                $mystring = $_POST['newpassword'];
                $find = array('@', '#', '$', '%');


                $check=true;
	
                if ($_POST['password'] == $_POST['newpassword']) 
                {
                    echo "Current password and new password can't be same";
            
                }

                else if($_POST['newpassword'] != $_POST['renewpassword'])
                {
                    echo "<p style = 'color:red'>Passwords do not match";
                }

                else if(strlen($_POST['newpassword']) < 8)
                {
                    echo "<p style = 'color:red'>Password string length must not be less than 8</p>";
                }
                

               else if((strpos($mystring, $find[0]) || strpos($mystring, $find[0]) || strpos($mystring, $find[0]) || strpos($mystring, $find[0])) == false)
               {
                    echo "<p style = 'color:red'>Password must contain at least one special character</p>";

               }

               // $pos = strpos($mystring, $find[0]);

                else if(empty($_POST['newpassword'] and $_POST['password']))
                {
                    echo "<p style = 'color:red'>Field must not be empty</p>";
                }

                else{

                    echo "<p style = 'color:green'>Submitted</p>";
                }

               
            }

            

           


            ?>



            <form action="" method="POST">
            <p>Current Password: &nbsp;<input type="password" name="password" placeholder=""></input></p>
            <p>New Password: &nbsp;<input type="password" name="newpassword" placeholder="Password"></input></p>
            <p>Confirm New Password: &nbsp;<input type="password" name="renewpassword" placeholder="Password"></input></p>
            <input type="submit" name="submit" value="submit"></input>
            
        </fieldset>
	</form>
</body>
</html>
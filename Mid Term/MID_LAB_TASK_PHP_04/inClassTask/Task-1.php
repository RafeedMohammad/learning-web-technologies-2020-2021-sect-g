<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>NAME</legend>
            <?php

        

            if(isset($_POST['submit']))
            {
                $mystring = $_POST['password'];
                $find = array('@', '#', '$', '%');


                $check=true;
	
                if ((ctype_alnum($_POST['name']) || $_POST['name']=="_" ||  $_POST['name']=="-" ) == true ) 
                {
                    echo "User Name Error";
            
                }

                else if(strlen($_POST['name']) <= 2)
                {
                    echo "<p style = 'color:red'>String length must be greater than 2</p>";
                }

                else if(strlen($_POST['password']) < 8)
                {
                    echo "<p style = 'color:red'>Password string length must not be less than 8</p>";
                }
                

               else if((strpos($mystring, $find[0]) || strpos($mystring, $find[0]) || strpos($mystring, $find[0]) || strpos($mystring, $find[0])) == false)
               {
                    echo "<p style = 'color:red'>Password must contain at least one special character</p>";

               }

               // $pos = strpos($mystring, $find[0]);

                else if(empty($_POST['name']))
                {
                    echo "<p style = 'color:red'>Field must not be empty</p>";
                }

                else{

                    echo "<p style = 'color:green'>Submitted</p>";
    
                }

               
            }

            

           


            ?>



            <form action="" method="POST">
            <input type="text" name="name" placeholder="Full Name"></input> <br><br>
            <input type="password" name="password" placeholder="Password"></input> <br><br>
            <input type="submit" name="submit" value="submit"></input>
            <a href="#"> Forgot Password? </a>
        </fieldset>
	</form>
</body>
</html>
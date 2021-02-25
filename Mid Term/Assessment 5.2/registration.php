<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
    <style type="text/css">
        #labels{
            height: 100%;
            width: 140px;
            float: left;
        }
        #inputs{
            height: 150px;
            width: 20px;
            float: left;
        }
        input{
            margin-bottom: 10px;
        }
        label{
            line-height: 30px;
            
        }
        

    </style>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Registration</legend>
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



    <table>
       
        <form action="" method="POST">
        <div id="labels">
            <label>Name:</label><br>
            <label>Email:</label><br>
            <label>User Name:</label><br>
            <label>Password:</label><br>
            <label>Confirm Password:</label><br>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" id="male" name="gender" value="male">
                <label class="radio-inline" for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label class="radio-inline" for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label class="radio-inline" for="other">Other</label>
                
            </fieldset>
            
            <fieldset>
                <legend>Date of Birth</legend>
                <input size="3" type="text" id="email" name="email" placeholder="dd">
                        /<input size="3" type="text" name="" placeholder="mm">
                        /<input size="4" type="text" name="" placeholder="yyyy">

                        (dd/mm/yyyy) 
                
            </fieldset>
         </fieldset>
         </div>
         <div id="inputs">
            <input type="text" placeholder="Full Name" name="name" id="name"><br>
            <input type="email" name="email" id="email"><br>
            <input type="text" name="uname" id="uname"><br>
            <input type="password" name="password" id="password"><br>
            <input type="password" name="cpassword" id="cpassword"><br>
            
         </div>



        
	    </form>
        
    </table>
</body>
</html>
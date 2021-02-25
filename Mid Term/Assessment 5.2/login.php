<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="newvalidation.php">
		<fieldset>
			<legend>Login</legend>
            <input type="email" name="email" placeholder="Email Address"></input> <br><br>
            <input type="password" name="password" placeholder="Password"></input> <br><br>
            <input type="checkbox" name="remember" value="1">Remember Me</input><br><br>
            <input type="submit" name="login" value="login"></input>
            <a href="#"> Forgot Password? </a>
        </fieldset>
	</form>
</body>
</html>
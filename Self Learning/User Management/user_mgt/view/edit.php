<?php
	$title = "Edit Page";
	include('header.php');

	echo $_GET['id'];
	$id=$_GET['id'];
	require_once('../model/userModel.php');

	$row = getUserbyId($id);
?>

	<form method="post" action="../controller/update.php?id=<?php echo $id; ?>">
		<fieldset>
			<legend>EDIT User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo $row['password']; ?>"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="signup" value="Update"> 
						<a href="user_list.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
	include('footer.php');
?>
<?php
	$title = "User List Page";
	include('header.php');

	$_SESSION['flag'] = true;
	
	
?>

	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>TYPE</td>
			<td>Action</td>
		</tr>
		<?php

		require_once('../model/userModel.php');

		$userArr=  getAllUser();

		foreach($userArr as $user)
		{
			
			echo "<tr>";
			
			
				 echo "<td>"; echo $user['id'];  echo "</td>";
				 echo "<td>"; echo $user['username'];  echo "</td>";
				 echo "<td>"; echo $user['email']; echo "</td>"; 
				 echo "<td>"; echo $user['type']; echo "</td>"; 
				 echo "
	   
				 <td>
					 <a href='edit.php?id={$user['id']}'> EDIT</a> |
					 <a href='../controller/user_delete.php?id={$user['id']}'> DELETE</a>
				 </td>
					 </tr>";
			
			
			

		}	

		?>

		
		
	</table>

<?php
	include('footer.php');
?>
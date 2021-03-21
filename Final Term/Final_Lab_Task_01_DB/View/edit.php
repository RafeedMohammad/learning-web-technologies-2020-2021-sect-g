<?php
	
		header("Location: patients.php");
        session_start();

        $connection = mysqli_connect('localhost', 'root', '');

        mysqli_select_db($connection, 'medico');
  
?>

<div class="container">


	<div class="card">
		<div class="card-header">
			<h3>Update User</h3>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data" action="">
					<div class="form-group">
						<label>ID</label>
						<input name="id" value="<?php echo $patient['id'] ?>" class="form-control" readonly>
					</div>

					<div class="form-group">
						<label>Name</label>
						<input name="fName" value="<?php echo $patient['fName'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Name</label>
						<input name="lName" value="<?php echo $patient['lName'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input name="email" value="<?php echo $patient['email'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Phone No.</label>
						<input name="phone" value="<?php echo $patient['phone'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Complain</label>
						<input name="complain" value="<?php echo $patient['complain'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Blood Group</label>
						<input name="blood_group" value="<?php echo $patient['blood_group'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Gender</label>
						<input name="gender" value="<?php echo $patient['gender'] ?>" class="form-control">
					</div>

					<div class="form-group">
						<label>Referece</label>
						<input name="reference" value="<?php echo $patient['reference'] ?>" class="form-control">
					</div>



					<div class="form-group">
						<label>Picture</label>
						<input type="file" name="picture" value="<?php echo $patient['picture'] ?>">
					</div>

					<button class="btn btn-success">Submit</button>
			</form>
		  </div>
		</div>
		
	</div>
	
	
</div>
<?php
    session_start();
    include '../Partial View/header.php';
    require_once('../model/serviceModel.php');
    if(isset($_COOKIE['flag'])){

        $services = getAllServices();

?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>


<div class="container">

    <p>
        <a class="btn btn-success" href="addService.php">Add New Service</a>
    </p>

    <div class="card">
        <div class="card-header">
            <h3>Services List</h3>
        </div>

        <table class="table table-striped" width="100%"  align="center" border="1">
        <thead class="thead-dark">
            <tr>
                <th>Service ID</th>
                <th>Name</th>
                <th>Cost</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($services as $service): ?>
                <tr>
                    
                    <td><?php echo $service['id'] ?></td>
                    <td><?php echo $service['service_name'] ?></td>
                    <td><?php echo $service['service_price']?></td>
                   
                    <td>
                        <a href="edit.php?id=<?php echo $service['id']?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>


    </table>


    </div>
    


</div>


    


    
</body>
</html>

<?php 
    }
?>
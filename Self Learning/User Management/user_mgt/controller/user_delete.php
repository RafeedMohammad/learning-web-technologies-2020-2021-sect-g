<?php 
    require_once('../model/userModel.php');
    
    $id=$_GET['id'];

    $status = deleteUser($id);

    header('location: ../view/user_list.php');
?>
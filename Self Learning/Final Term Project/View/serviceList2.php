<?php
    $title = "Services List Page";
    include('../Partial View/header.php');  
?>

<div class="sideNavbar">
    <?php  include('../Partial View/sidebar.html');?>

</div>






<div class="content"> 

    <a href="home.php">Back</a> |
        <a href="../controller/logout.php">logout</a>   
        <br>
        
        <h1>User list</h1>

        <table border="1" width="100%" class="table table-dark">
            <tr>
                <td>Service ID</td>
                <td>Name</td>
                <td>Cost</td>
                <td>Action</td>
            </tr>


            
            <?php

            require_once('../model/serviceModel.php');

            $serviceArr =  getAllServices();

            foreach($serviceArr as $service)
            {
                
                echo "<tr>";
                
                
                    echo "<td class='serviceId'>"; echo $service['id'];  echo "</td>";
                    echo "<td>"; echo $service['service_name'];  echo "</td>";
                    echo "<td>"; echo $service['service_price']; echo "</td>"; 
                    
                    echo "
        
                    <td>
                        <a href='edit.php?id={$service['id']}'> EDIT</a> |
                        <a class='delete-btn' href='../controller/service_delete.php?id={$service['id']}'> DELETE</a>
                    </td>
                        </tr>";
                
                
                

            }   

            ?>

            
            
        </table>


</div>

<style>
    .content{
        float: right;
        position: relative;
        padding: 20px;
        width: 70%;
        background-color: #f1f1f1;
        height: 300px; /* only for demonstration, should be removed */
    }
</style>
<script defer src="../Scripts/script.js"></script>


    

<?php
    #include('footer.php');
?>
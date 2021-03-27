<?php
   

    require_once('../Model/serviceModel.php');

    if(isset($_POST['addService'])){

        $service_name = $_POST['service_name'];
        $service_price = $_POST['service_price'];
        
        $service = [	
            'service_name'	=> $service_name, 
            'service_price'	=> $service_price
        ];

        

        $status = insertService($service);	
        if($status)
        {
            echo "Service added successfully!";
        }

        else
        {
            echo "Something is wrong";
        }

    }

    
    
    




?>
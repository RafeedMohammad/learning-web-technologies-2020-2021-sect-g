<?php
    require_once('../Model/patientModel.php');
    if(isset($_POST['reg_btn'])){
        if(empty($_POST['fName']) or empty($_POST['lName'])){
            echo '<p>Name field is required<p/>' ;
        }

        if(strlen($_POST['phone']) > 11 or strlen($_POST['phone'] < 7)){
            echo '<p>Please enter a valid phone number</p>';
        }

        else
        {
            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $dob_day = $_POST['day'];
            $dob_month = $_POST['month'];
            $dob_year = $_POST['year'];
            $dob = $dob_day."-".$dob_month."-".$dob_year;
            $blood_group = $_POST['blood_group'];
            $med_arr = $_POST['med_history'];
            $med_hisory = "";
            foreach($med_arr as $result)
            {
                $med_hisory .= $result.", ";
            }
            $profile_picture = "null";
            $gender = $_POST['gender'];
            $complain = $_POST['complain'];
            $reference = $_POST['reference'];

            $patient = [	
                'fName'	=> $fName, 
                'lName'	=> $lName,
                'email' => $email,
                'phone' => $phone,
                'dob'   => $dob,
                'blood_group' => $blood_group,
                'gender' => $gender,
                'med_history' => $med_hisory,
                'complain' => $complain,
                'reference' => $reference,
                'profile_picture' => $profile_picture
            ];
    
            
    
            $status = insertPatient($patient);	
            if($status)
            {
                echo "Patient added successfully!";
            }
    
            else
            {
                print_r($status);
                echo "Something is wrong";
            }
    

        }

        


    }

?>
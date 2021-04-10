<?php
    require_once('../Model/patientModel.php');
    if(isset($_POST['reg_btn'])){

        if(empty($_POST['fName']) or empty($_POST['lName'])){
            echo "<p style='color:red'>Name field is required<p/>" ;
        }

        else if(strlen($_POST['phone']) > 11 or strlen($_POST['phone'] < 7)){
            echo "<p style='color:red'>Please enter a valid phone number</p>";
        }

        else if(empty($_POST['day'] or $_POST['month'] or $_POST['year'])){
            echo "<p style='color:red'>Birthday field is required</p>" ;
        }

        else if(($_POST['day'] > 31 or $_POST['day'] < 1) or ($_POST['month'] > 12 or $_POST['day'] < 1) or (strlen($_POST['year']) > 4 or $_POST['day'] < 4))
        {
            echo "<p style='color:red'>Please enter a valid birthdate</p>" ;
        }

        
        else if(empty($_POST['email']))
        {
            echo "<p style = 'color:red'>Field must not be empty</p>";
        }

        
        $find = '@';
        $pos = strpos($_POST['email'], $find);

        if($pos == false)
        {
                echo "<p style = color:red>Please enter a valid email address</p>";
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
                echo "Something is wrong";
            }
    

        }

        


    }

?>
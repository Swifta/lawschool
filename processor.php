<?php
$biodata_alert = "";
$idcard_alert = "";
$yearbook_alert = "";
$student_affairs_alert = "";

$biodata_submitted = false;
$biodata_submitted_msg = "";
$id_card_submited = false;
$id_card_submited_msg = "";
$yearbook_submitted = false;
$yearbook_submitted_msg = "";
$student_affairs_submitted = false;
$student_affairs_submitted_msg = "";

$surname = "";
$first_name = "";
$middle_name = "";
$email = $_SESSION['user'];
$gender = "";
$religion = "";
$university = "";
$dob = "";
$pob = "";
$telephone = "";
$address1 = "";
$address2 = "";
$city = "";
$state = "";
$country = "";
$zip_code = "";
$state_of_origin = "";
$local_govt = "";
$hometown = "";
$hometown_address = "";

$place_of_work = "";
$medical_condition = "";
$medical_condition_type = "";
$name_of_father = "";
$name_of_mother = "";
$name_of_guardian = "";
$marital_status = "";
$name_of_spouse = "";
$age_of_spouse = "";
$spouse_address = "";
$spouse_address2 = "";
$spouse_city = "";
$spouse_state = "";
$spouse_country = "";
$spouse_phone = "";
$name_of_children = "";
$year_of_graduation = "";
$class_of_degree = "";
$position_held_in_university = "";
$name_of_dean = "";
$previous_degree = "";
$criminal_offence_status = "";
$criminal_offence_details = "";
$examination_malpractice_status = "";
$examination_malpractice_details = "";
$secret_cult_status = "";
$secret_cult_details = "";
$rusticated_status = "";
$rusticated_details = "";
$secondary_school_attended = "";
$dishonest_status = "";
$dishonest_details = "";
$any_law_school_before = "";
$re_admission_reasons = "";
$nk1_name = "";
$nk1_relationship = "";
$nk1_address1 = "";
$nk1_address2 = "";
$nk1_city = "";
$nk1_state = "";
$nk1_country = "";
$nk1_phone = "";
$nk1_email = "";
$nk1_place_of_work = "";
$nk2_name = "";
$nk2_relationship = "";
$nk2_address1 = "";
$nk2_address2 = "";
$nk2_city = "";
$nk2_state = "";
$nk2_country = "";
$nk2_phone = "";
$nk2_email = "";
$nk2_place_of_work = "";
$previous_nysc_status = "";    

function load(){

    
    
    
//    $place_of_work = "place_of_work";
//    $medical_condition = "medical_condition";
//    $medical_condition_type = "medical_condition_type";
//    $name_of_father = "name_of_father";
//    $name_of_mother = "name_of_mother";
//    $name_of_guardian = "name_of_guardian";
//    $marital_status = "Single";
//    $name_of_spouse = "name_of_spouse";
//    $age_of_spouse = "18";
//    $spouse_address = "spouse_address";
//    $spouse_city = "spouse_city ";
//    $spouse_state = "LAGOS";
//    $spouse_country = "NG";
//    $spouse_phone = "08025481373";
//    $name_of_children = "name_of_children";
//    $year_of_graduation = "2000";
//    $class_of_degree = "class_of_degree";
//    $position_held_in_university = "position_held_in_university";
//    $name_of_dean = "name_of_dean";
//    $previous_degree = "previous_degree";
//    $criminal_offence_status = "criminal_offence_status";
//    $criminal_offence_details = "criminal_offence_details";
//    $examination_malpractice_status = "examination_malpractice_status";
//    $examination_malpractice_details = "examination_malpractice_details";
//    $secret_cult_status = "secret_cult_status";
//    $secret_cult_details = "secret_cult_details";
//    $rusticated_status = "rusticated_status";
//    $rusticated_details = "rusticated_details";
//    $secondary_school_attended = "secondary_school_attended";
//    $dishonest_status = "dishonest_status";
//    $dishonest_details = "dishonest_details";
//    $any_law_school_before = "any_law_school_before";
//    $re_admission_reasons = "re_admission_reasons";
//    $nk1_name = "nk1_name";
//    $nk1_relationship = "nk1_relationship";
//    $nk1_address1 = "nk1_address1";
//    $nk1_address2 = "nk1_address2";
//    $nk1_city = "nk1_city";
//    $nk1_state = "LAGOS";
//    $nk1_country = "NG";
//    $nk1_phone = "08025481373";
//    $nk1_email = "segsalerty@yahoo.com";
//    $nk1_place_of_work = "nk1_place_of_work";
//    $nk2_name = "nk2_name";
//    $nk2_relationship = "nk2_relationship";
//    $nk2_address1 = "nk2_address1";
//    $nk2_address2 = "nk2_address2";
//    $nk2_city = "nk2_city";
//    $nk2_state = "LAGOS";
//    $nk2_country = "NG";
//    $nk2_phone = "08025481373";
//    $nk2_email = "segsalerty@yahoo.com";
//    $nk2_place_of_work = "nk2_place_of_work";
//    $previous_nysc_status = "previous_nysc_status";    
}

if(isset($_REQUEST['done'])){
    $sql = "UPDATE students SET done=1 WHERE email='".$_SESSION['user']."'";
    mysql_query($sql) or die(mysql_error());
    $done = 1;
}

if($next_tab > 0){
    $em_post = array();
    $em_post['email'] = $_SESSION['user'];
    $api_url_fetch = "https://script.google.com/macros/s/AKfycbxS6oWDhxXMf70Qy8_hNqcCJEXfI0RlB3cZvMqFIYZeBBGQv3s/exec";
    $ch = curl_init();
    // Set query data here with the URL
    curl_setopt($ch, CURLOPT_URL, $api_url_fetch); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $em_post);
    $content = curl_exec($ch);
    //var_dump($content);
    $response = json_decode($content,true);
    curl_close($ch);
    $surname = $response['surname'];
    $first_name = $response['first_name'];
    $middle_name = $response['middle_name'];
    $gender = $response['gender'];
    $religion = $response['religion'];
    $university = $response['university_attended'];
    $dob_tmp = $response['dob'];
    $dob2 = explode("T", $dob_tmp);
    //var_dump($dob2);
    $dob = $dob2[0];
    $pob = $response['pob'];
    $telephone = $response['telephones'];
    $address1 = $response['street_address'];
    $address2 = $response['address_line_2'];
    $city = $response['city'];
    $state = $response['state'];
    $country = $response['country'];
    $zip_code = $response['zip_code'];
    $state_of_origin = $response['state'];
    $local_govt = $response['lga_origin'];
    $hometown = $response['hometown'];
    $hometown_address = $response['home_town_address'];
    //var_dump($response);
    $place_of_work = $response['place_of_work'];
    $medical_condition = $response['medical_condition'];
    $medical_condition_type = $response['medical_condition_type'];
    $name_of_father = $response['name_of_father'];
    $name_of_mother = $response['name_of_mother'];
    $name_of_guardian = $response['name_of_guardian'];
    $marital_status = $response['marital_status'];
    $name_of_spouse = $response['name_of_spouse'];
    $age_of_spouse = $response['age_of_spouse'];
    $spouse_address = $response['spouse_address'];
    $spouse_address2 = "";
    $spouse_city = $response['spouuse_city'];
    $spouse_state = $response['spouse_state'];
    $spouse_country = $response['spouse_country'];
    $spouse_phone = $response['spouse_phone'];
    $name_of_children = $response['name_of_children'];
    $year_of_graduation = $response['year_of_graduation'];
    $class_of_degree = $response['class_of_degree'];
    $position_held_in_university = $response['position_held_in_university'];
    $name_of_dean = $response['name_of_dean'];
    $previous_degree = $response['previous_degree'];
    $criminal_offence_status = $response['criminal_offence_status'];
    $criminal_offence_details = $response['criminal_offence_details'];
    $examination_malpractice_status = $response['examination_malpractice_status'];
    $examination_malpractice_details = $response['examination_malpractice_details'];
    $secret_cult_status = $response['secret_cult_status'];
    $secret_cult_details = $response['secret_cult_details'];
    $rusticated_status = $response['rusticated_status'];
    $rusticated_details = $response['rusticated_details'];
    $secondary_school_attended = $response['secondary_school_attended'];
    $dishonest_status = $response['dishonest_status'];
    $dishonest_details = $response['dishonest_details'];
    $any_law_school_before = $response['any_law_school_before'];
    $re_admission_reasons = $response['re_admission_reasons'];
    $nk1_name = $response['nk1_name'];
    $nk1_relationship = $response['nk1_relationship'];
    $nk1_address1 = $response['nk1_address1'];
    $nk1_address2 = $response['nk1_address2'];
    $nk1_city = $response['nk1_city'];
    $nk1_state = $response['nk1_state'];
    $nk1_country = $response['nk1_country'];
    $nk1_phone = $response['nk1_phone'];
    $nk1_email = $response['nk1_email'];
    $nk1_place_of_work = $response['nk1_place_of_work'];
    $nk2_name = $response['nk2_name'];
    $nk2_relationship = $response['nk2_relationship'];
    $nk2_address1 = $response['nk2_address1'];
    $nk2_address2 = $response['nk2_address2'];
    $nk2_city = $response['nk2_city'];
    $nk2_state = $response['nk2_state'];
    $nk2_country = $response['nk2_country'];
    $nk2_phone = $response['nk2_phone'];
    $nk2_email = $response['nk2_email'];
    $nk2_place_of_work = $response['nk2_place_of_work'];
    $previous_nysc_status = $response['previous_nysc_status'];
}

if(isset($_REQUEST['submit_biodata'])){
    $surname = $_REQUEST['surname'];
    $first_name = $_REQUEST['first_name'];
    $middle_name = $_REQUEST['middle_name'];
    $email = $_SESSION['user'];
    $gender = $_REQUEST['gender'];
    $religion = $_REQUEST['religion'];
    $university = $_REQUEST['university'];
    $dob = $_REQUEST['dob'];
    $pob = $_REQUEST['pob'];
    $telephone = $_REQUEST['telephone'];
    $address1 = $_REQUEST['address1'];
    $address2 = $_REQUEST['address2'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $country = $_REQUEST['country'];
    $zip_code = $_REQUEST['zip_code'];
    $state_of_origin = $_REQUEST['state_of_origin'];
    $local_govt = $_REQUEST['local_govt'];
    $hometown = $_REQUEST['hometown'];
    $hometown_address = $_REQUEST['hometown_address'];
    
    $em_post = array("surname"=>$surname, "first_name"=>$first_name, "middle_name"=>$middle_name, "email"=>$_SESSION['user'],
        "gender"=>$gender, "religion"=>$religion, "university"=>$university, "dob"=>$dob, "pob"=>$pob,
        "telephone"=>$telephone, "address1"=>$address1, "address2"=>$address2, "city"=>$city, "state"=>$state,
        "country"=>$country, "zip_code"=>$zip_code, "state_of__origin"=>$state_of_origin,
        "local_govt"=>$local_govt, "hometown"=>$hometown, "hometown_address"=>$hometown_address);
    
        $em_post['scanned_degree_image'] = "";
        $em_post['scanned_degree_image_type'] = "";
        $em_post['criminal_offence_image'] = "";
        $em_post['criminal_offence_image_type'] = "";
        $em_post['scanned_nysc_certificate_image'] = "";
        $em_post['scanned_nysc_certificate_image_type'] = "";
        
        $em_post['place_of_work'] = $place_of_work;
        $em_post['medical_condition'] = $medical_condition;
        $em_post['medical_condition_type'] = $medical_condition_type;
        $em_post['name_of_father'] = $name_of_father;
        $em_post['name_of_mother'] = $name_of_mother;
        $em_post['name_of_guardian'] = $name_of_guardian;
        $em_post['marital_status'] = $marital_status;
        $em_post['name_of_spouse'] = $name_of_spouse;
        $em_post['age_of_spouse'] = $age_of_spouse;
        $em_post['spouse_address'] = $spouse_address;
        $em_post['spouse_address2'] = $spouse_address2;
        $em_post['spouuse_city'] = $spouse_city;
        $em_post['spouse_state'] = $spouse_state; //*********ommitted
        $em_post['spouse_country'] = $spouse_country;
        $em_post['spouse_phone'] = $spouse_phone;        
        $em_post['name_of_children'] = $name_of_children;
        $em_post['year_of_graduation'] = $year_of_graduation;
        $em_post['class_of_degree'] = $class_of_degree;
        $em_post['position_held_in_university'] = $position_held_in_university;
        $em_post['name_of_dean'] = $name_of_dean;
        $em_post['previous_degree'] = $previous_degree;
        $em_post['criminal_offence_status'] = $criminal_offence_status;
        $em_post['criminal_offence_details'] = $criminal_offence_details;
        $em_post['examination_malpractice_status'] = $examination_malpractice_status;
        $em_post['examination_malpractice_details'] = $examination_malpractice_details;
        $em_post['secret_cult_status'] = $secret_cult_status;
        $em_post['secret_cult_details'] = $secret_cult_details;
        $em_post['rusticated_status'] = $rusticated_status;
        $em_post['rusticated_details'] = $rusticated_details;
        $em_post['secondary_school_attended'] = $secondary_school_attended;
        $em_post['dishonest_status'] = $dishonest_status;
        $em_post['dishonest_details'] = $dishonest_details;
        $em_post['any_law_school_before'] = $any_law_school_before;
        $em_post['re_admission_reasons'] = $re_admission_reasons;
        $em_post['nk1_name'] = $nk1_name;
        $em_post['nk1_relationship'] = $nk1_relationship;
        $em_post['nk1_address1'] = $nk1_address1;
        $em_post['nk1_address2'] = $nk1_address2;
        $em_post['nk1_city'] = $nk1_city;
        $em_post['nk1_state'] = $nk1_state;
        $em_post['nk1_country'] = $nk1_country;
        $em_post['nk1_phone'] = $nk1_phone;
        $em_post['nk1_email'] = $nk1_email;
        $em_post['nk1_place_of_work'] = $nk1_place_of_work;
        $em_post['nk2_name'] = $nk2_name;
        $em_post['nk2_relationship'] = $nk2_relationship;
        $em_post['nk2_address1'] = $nk2_address1;
        $em_post['nk2_address2'] = $nk2_address2;
        $em_post['nk2_city'] = $nk2_city;
        $em_post['nk2_state'] = $nk2_state;
        $em_post['nk2_country'] = $nk2_country;
        $em_post['nk2_phone'] = $nk2_phone;
        $em_post['nk2_email'] = $nk2_email;
        $em_post['nk2_place_of_work'] = $nk2_place_of_work;
        $em_post['previous_nysc_status'] = $previous_nysc_status;
        
    $api_url = "https://script.google.com/macros/s/AKfycbzR68Nf9ZgjxNvmn_GSoVfdy51ii12C1MZWdWAy2vYNy1Hbhe4/exec";
    $ch = curl_init();
    // Set query data here with the URL
    curl_setopt($ch, CURLOPT_URL, $api_url); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $em_post);
    $content = curl_exec($ch);
    //var_dump($content);
    $response = json_decode($content,true);
    curl_close($ch);
    //var_dump($response);
    if(@$response['success']){
        if($next_tab < 1){
            $sql = "UPDATE students SET flag=1 WHERE email='".$_SESSION['user']."'";
            mysql_query($sql) or die(mysql_error());
            $next_tab = 1;
        }
            $biodata_submitted = true;
            $biodata_submitted_msg = "Your Biodata Datails Have been Saved/Updated Successfully.. Proceed to ID Card Form";
            //var_dump($biodata_submitted_msg);
    }
    else{
        $biodata_alert = '<div style="margin:5px auto;"><p class="text-center alert alert-danger">
            Could not Submit Form at this time, Pls try again.</p></div>';
    }
    //var_dump($response);
}
if(isset($_REQUEST['submit_idcard_form'])){
    $id_card_api = "https://script.google.com/macros/s/AKfycbwU2Q-PqnP0C7N_9stNl6A5mYB-7qDEoqC2KnhgukjOCUH04Ww/exec";
    if($_FILES["idcard_passport"]["size"] < 20000 && ($_FILES["idcard_passport"]["type"] == "image/jpeg" || 
            $_FILES["idcard_passport"]["type"] == "image/gif" || $_FILES["idcard_passport"]["type"] == "image/png")){
        $image = base64_encode(file_get_contents($_FILES['idcard_passport']['tmp_name']));
        $im_tp = explode("/", $_FILES["idcard_passport"]["type"]) ;
        $image_type = $im_tp[1]; //image type
        $em_post = array();
        $em_post['surname'] = $surname;
        $em_post['firstname'] = $first_name;
        $em_post['othernames'] = $middle_name;
        $em_post['email'] = $_SESSION['user'];
        $em_post['religion'] = $religion;
        $em_post['gender'] = $gender;
        $em_post['dob'] = $dob;
        $em_post['university'] = $university;
        $em_post['origin'] = $state_of_origin;
        $em_post['address'] = $address1." ".$address2;
        $em_post['city'] = $city;
        $em_post['province'] = $state;
        $em_post['zip'] = $zip_code;
        $em_post['country'] = $country;
        $em_post['phone'] = $telephone;
        $em_post['file_type'] = $image_type;
        $em_post['file'] = $image;
        $ch = curl_init();
        // Set query data here with the URL
        curl_setopt($ch, CURLOPT_URL, $id_card_api); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $em_post);
        $content = curl_exec($ch);
        //var_dump($content);
        $response = json_decode($content,true);
        curl_close($ch);
        if(@$response['success']){
            if($next_tab < 2){
                $sql = "UPDATE students SET flag=2, id_card_passport='".$image."', ".
                        "id_card_passport_type='".$image_type."' WHERE email='".$_SESSION['user']."'";
                mysql_query($sql) or die(mysql_error());
                $next_tab = 2;
                
            }
            $id_card_submited = true;
            $id_card_submited_msg = "Your ID Card Datails Have been Saved/Updated Successfully.. Proceed to Yearbook Form";
        }
        else{
            $idcard_alert = '<div style="margin:5px auto;"><p class="text-center alert alert-danger">
                Could not Submit Form at this time, Pls try again.</p></div>';
        }
        //var_dump($response);
    }
    else{
        $idcard_alert = '<div style="margin:5px auto;"><p class="text-center alert alert-danger">
            No or Image Uploaded not Accepted.</p></div>';
    }
}

if(isset($_REQUEST['submit_yearbook_form'])){
    $yearbook_api = "https://script.google.com/macros/s/AKfycbxaNSleAoRqIG_a1izZYP44LUA9DPhtvovS58kFnfV7FdiqjsQ/exec";
    if($_FILES["yearbook_passport"]["size"] < 20000 && ($_FILES["yearbook_passport"]["type"] == "image/jpeg" || 
            $_FILES["yearbook_passport"]["type"] == "image/gif" || $_FILES["yearbook_passport"]["type"] == "image/png")){
        $image = base64_encode(file_get_contents($_FILES['yearbook_passport']['tmp_name']));
        $im_tp = explode("/", $_FILES["yearbook_passport"]["type"]) ;
        $image_type = $im_tp[1]; //image type
        $em_post = array();
        $em_post['surname'] = $surname;
        $em_post['first_name'] = $first_name;
        $em_post['middle_name'] = $middle_name;
        $em_post['email'] = $_SESSION['user'];
        $em_post['religion'] = $religion;
        $em_post['sex'] = $gender;
        $em_post['dob'] = $dob;
        $em_post['university'] = $university;
        $em_post['state'] = $state_of_origin;
        $em_post['homeaddress'] = $address1." ".$address2;
        $em_post['lg'] = $local_govt;
        $em_post['zip'] = $zip_code;
        $em_post['phone'] = $telephone;
        $em_post['experience'] = $_REQUEST['experience'];
        $em_post['type'] = $image_type;
        $em_post['file'] = $image;
        $ch = curl_init();
        // Set query data here with the URL
        curl_setopt($ch, CURLOPT_URL, $yearbook_api); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $em_post);
        $content = curl_exec($ch);
        //var_dump($content);
        $response = json_decode($content,true);
        curl_close($ch);
        //var_dump($response);
        if(@$response['success']){
            if($next_tab < 3){
                $sql = "UPDATE students SET flag=3, yearbook_passport='".$image."', experience='".
                strip_tags(addslashes($em_post['experience']))."', ".
                        "yearbook_passport_type='".$image_type."' WHERE email='".$_SESSION['user']."'";
                mysql_query($sql) or die(mysql_error());
                $next_tab = 3;
                $yearbook_submitted = true;
            }
            $yearbook_submitted = true;
            $yearbook_submitted_msg = "Yearbook Datails Have been Saved/Updated Successfully.. Proceed to Student Affairs Form";
        }
        else{
            $yearbook_alert = '<div style="margin:5px auto;"><p class="text-center alert alert-danger">
                Could not Submit Form at this time, Pls try again.</p></div>';
        }
    }
    else{
        $yearbook_alert = '<div style="margin:5px auto;"><p class="text-center alert alert-danger">
            Could not Submit Form at this time, Pls try again.</p></div>';
    }
}
//https://script.google.com/macros/s/AKfycbzR68Nf9ZgjxNvmn_GSoVfdy51ii12C1MZWdWAy2vYNy1Hbhe4/exec
if(isset($_REQUEST['submit_student_affairs_form'])){
    $student_aff_api = "https://script.google.com/macros/s/AKfycbzR68Nf9ZgjxNvmn_GSoVfdy51ii12C1MZWdWAy2vYNy1Hbhe4/exec";
//    if($_FILES["scanned_degree"]["size"] < 20000 && ($_FILES["scanned_degree"]["type"] == "image/jpeg" || 
//            $_FILES["scanned_degree"]["type"] == "image/gif" || $_FILES["scanned_degree"]["type"] == "image/png")){
//        $image = base64_encode(file_get_contents($_FILES['scanned_degrees']['tmp_name']));
//        $im_tp = explode("/", $_FILES["scanned_degree"]["type"]);
//        $image_type = $im_tp[1]; //image type
    $scanned_degree_valid = true;
    $scanned_degree_image = "";
    $scanned_degree_image_type = "";
    $criminal_offence_image = "";
    $criminal_offence_image_type = "";
    $scanned_nysc_certificate_image = "";
    $scanned_nysc_certificate_image_type = "";
    
    
    if(true){
        if($_FILES["scanned_degree"]["size"] < 250000 && ($_FILES["scanned_degree"]["type"] == "image/jpeg" || 
            $_FILES["scanned_degree"]["type"] == "image/gif" || $_FILES["scanned_degree"]["type"] == "image/png")){
                $scanned_degree_image = base64_encode(file_get_contents($_FILES['scanned_degree']['tmp_name']));
                $im_tp = explode("/", $_FILES["scanned_degree"]["type"]);
                $scanned_degree_image_type = $im_tp[1]; //image type
         }
        else{
            $scanned_degree_valid = false;
        }
        if($_FILES["criminal_offence_file"]["size"] < 250000 && ($_FILES["criminal_offence_file"]["type"] == "image/jpeg" || 
            $_FILES["criminal_offence_file"]["type"] == "image/gif" || $_FILES["criminal_offence_file"]["type"] == "image/png")){
                $criminal_offence_image = base64_encode(file_get_contents($_FILES['criminal_offence_file']['tmp_name']));
                $im_tp = explode("/", $_FILES["criminal_offence_file"]["type"]);
                $criminal_offence_image_type = $im_tp[1]; //image type
        }
        if($_FILES["scanned_nysc_certificate"]["size"] < 250000 && ($_FILES["scanned_nysc_certificate"]["type"] == "image/jpeg" || 
            $_FILES["scanned_nysc_certificate"]["type"] == "image/gif" || $_FILES["scanned_nysc_certificate"]["type"] == "image/png")){
                $scanned_nysc_certificate_image = base64_encode(file_get_contents($_FILES['scanned_nysc_certificate']['tmp_name']));
                $im_tp = explode("/", $_FILES["scanned_nysc_certificate"]["type"]);
                $scanned_nysc_certificate_image_type = $im_tp[1]; //image type
        }
         
         
        $em_post = array("surname"=>$surname, "first_name"=>$first_name, "middle_name"=>$middle_name, "email"=>$_SESSION['user'],
        "gender"=>$gender, "religion"=>$religion, "university"=>$university, "dob"=>$dob, "pob"=>$pob,
        "telephone"=>$telephone, "address1"=>$address1, "address2"=>$address2, "city"=>$city, "state"=>$state,
        "country"=>$country, "zip_code"=>$zip_code, "state_of_origin"=>$state_of_origin,
        "local_govt"=>$local_govt, "hometown"=>$hometown, "hometown_address"=>$hometown_address);
        
        $em_post['scanned_degree_image'] = $scanned_degree_image;
        $em_post['scanned_degree_image_type'] = $scanned_degree_image_type;
        $em_post['criminal_offence_image'] = $criminal_offence_image;
        $em_post['criminal_offence_image_type'] = $criminal_offence_image_type;
        $em_post['scanned_nysc_certificate_image'] = $scanned_nysc_certificate_image;
        $em_post['scanned_nysc_certificate_image_type'] = $scanned_nysc_certificate_image_type;
        
        $em_post['place_of_work'] = $_REQUEST['place_of_work'];
        $em_post['medical_condition'] = $_REQUEST['medical_condition'];
        $em_post['medical_condition_type'] = $_REQUEST['medical_condition_type'];
        $em_post['name_of_father'] = $_REQUEST['name_of_father'];
        $em_post['name_of_mother'] = $_REQUEST['name_of_mother'];
        $em_post['name_of_guardian'] = $_REQUEST['name_of_guardian'];
        $em_post['marital_status'] = $_REQUEST['marital_status'];
        $em_post['name_of_spouse'] = @$_REQUEST['name_of_spouse'];
        $em_post['age_of_spouse'] = @$_REQUEST['age_of_spouse'];
        $em_post['spouse_address'] = @$_REQUEST['spouse_address'];
        $em_post['spouuse_city'] = @$_REQUEST['spouse_city'];
        $em_post['spouse_state'] = @$_REQUEST['spouse_state']; //*********ommitted
        $em_post['spouse_country'] = @$_REQUEST['spouse_country'];
        $em_post['spouse_phone'] = $_REQUEST['spouse_phone'];        
        $em_post['name_of_children'] = @$_REQUEST['name_of_children'];
        $em_post['year_of_graduation'] = $_REQUEST['year_of_graduation'];
        $em_post['class_of_degree'] = $_REQUEST['class_of_degree'];
        $em_post['position_held_in_university'] = $_REQUEST['position_held_in_university'];
        $em_post['name_of_dean'] = $_REQUEST['name_of_dean'];
        $em_post['previous_degree'] = $_REQUEST['previous_degree'];
        $em_post['criminal_offence_status'] = $_REQUEST['criminal_offence_status'];
        $em_post['criminal_offence_details'] = $_REQUEST['criminal_offence_details'];
        $em_post['examination_malpractice_status'] = $_REQUEST['examination_malpractice_status'];
        $em_post['examination_malpractice_details'] = $_REQUEST['examination_malpractice_details'];
        $em_post['secret_cult_status'] = $_REQUEST['secret_cult_status'];
        $em_post['secret_cult_details'] = $_REQUEST['secret_cult_details'];
        $em_post['rusticated_status'] = $_REQUEST['rusticated_status'];
        $em_post['rusticated_details'] = $_REQUEST['rusticated_details'];
        $em_post['secondary_school_attended'] = $_REQUEST['secondary_school_attended'];
        $em_post['dishonest_status'] = $_REQUEST['dishonest_status'];
        $em_post['dishonest_details'] = $_REQUEST['dishonest_details'];
        $em_post['any_law_school_before'] = $_REQUEST['any_law_school_before'];
        $em_post['re_admission_reasons'] = $_REQUEST['re_admission_reasons'];
        $em_post['nk1_name'] = $_REQUEST['nk1_name'];
        $em_post['nk1_relationship'] = $_REQUEST['nk1_relationship'];
        $em_post['nk1_address1'] = $_REQUEST['nk1_address1'];
        $em_post['nk1_address2'] = $_REQUEST['nk1_address2'];
        $em_post['nk1_city'] = $_REQUEST['nk1_city'];
        $em_post['nk1_state'] = $_REQUEST['nk1_state'];
        $em_post['nk1_country'] = $_REQUEST['nk1_country'];
        $em_post['nk1_phone'] = $_REQUEST['nk1_phone'];
        $em_post['nk1_email'] = $_REQUEST['nk1_email'];
        $em_post['nk1_place_of_work'] = $_REQUEST['nk1_place_of_work'];
        $em_post['nk2_name'] = $_REQUEST['nk2_name'];
        $em_post['nk2_relationship'] = $_REQUEST['nk2_relationship'];
        $em_post['nk2_address1'] = $_REQUEST['nk2_address1'];
        $em_post['nk2_address2'] = $_REQUEST['nk2_address2'];
        $em_post['nk2_city'] = $_REQUEST['nk2_city'];
        $em_post['nk2_state'] = $_REQUEST['nk2_state'];
        $em_post['nk2_country'] = $_REQUEST['nk2_country'];
        $em_post['nk2_phone'] = $_REQUEST['nk2_phone'];
        $em_post['nk2_email'] = $_REQUEST['nk2_email'];
        $em_post['nk2_place_of_work'] = $_REQUEST['nk2_place_of_work'];
        $em_post['previous_nysc_status'] = $_REQUEST['previous_nysc_status'];
        
        //var_dump($em_post);
        
        $ch = curl_init();
        // Set query data here with the URL
        curl_setopt($ch, CURLOPT_URL, $student_aff_api); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $em_post);
        $content = curl_exec($ch);
        //var_dump($content);
        $response = json_decode($content,true);
        curl_close($ch);
        //var_dump($response);
        if(@$response['success']){
            if($scanned_degree_valid){
                if($next_tab < 4){
                    $sql = "UPDATE students SET flag=4 WHERE email='".$_SESSION['user']."'";
                    mysql_query($sql) or die(mysql_error());
                    $next_tab = 4;
                    $student_affairs_submitted = true;
                }

                $student_affairs_alert = "<div class='alert alert-success text-center' style='margin:5px auto;'>
                    You have successfully Completed your Form 
                    <a href='#' class='btn btn-info submit_form'>CLICK HERE</a> to Submit and Start Printing</div>";
            }
            else{
                $sql = "UPDATE students SET flag=3 WHERE email='".$_SESSION['user']."'";
                mysql_query($sql) or die(mysql_error());
                $next_tab = 3;
                $student_affairs_alert = "<div class='alert alert-info text-center' style='margin:5px auto;'>
                 SAVED, Upload a scanned copy of your degree to be able to submit registration and print</div>";                
            }

            
            
            
            
//load
    $em_post = array();
    $em_post['email'] = $_SESSION['user'];
    $api_url_fetch = "https://script.google.com/macros/s/AKfycbxS6oWDhxXMf70Qy8_hNqcCJEXfI0RlB3cZvMqFIYZeBBGQv3s/exec";
    $ch = curl_init();
    // Set query data here with the URL
    curl_setopt($ch, CURLOPT_URL, $api_url_fetch); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $em_post);
    $content = curl_exec($ch);
    //var_dump($content);
    $response = json_decode($content,true);
    curl_close($ch);
    $surname = $response['surname'];
    $first_name = $response['first_name'];
    $middle_name = $response['middle_name'];
    $gender = $response['gender'];
    $religion = $response['religion'];
    $university = $response['university_attended'];
    $dob_tmp = $response['dob'];
    $dob2 = explode("T", $dob_tmp);
    //var_dump($dob2);
    $dob = $dob2[0];
    $pob = $response['pob'];
    $telephone = $response['telephones'];
    $address1 = $response['street_address'];
    $address2 = $response['address_line_2'];
    $city = $response['city'];
    //$state = $response['state'];
    $country = $response['country'];
    $zip_code = $response['zip_code'];
    $state_of_origin = $response['state'];
    $local_govt = $response['lga_origin'];
    $hometown = $response['hometown'];
    $hometown_address = $response['home_town_address'];
    //var_dump($response);
    $place_of_work = $response['place_of_work'];
    $medical_condition = $response['medical_condition'];
    $medical_condition_type = $response['medical_condition_type'];
    $name_of_father = $response['name_of_father'];
    $name_of_mother = $response['name_of_mother'];
    $name_of_guardian = $response['name_of_guardian'];
    $marital_status = $response['marital_status'];
    $name_of_spouse = $response['name_of_spouse'];
    $age_of_spouse = $response['age_of_spouse'];
    $spouse_address = $response['spouse_address'];
    $spouse_city = $response['spouuse_city'];
    $spouse_state = $response['spouse_state'];
    $spouse_country = $response['spouse_country'];
    $spouse_phone = $response['spouse_phone'];
    $name_of_children = $response['name_of_children'];
    $year_of_graduation = $response['year_of_graduation'];
    $class_of_degree = $response['class_of_degree'];
    $position_held_in_university = $response['position_held_in_university'];
    $name_of_dean = $response['name_of_dean'];
    $previous_degree = $response['previous_degree'];
    $criminal_offence_status = $response['criminal_offence_status'];
    $criminal_offence_details = $response['criminal_offence_details'];
    $examination_malpractice_status = $response['examination_malpractice_status'];
    $examination_malpractice_details = $response['examination_malpractice_details'];
    $secret_cult_status = $response['secret_cult_status'];
    $secret_cult_details = $response['secret_cult_details'];
    $rusticated_status = $response['rusticated_status'];
    $rusticated_details = $response['rusticated_details'];
    $secondary_school_attended = $response['secondary_school_attended'];
    $dishonest_status = $response['dishonest_status'];
    $dishonest_details = $response['dishonest_details'];
    $any_law_school_before = $response['any_law_school_before'];
    $re_admission_reasons = $response['re_admission_reasons'];
    $nk1_name = $response['nk1_name'];
    $nk1_relationship = $response['nk1_relationship'];
    $nk1_address1 = $response['nk1_address1'];
    $nk1_address2 = $response['nk1_address2'];
    $nk1_city = $response['nk1_city'];
    $nk1_state = $response['nk1_state'];
    $nk1_country = $response['nk1_country'];
    $nk1_phone = $response['nk1_phone'];
    $nk1_email = $response['nk1_email'];
    $nk1_place_of_work = $response['nk1_place_of_work'];
    $nk2_name = $response['nk2_name'];
    $nk2_relationship = $response['nk2_relationship'];
    $nk2_address1 = $response['nk2_address1'];
    $nk2_address2 = $response['nk2_address2'];
    $nk2_city = $response['nk2_city'];
    $nk2_state = $response['nk2_state'];
    $nk2_country = $response['nk2_country'];
    $nk2_phone = $response['nk2_phone'];
    $nk2_email = $response['nk2_email'];
    $nk2_place_of_work = $response['nk2_place_of_work'];
    $previous_nysc_status = $response['previous_nysc_status'];            
            
//
        }
        else{
            $yearbook_alert = '<div style="margin:5px auto;"><p class="text-center alert alert-danger">
                Could not Submit Form at this time, Pls try again.</p></div>';
        }
    }
    else{
        $yearbook_alert = '<div style="margin:5px auto;"><p class="text-center alert alert-danger">
            Could not Submit Form at this time, Pls try again.</p></div>';
    }
}
?>

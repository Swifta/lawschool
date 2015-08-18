<div class="row">
    <div class="col-md-12">
<?php if($next_tab > 2  && $done == 0){ ?>

<form action="" method="post" enctype="multipart/form-data">
    
    <div style="margin:5px auto;">
        <h3 class="text-center text-success" style="font-weight:bold">STUDENTS AFFAIRS FORM C/B</h3>
    </div>
  <div class="form-group col-md-12">	
    <p class="note small" id=""><i class="glyphicon glyphicon-warning-sign text-danger"></i> STUDENTS SHOULD PAINSTAKINGLY FILL ALL THE FORMS AS ANY ERROR DETECTED ON THE FORMS AT THE POINT OF SUBMISSION WILL BE REJECTED AND STUDENTS WILL HAVE TO GO BACK TO THE PORTAL TO CORRECT, REPRINT & RE-SUBMIT.</p>
  </div>
    <div class="form-group col-md-12" style="font-size:120%;">
    <?php echo $student_affairs_alert; ?>
    </div>
<div class="col-md-6">
        <div class="form-group col-md-12">
          <label for="place_of_work">Place of Work (IF IN EMPLOYMENT)</label>
          <input type="text" name="place_of_work" 
                 value="<?php echo $place_of_work; ?>" class="form-control col-md-12" id="work_3" placeholder="" required>
        </div>
        <div class="form-group col-md-12">
        <!--<div class="radio  col-md-12">-->
        <label for="radio">ANY MEDICAL CONDITIONS OR ALLERGIES? * </label>
         No <input type="radio" name="medical_condition" id="medical_3no" value="No"
                   <?php if($medical_condition == "No"){echo "checked";} ?> required>  
         Yes <input type="radio" name="medical_condition" id="medical_3yes" value="Yes"
                    <?php if($medical_condition == "Yes"){echo "checked";} ?> required>
      </div>
        <div class="form-group col-md-12 grey" id="medicalReason_3">
        <!--<div class="radio  col-md-12">-->
        <label for="medical_condition_type">IF YES, STATE TYPE: </label>
        <textarea class="form-control col-md-12" id="medicalReason_3text" 
               name="medical_condition_type" placeholder="Not more than 200 characters" rows="3" maxlength="200" ><?php echo $medical_condition_type; ?></textarea> 
        </div>
    
        <div class="panel panel-default"  style="clear: both;">
            <div class="panel-heading"><b>Family Details</b></div>
            <div class="panel-body">

        <div class="form-group col-md-12">
          <label for="name_of_father">Name of Father</label>
          <input type="text" name="name_of_father" 
                 value="<?php echo $name_of_father; ?>" class="form-control col-md-12" id="fathername_3" placeholder="" required>
        </div>
        <div class="form-group col-md-12">
            <label for="name_of_mother">Name of Mother</label>
            <input type="text" name="name_of_mother" class="form-control col-md-12" 
                   value="<?php echo $name_of_mother; ?>" id="mothername_3" placeholder="" required>
        </div>
        <div class="form-group col-md-12">
        <label for="name_of_guardian">Name of Guardian</label>
        <input type="text" name="name_of_guardian" class="form-control col-md-12" 
               value="<?php echo $name_of_guardian; ?>" id="gaurdian_3" placeholder="" required>
        </div>
            <div class="form-group col-md-12">
        <label for="marital_status">Marital Status*</label>
            <select class="form-control" onChange="determineSpouse(this);" id ="status_3" name="marital_status">
            <option></option>
            <?php
                echo FormUtil::displayMaritalStatus($marital_status);
            ?>
            </select>
        </div>
                
<!-- Spouse details-->
  <div class="form-group col-md-12">
    <label for="name_of_spouse">Name of Spouse</label>
    <input type="text" name="name_of_spouse" class="form-control col-md-12 disable_choosen" 
           value="<?php echo $name_of_spouse; ?>" id="spouse_3" placeholder="" required>
  </div>
    <div class="form-group col-md-12">
    <label for="age_of_spouse">Age of Spouse</label>
    <input type="number" name="age_of_spouse" class="form-control col-md-12 disable_choosen" 
           value="<?php echo $age_of_spouse; ?>" maxlength="3" id="agespouse_3"  onKeyDown="if(this.value.length==3 && event.keyCode!=8) return false;" required>
  </div>
  <div class="form-group col-md-12">
    <label for="">Address</label>
  </div>
    <div class="form-group col-md-12 grey">
    <label for="spouse_address">Street Address*</label>
    <input type="text" name="spouse_address" class="form-control col-md-12 disable_choosen" 
           value="<?php echo $spouse_address; ?>" id="streetaddr_3b" placeholder="" required maxlength="30">
  </div>
      <div class="form-group col-md-12 grey">
    <label for="line2_3b">Address Line 2</label>
    <input type="text" class="form-control col-md-12 disable_choosen" id="line2_3b" placeholder="">
  </div>
    <div class="form-group col-md-12 grey">
    <label for="spouse_city">City</label>
    <input type="text" name="spouse_city" class="form-control col-md-12 disable_choosen" 
           value="<?php echo $spouse_city; ?>" id="line2_3b" placeholder="" required>
    </div>
      <div class="form-group col-md-12 grey">
    <label for="region_3b">State / Province / Region</label>
	<select class="form-control disable_choosen" id ="region_3b" name="spouse_state">
            <option value=""></option>
            <?php
                echo FormUtil::displayState($spouse_state);
            ?>
	</select>
    </div>
      <div class="form-group col-md-12 grey">
    <label for="spouse_country">Country</label>
	<select class="form-control disable_choosen" id ="country_3b" name="spouse_country">
        <option value=""></option>
            <?php
                echo FormUtil::displayCountry($spouse_country);
            ?>        
	</select>
    </div>
  <div class="form-group col-md-12">
    <label for="spouse_phone">Phone Number(s) </label>
    <input type="number" class="form-control col-md-12 disable_choosen" id="phone_3b" name="spouse_phone"" 
           value="<?php echo $spouse_phone; ?>" onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;"  placeholder="11 digits only e.g 08012345678" required>
  </div>
    <div class="form-group col-md-12">
    <label for="name_of_children">Names of Children (If any)*</label>
    <textarea class="form-control col-md-12 disable_choosen" rows="3" name="name_of_children" id="nameofchildren_3" 
              maxlength="300" ><?php echo $name_of_children; ?></textarea>
  </div>
         
     </div>
</div>
<!--    panel closed-->

  	<div class="form-group col-md-12">
    <label for="uni_3b">University Attended*</label>
    <input type="text" class="form-control" value="<?php echo $university; ?>" disabled />
    </div>
  <div class="form-group col-md-12">
    <label for="year_of_graduation">Year of Graduation*</label>
    <input type="number" class="form-control col-md-12" id="year_3" name="year_of_graduation"
           value="<?php echo $year_of_graduation; ?>" placeholder="e.g 1999"  onKeyDown="if(this.value.length==4 && event.keyCode!=8) return false;" required>
  </div>
    <div class="form-group col-md-12">
    <label for="class_of_degree">Class of Degree*</label>
    <input type="text" class="form-control col-md-12" name="class_of_degree" id="degreeclass_3" 
           value="<?php echo $class_of_degree; ?>" placeholder="" required>
  </div>
<div class="form-group col-md-12">
    <label for="degreescan_3">Scanned copy of Degree [<em class="text-danger">Not more than 250kb Image file</em>]*</label>
    <input type="file" id="degreescan_3" name="scanned_degree">
  </div>
    <div class="form-group col-md-12">
    <label for="position_held_in_university">Position held in University*</label>
    <input type="text" class="form-control col-md-12" name="position_held_in_university" 
           value="<?php echo $position_held_in_university; ?>" id="position_3" placeholder="" required>
  </div>
      <div class="form-group col-md-12">
    <label for="name_of_dean">Name of Dean</label>
    <input type="text" class="form-control col-md-12" id="nameofdean_3" 
           value="<?php echo $name_of_dean; ?>" name="name_of_dean" required>
  </div>
  <div class="form-group col-md-12">
    <label for="previous_degree">Previous Degree</label>
    <input type="text" class="form-control col-md-12" name="previous_degree" id="prevdegree_3" 
           value="<?php echo $previous_degree; ?>" required>
  </div>
  
  <div class="form-group col-md-12">
  <label for="criminal_offence_status">Have you ever been tried or are you being tried for any criminal offence*</label>
   <br />No <input type="radio" name="criminal_offence_status" id="offence_3no" value="No"
                   <?php if($criminal_offence_status == "No"){echo "checked";} ?> required>  
   Yes <input type="radio" name="criminal_offence_status" id="offence_3yes" value="Yes"
              <?php if($criminal_offence_status == "Yes"){echo "checked";} ?> required>
</div>
  <div class="form-group col-md-12 grey" id="offenceReason_3">
  <!--<div class="radio  col-md-12">-->
  <label for="criminal_offence_details">IF YES, STATE THE FULL NATURE OF THE OFFENCE AND PARTICULARS OF THE TRIAL AND CONVICTION OR DISCHARGE</label>
  <textarea class="form-control col-md-12" id="offenceReason_3text" rows="3" 
            name="criminal_offence_details" maxlength="200"><?php echo $criminal_offence_details; ?></textarea> 
  
  <label for="certifiedCopy" style="margin-top:10px;">A CERTIFIED TRUE COPY OF THE COURT PROCEEDINGS AND JUDGEMENT MUST BE ATTACHED :</label>
  <input type="file" id="certifiedCopy" name="criminal_offence_file"> [<em class="text-danger">Not more than 250kb Image file</em>]
</div>

  <div class="form-group col-md-10">
  <label for="examination_malpractice_status">Has there been any allegation of examination malpractice against you during your career in any university? *</label>
   No <input type="radio" name="examination_malpractice_status" id="malpractice_3no" value="No"
             <?php if($examination_malpractice_status == "No"){echo "checked";} ?> required>  
   Yes <input type="radio" name="examination_malpractice_status" id="malpractice_3yes" value="Yes"
              <?php if($examination_malpractice_status == "Yes"){echo "checked";} ?> required>
</div>
  <div class="form-group col-md-12 grey" id="malpracticeReason_3">
  <!--<div class="radio  col-md-12">-->
  <label for="examination_malpractice_details">IF YES, PLEASE STATE WHETHER OR NOT YOU WERE FOUND CULPABLE, AND THE PUNISHMENT IMPOSED ON YOU. STATE (WHERE APPLICABLE) WHETHER YOU WERE CLEARED OF THE ALLEGED MALPRACTICE</label>
  <textarea class="form-control col-md-12" name="examination_malpractice_details" 
            id="malpracticeReason_3text" rows="3" maxlength="200"><?php echo $examination_malpractice_details; ?></textarea> 
</div>

  <div class="form-group col-md-12">
      <label for="secret_cult_status">Has there been any allegation of membership of any secret cult society against you during your career in the university?*</label><br>
   No <input type="radio" name="secret_cult_status" id="allegation_3no" value="No"
             <?php if($secret_cult_status == "No"){echo "checked";} ?> required>  
   Yes <input type="radio" name="secret_cult_status" id="allegation_3yes" value="Yes"
              <?php if($secret_cult_status == "Yes"){echo "checked";} ?> required>
</div>
  <div class="form-group col-md-12 grey" id="allegationReason_3">
  <!--<div class="radio  col-md-12">-->
  <label for="secret_cult_details">IF YES, PLEASE STATE WHETHER OR NOT YOU WERE FOUND CULPABLE, AND THE PUNISHMENT IMPOSED ON YOU. OTHERWISE STATE SUPPORTING EVIDENCE WHETHER YOU WERE CLEARED OF THE ALLEGATION</label>
  <textarea class="form-control col-md-12" id="allegationReason_3text" rows="3" maxlength="200"
            name="secret_cult_details" ><?php echo $secret_cult_details; ?></textarea> 
</div>

  <div class="form-group col-md-12">
      <label for="rusticated_status">Have you ever been rusticated from any university on any ground?*</label>
      <br>
   No <input type="radio" name="rusticated_status" id="rustication_3no" value="No"
             <?php if($rusticated_status == "No"){echo "checked";} ?> required>  
   Yes <input type="radio" name="rusticated_status" id="rustication_3yes" value="Yes"
              <?php if($rusticated_status == "Yes"){echo "checked";} ?> required>
</div>
  <div class="form-group col-md-12 grey" id="rusticationReason_3">
  <!--<div class="radio  col-md-12">-->
  <label for="rusticated_details">IF YES, PLEASE STATE THE DETAILS</label>
  <textarea class="form-control col-md-12" id="rustication_3text" rows="3" maxlength="200" 
            name="rusticated_details"><?php echo $rusticated_details; ?></textarea> 
</div>

  
</div>

<div class="col-md-6">
    

    <div class="form-group col-md-12">
    <label for="secondary_school_attended">Secondary School Attended*</label>
    <input type="text" name="secondary_school_attended" class="form-control col-md-12" id="secschool_3b"
           value="<?php echo $secondary_school_attended; ?>" placeholder="" required maxlength="60">
  </div>
 <div class="form-group col-md-10">
  <label for="dishonest_status">Has there been any form of allegation of dishonesty against you any where?*</label>
  <br>
   No <input type="radio" name="dishonest_status" id="dishonesty_3bno" value="No"
             <?php if($dishonest_status == "No"){echo "checked";} ?> required>  
   Yes <input type="radio" name="dishonest_status" id="dishonesty_3byes" value="Yes"
              <?php if($dishonest_status == "Yes"){echo "checked";} ?> required>
</div>
  <div class="form-group col-md-12 grey" id="dishonestyReason_3b">
  <label for="dishonest_details">IF YES, PLEASE GIVE DETAILS OF THE OFFENCE, WHERE AND WHEN COMMITTED, CONVICTION AND PUNISHMENT. OTHER WISE STATE WITH SUPPORTING EVIDENCE WHETHER YOU WERE CLEARED OF THE ALLEGATION</label>
  <textarea class="form-control col-md-12" id="dishonesty_3btext" 
            name="dishonest_details" rows="3" maxlength="200"><?php echo $dishonest_details; ?></textarea> 
</div>

  <div class="form-group col-md-12">
  <label for="any_law_school_before">Have you ever been given admission to any law school before?</label>
  <br>
   No <input type="radio" name="any_law_school_before" id="admission_3bno" value="No"
             <?php if($any_law_school_before == "No"){echo "checked";} ?> required>  
   Yes <input type="radio" name="any_law_school_before" id="admission_3byes" value="Yes"
              <?php if($any_law_school_before == "Yes"){echo "checked";} ?> required>
</div>
  <div class="form-group col-md-12 grey" id="admissionReason_3b">
  <label for="re_admission_reasons">IF YES, WHEN AND STATE REASONS FOR RE-ADMISSION</label>
  <textarea class="form-control col-md-12" id="admission_3btext" rows="3" maxlength="200" 
            name="re_admission_reasons"><?php echo $re_admission_reasons; ?></textarea> 
</div>

 
  <div class="form-group col-md-12">
    <label for=""><h3 style="color:#2a6496;">TWO NEXT OF KINS</h3></label>
  </div>
  
  <!-- Next of kin 1 -->
  <div class="panel panel-default" style="clear:both">
  <div class="panel-heading">1. Next of kin</div>
  <div class="panel-body">
      
  <div class="form-group col-md-12">
    <label for="nk1_name">Name (Mr / Mrs / Miss)</label>
    <input type="text" name="nk1_name" class="form-control col-md-12" id="kin1_name" placeholder="" 
           value="<?php echo $nk1_name; ?>" required>
  </div>
    <div class="form-group col-md-12">
    <label for="nk1_relationship">Relationship</label>
    <input type="text"class="form-control col-md-12" name="nk1_relationship" id="kin1_relationship"
           value="<?php echo $nk1_relationship; ?>" placeholder="" required>
  </div>
  <div class="form-group col-md-12">
    <label for="">Address</label>
  </div>
    <div class="form-group col-md-12 grey">
    <label for="nk1_address1">Street Address*</label>
    <input type="text" class="form-control col-md-12" id="kin1_streetaddr" name="nk1_address1" 
           value="<?php echo $nk1_address1; ?>" placeholder="" required maxlength="30">
  </div>
      <div class="form-group col-md-12 grey">
    <label for="nk1_address2">Address Line 2</label>
    <input type="text" class="form-control col-md-12" name="nk1_address2" id="kin1_line2" 
           value="<?php echo $nk1_address2; ?>" placeholder="" >
  </div>
    <div class="form-group col-md-12 grey">
    <label for="nk1_city">City</label>
    <input type="text" class="form-control" name="nk1_city" value="<?php echo $nk1_city; ?>" required />
    </div>
      <div class="form-group col-md-12 grey">
    <label for="nk1_state">State / Province / Region</label>
	<select class="form-control" name="nk1_state" id ="kin1_region">
            <option></option>
            <?php
                echo FormUtil::displayState($nk1_state);
            ?>
	</select>
    </div>
      <div class="form-group col-md-12 grey">
    <label for="nk1_country">Country</label>
	<select class="form-control" name="nk1_country" id ="kin1_country">
            <option></option>
            <?php
                echo FormUtil::displayCountry($nk1_country);
            ?>  
	</select>
    </div>
  <div class="form-group col-md-12">
    <label for="nk1_phone">Phone Number(s) </label>
    <input type="number" class="form-control col-md-12" id="kin1_phone" 
           name="nk1_phone"  placeholder="11 digits only e.g 08012345678" 
           onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;"  value="<?php echo $nk1_phone; ?>" required> </div>
 <div class="form-group col-md-12">
    <label for="nk1_email">Valid Email Address</label>
    <input type="email" name="nk1_email" class="form-control col-md-12" id="kin1_email" 
           value="<?php echo $nk1_email; ?>" placeholder="" required>
  </div>
   <div class="form-group col-md-12">
    <label for="nk1_place_of_work">Place of Work</label>
    <input type="text" name="nk1_place_of_work" class="form-control col-md-12" id="kin1_work" 
           value="<?php echo $nk1_place_of_work; ?>" placeholder="">
  </div>
      
  </div>
</div>        
 <!-- Next of kin 1 ends here -->
    
  <!-- Next of kin 2 -->
  <div class="panel panel-default" style="clear:both">
  <div class="panel-heading">2. Next of kin</div>
  <div class="panel-body">
      
  <div class="form-group col-md-12">
    <label for="nk2_name">Name (Mr / Mrs / Miss)</label>
    <input type="text" name="nk2_name" class="form-control col-md-12" id="kin2_name" 
           value="<?php echo $nk2_name; ?>" placeholder="" required>
  </div>
    <div class="form-group col-md-12">
    <label for="nk2_relationship">Relationship</label>
    <input type="text" name="nk2_relationship" class="form-control col-md-12" id="kin2_relationship" 
           value="<?php echo $nk2_relationship; ?>" placeholder="" required>
  </div>
  <div class="form-group col-md-12">
    <label for="">Address</label>
  </div>
    <div class="form-group col-md-12 grey">
    <label for="nk2_address1">Street Address*</label>
    <input type="text" name="nk2_address1" class="form-control col-md-12" id="kin2_streetaddr" 
           value="<?php echo $nk2_address1; ?>" placeholder="" required maxlength="30">
  </div>
      <div class="form-group col-md-12 grey">
    <label for="nk2_address2">Address Line 2</label>
    <input type="text" name="nk2_address2" class="form-control col-md-12" id="kin2_line2" 
           value="<?php echo $nk2_address2; ?>" placeholder="">
  </div>
    <div class="form-group col-md-12 grey">
    <label for="nk2_city">City</label>
    <input type="text" class="form-control" name="nk2_city" value="<?php echo $nk2_city; ?>" required />
    </div>
      <div class="form-group col-md-12 grey">
    <label for="kin2_region">State / Province / Region</label>
	<select class="form-control" name="nk2_state" id="kin2_region">
        <option></option>
            <?php
                echo FormUtil::displayState($nk2_state);
            ?>
	</select>
    </div>
      <div class="form-group col-md-12 grey">
    <label for="nk2_country">Country</label>
	<select class="form-control" name="nk2_country" id ="kin2_country">
            <option></option>
            <?php
                echo FormUtil::displayCountry($nk2_country);
            ?>
	</select>
    </div>
  <div class="form-group col-md-12">
    <label for="nk2_phone">Phone Number(s) </label>
    <input type="number" class="form-control col-md-12"
           name="nk2_phone" id="kin2_phone"  placeholder="11 digits only e.g 08012345678" 
           onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;"   value="<?php echo $nk2_phone; ?>" maxlength="11" required>
  </div>
   <div class="form-group col-md-12">
    <label for="nk2_email">Valid Email Address</label>
    <input type="email" name="nk2_email"
           class="form-control col-md-12" id="kin2_email" 
           value="<?php echo $nk2_email; ?>" placeholder="" required>
  </div>
   <div class="form-group col-md-12">
    <label for="nk2_place_of_work">Place of Work</label>
    <input type="text" name="nk2_place_of_work" class="form-control col-md-12" id="kin2_work"
           value="<?php echo $nk2_place_of_work; ?>" placeholder="">
  </div>
      
   </div>
</div>        
 <!-- Next of kin 1 ends here -->
   
    <div class="form-group col-md-12">
  <label for="previous_nysc_status">Have you under taken the Nysc previously?*</label>
   No <input type="radio" name="previous_nysc_status" id="nysc_no" value="No"
 <?php if($previous_nysc_status == "No"){echo "checked";} ?> required>  
   Yes <input type="radio" name="previous_nysc_status" id="nysc_yes" value="Yes"
              <?php if($previous_nysc_status == "Yes"){echo "checked";} ?> required>
</div>
 <div class="form-group col-md-12 grey" id="nyscdoc_3">
  <label for="nysc" style="margin-top:4px;">IF YES, ATTACH SCANNED OF CERTIFICATE</label>
  <input type="file" id="nyscScanned" name="scanned_nysc_certificate">
  [<em class="text-danger">Not more than 250kb Image file</em>]
</div>
</div>
    
</div>
    <input type="hidden" name="submit_student_affairs_form" value="yes" />
  <div class="form-group col-sm-12 text-center">
  <button type="submit" class="btn btn-info" id="center">SAVE <i class="glyphicon glyphicon-save"></i></button>
  <?php
if($next_tab == 4){
    ?>
  <a href="#" class="btn btn-success submit_form">Submit Form</a>
  <?php
}
  ?>
  </div>
</form>

<?php 

}
else{ 
    if($next_tab < 3){
?>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 note" style="margin:30px auto;">
        <p class="alert alert-warning text-center">You need to Complete Bio Data, ID CARD Form &amp; 
        Year Book Form</p>
            </div>
            <div class="col-sm-2"></div>
        </div>
<?php
    }
    else{
?>
  <div class="row">
      <div class="col-md-12"><h2 class="text-center alert alert-danger">
              Scroll Down to Print Form and Navigate to Other Tabs to PRINT individual FORMS</h2></div>
  <div class="col-md-2"></div>
        
  <!-------------------------- Printout_2 starts here------------------->
  <div class="form-group col-md-8 print-page" id="studentAffairsContainer">
  		<div class="print-header text-center" style="text-align: center; line-height:0px;">
                <img  width="50" height="50" src="images/logo1.jpg" class="print_logo"/>
	            <h5>COUNCIL OF LEGAL EDUCATION</h5>
                <h5>NIGERIAN LAW SCHOOL</h5>
                <h5>LAGOS CAMPUS</h5>
                <h5>2015/2016 (OCTOBER) ACADEMIC SESSION</h5>
                <h5>STUDENTS AFFAIRS FORM C/B</h5>
	          
              <hr>
                </div>
            
            <table class="print-table table-striped">
                <tbody>
                <tr style="background-color:#FFF;">
                <td><img class="img-thumbnail" <?php echo 'src="data:image/'.$id_card_passport_type.';base64,' .
                        $id_card_passport_data . '"'; ?>
                         height="80" width="80" style="margin-bottom:10px;"></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td><p class="">Registration Number:</p></td>
                <td><p></p></td>
                </tr>
                <tr>
                <td><p>Surname:</p></td>
                <td><p><?php echo $surname; ?></p></td>
                </tr>
                <tr>
                <td><p>Other Names:</p></td>
                <td><p><?php echo $first_name." ".$middle_name; ?></p></td>
                </tr>
                <tr>
                <td><p>Gender:</p></td>
                <td><p><?php echo $gender; ?></p></td>
                </tr>
                <tr>
                <td><p>Religion:</p></td>
                <td><p><?php echo $religion; ?></p></td>
                </tr>
                <tr>
                <td><p>Permanent home address:</p></td>
                <td><p><?php echo $address1." ".$address2." ".$city." ".$state." ".$country; ?></p></td>
                </tr>
                <tr>
                <td><p>Postal/Contact address:</p></td>
                <td><p><?php echo $address1." ".$address2." ".$city." ".$state." ".$country." ".$zip_code; ?></p></td>
                </tr>
                <tr>
                <td><p>State of Origin:</p></td>
                <td><p><?php echo $state_of_origin; ?></p></td>
                </tr>
                <tr>
                <td><p>Local goverment:</p></td>
                <td><p><?php echo $local_govt; ?></p></td>
                </tr>
                <tr>
                <td><p>Home town:</p></td>
                <td><p><?php echo $hometown; ?></p></td>
                </tr>
                 <tr>
                <td><p>Home town address:</p></td>
                <td><p><?php echo $hometown_address; ?></p></td>
                </tr>
                <tr>
                <td><p>Phone numbers:</p></td>
                <td><p><?php echo $telephone; ?></p></td>
                </tr>
                <td>Valid Email Address:</p></td>
                <td><p><?php echo $email; ?></p></td>
                </tr>
                <tr>
                <td><p>Place of Work(if in employment):</p></td>
                <td><p><?php echo $place_of_work; ?></p></td>
                </tr>
                <tr>
                <td><p>Date of Birth:</p></td>
                <td><p><?php echo $dob; ?></p></td>
                </tr>
                 <tr>
                <td><p>Any Medical Conditions or Allergies? :</p></td>
                <td><p><?php echo $medical_condition; ?></p></td>
                </tr>
                <tr>
                <td><p>Name of Father:</p></td>
                <td><p><?php echo $name_of_father; ?></p></td>
                </tr>
                <tr>
                <td><p>Name of Mother:</p></td>
                <td><p><?php echo $name_of_mother; ?></p></td>
                </tr>
                <tr>
                <td><p>Name of Gaurdian:</p></td>
                <td><p><?php echo $name_of_guardian; ?></p></td>
                </tr>
                <tr>
                <td><p>Marital Status:</p></td>
                <td><p><?php echo $marital_status; ?></p></td>
                </tr>
                <tr>
                <td><p>Name of Spouse:</p></td>
                <td><p><?php echo $name_of_spouse; ?></p></td>
                </tr>
                <tr>
                <td><p>Age of Spouse:</p></td>
                <td><p><?php echo $age_of_spouse; ?></p></td>
                </tr>
                <tr>
                <td><p>Address:</p></td>
                <td><p><?php echo $spouse_address." ".@$spouse_city." ".@$spouse_state." ".@$spouse_country; ?></p></td>
                </tr>
                <tr>
                <td><p>Phone Numbers:</p></td>
                <td><p><?php echo $spouse_phone; ?></p></td>
                </tr>
                <tr>
                <td><p>Names of Children(if any):</p></td>
                <td><p><?php echo $name_of_children; ?></p></td>
                </tr>
                <tr>
                <td><p>University Attended:</p></td>
                <td><p><?php echo $university; ?></p></td>
                </tr>
                <tr>
                <td><p>Year of Graduation:</p></td>
                <td><p><?php echo $year_of_graduation; ?></p></td>
                </tr>
                <tr>
                <td><p>Class of Degree:</p></td>
                <td><p><?php echo $class_of_degree; ?></p></td>
                </tr>
                <tr>
                <td><p>Scanned copy of Degree:</p></td>
                <td><p><?php echo $surname." ".$first_name." ".$middle_name; ?></p></td>
                </tr>
                <tr>
                <td><p>Position held in University:</p></td>
                <td><p><?php echo $position_held_in_university; ?></p></td>
                </tr>
                <tr>
                <td><p>Name of Dean:</p></td>
                <td><p><?php echo $name_of_dean; ?></p></td>
                </tr>
                <tr>
                <td><p>Previous Degree:</p></td>
                <td><p><?php echo $previous_degree; ?></p></td>
                </tr>
                <tr>
                <td><p>Have you ever been tried or are you being tried for any criminal offence</p></td>
                <td><p><?php echo $criminal_offence_status; ?></p></td>
                </tr>
                 <tr>
                <td><p>Has there been any allegation of examination malpractice against you during your career in any university?</p></td>
                <td><p><?php echo $examination_malpractice_status; ?></p></td>
                </tr>
                 <tr>
                <td><p>Has there been any allegation of membership of any secret cult society against you during your career in the university?</p></td>
                <td><p><?php echo $secret_cult_status; ?></p></td>
                </tr>
                 <tr>
                <td><p>Have you ever been rusticated from any university on any ground?</p></td>
                <td><p><?php echo $rusticated_status; ?></p></td>
                </tr>
                <tr>
                <td><p>Secondary School Attended:</p></td>
                <td><p><?php echo $secondary_school_attended; ?></p></td>
                </tr>
                <tr>
                <td><p>Has there been any form of allegation of dishonesty against you any where?</p></td>
                <td><p><?php echo $dishonest_status; ?></p></td>
                </tr>
                <tr>
                <td><p>Have you ever been given admission to any law school before?:</p></td>
                <td><p><?php echo $any_law_school_before; ?></p></td>
                </tr>
                <tr>
                <td><h4 >TWO NEXT OF KINS</h4></td>
                <td></td>
                </tr>
                <tr>
                <td><p>Name (Mr / Mrs / Miss):</p></td>
                <td><p><?php echo $nk1_name; ?></p></td>
                </tr>
                <tr>
                <td><p>Relationship:</p></td>
                <td><p><?php echo $nk1_relationship; ?></p></td>
                </tr>
                <tr>
                <td><p>Address:</p></td>
                <td><p><?php echo $nk1_address1." ".$nk1_address2." ".$nk1_city." ".$nk1_state." ".$nk1_country; ?></p></td>
                </tr>
                <tr>
                <td><p>Phone numbers:</p></td>
                <td><p><?php echo $nk1_phone; ?></p></td>
                </tr>
                <tr>
                <td><p>Valid email address:</p></td>
                <td><p><?php echo $nk1_email; ?></p></td>
                </tr>
                <tr>
                <td><p>Place of work:</p></td>
                <td><p><?php echo $nk1_place_of_work; ?></p></td>
                </tr>
                <tr>
                <td><p>.</p></td>
                <td><p></p></td>
                </tr>
                <tr>
                <td><p>Name (Mr / Mrs / Miss):</p></td>
                <td><p><?php echo $nk2_name; ?></p></td>
                </tr>
                <tr>
                <td><p>Relationship:</p></td>
                <td><p><?php echo $nk2_relationship; ?></p></td>
                </tr>
                <tr>
                <td><p>Address:</p></td>
                <td><p><?php echo $nk2_address1." ".$nk2_address2." ".$nk2_city." ".$nk2_state." ".$nk2_country; ?></p></td>
                </tr>
                <tr>
                <td><p>Phone numbers:</p></td>
                <td><p><?php echo $nk2_phone; ?></p></td>
                </tr>
                <tr>
                <td><p>Valid email address:</p></td>
                <td><p><?php echo $nk2_email; ?></p></td>
                </tr>
                <tr>
                <td><p>Place of work:</p></td>
                <td><p><?php echo $nk2_place_of_work; ?></p></td>
                </tr>
                <tr>
                <td><p>Have you attended the nysc previously:</p></td>
                <td><p><?php echo $previous_nysc_status; ?></p></td>
                </tr>
       		<tr>
                <!--<td><p><b>Declaration:</b></p></td-->
                <td colspan="2" style="padding:15px 0;"><p><b> I, ................................................................................................
                            of .............................................. 
                            hereby declare on my honour that I am not and will not be engaged in any employment 
                            nor serve in the NYSC during the period of my course at the Nigerian Law School.
                        </b></p></td> 
                </tr>  
                <tr style="background-color:#FFF;">
                <td><p>Regular Signature:</p></td>
                <td><div id="print-sign"></div></td> 
                </tr>
                </tbody>
                </table>
    
  </div>
  <!-------------------------- Printout ends here------------------->
  <div class="col-md-2"></div>
</div>
<!--  Print section ends here---------------------------------------------------------------------->
  <div class="row text-center">
      <a href="#" onclick='return printStudentAffairs();' class="btn btn-success">Print Me <i class="glyphicon glyphicon-print"></i></a>
  </div>
<?php }} ?>
   </div> <!-- end row-->
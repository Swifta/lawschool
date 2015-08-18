
<div class="row">
    <div class="col-xs-12">
<?php if(true && $done == 0){ ?>

<form action="" method="post" id="biodata_form">
    
    <div style="margin:5px auto;">
    <h3 class="text-center" id="bio-red">STUDENT BIODATA FORM</h3>
    </div>
  <div class="form-group col-xs-12">	
    <p class="note small" id=""><i class="glyphicon glyphicon-warning-sign text-danger"></i> STUDENTS SHOULD PAINSTAKINGLY FILL ALL THE FORMS AS ANY ERROR DETECTED ON THE FORMS AT THE POINT OF SUBMISSION WILL BE REJECTED AND STUDENTS WILL HAVE TO GO BACK TO THE PORTAL TO CORRECT, REPRINT & RE-SUBMIT
        <br>** FULLNAMES MUST TALLY WITH WHAT IS ON YOUR ADMISSION LETTER
    </p>
  </div>
    
    <div class="form-group col-md-12" style="font-size:120%;">
        <?php echo $biodata_alert; ?>
    </div>
<div class="col-sm-6">
        <div class="form-group col-sm-12">
          <label for="surname">Surname*</label>
          <input type="text" class="form-control col-md-8" name="surname" id="surname" placeholder="" 
                 value="<?php echo $surname; ?>" required="required">
          <p class="help-block small">*Must tally with the <b>surname</b> on your admission letter</p>
        </div>
        <div class="form-group col-sm-12">
          <label for="otherNames">First Name*</label>
          <input type="text" class="form-control col-md-8" name="first_name" id="firstName" placeholder="" 
                 value="<?php echo $first_name; ?>" required="required">
          <p class="help-block small">*Must tally with the <b>first name</b> on your admission letter</p>
        </div>
        <div class="form-group col-sm-12">
          <label for="otherNames">Middle Names*</label>
          <input type="text" class="form-control col-md-8" name="middle_name" id="middleNames" placeholder="" 
                 value="<?php echo $middle_name; ?>">
          <p class="help-block small">*Must tally with the <b>middle name</b> on your admission letter</p>
        </div>
        <div class="form-group col-sm-12">
          <label for="emailaddress">Valid Email Address*</label>
          <input type="email" class="form-control col-md-8" name="email" id="emailaddress" placeholder="" 
                 value="<?php echo $email; ?>" disabled>
        </div>
    
        <div class="form-group col-sm-12">
          <label for="sex">Gender :    </label>
          <select name="gender" class="form-control" required="required">
              <option></option>
              <?php 
                  echo FormUtil::displaySex($gender);
              ?>
          </select>
        </div>
    
    
        <div class="form-group col-sm-12">
        <label for="religion">Religion</label>
            <select class="form-control" id ="religion" name="religion" required="required">
            <option></option>
              <?php 
                  echo FormUtil::displayRelligion($religion);
              ?>
            </select>
        </div>

        <div class="form-group col-sm-12">
          <label for="dob">Date of Birth</label>
          <input type="text" class="form-control col-md-8 dating" id="dob" placeholder="" name="dob" 
                 value="<?php echo $dob; ?>" required="required">
        </div>
          <div class="form-group col-sm-12">
            <label for="placeofbirth">Place of Birth</label>
            <input type="text" class="form-control col-md-8" id="placeofbirth" placeholder="" name="pob"
                   value="<?php echo $pob; ?>" required="required">
        </div>

        <div class="form-group col-sm-12">
          <label for="uni">University Attended*</label>
          <span id="parent_university">
              <select class="form-control" id ="university" name="university" 
                      onChange="determineUniversity(this);" required="required">
              <option></option>
              <?php 
                  echo FormUtil::displayUniversity($university);
              ?> 
              </select>
          </span>
          </div>
        <div class="form-group col-sm-12">
            <label for="phone">Phone Number(s) </label>
            <input type="number" class="form-control col-md-8" name="telephone" id="phone" 
                   value="<?php echo $telephone; ?>"  onKeyDown="if(this.value.length==11 && event.keyCode!=8) return false;"  placeholder="11 digits only" required="required">
        </div>
  

</div>

<div class="col-sm-6">
 
<div class="panel panel-default">
    <div class="panel-heading"><b>Address</b></div>
  <div class="panel-body">
            <div class="form-group col-sm-12">
            <label for="streetaddr">Street Address*</label>
            <input type="text" class="form-control col-md-8" id="streetaddr" placeholder="" required="required" 
                   maxlength="30" name="address1" value="<?php echo $address1; ?>" required="required">
            </div>
            <div class="form-group col-sm-12">
            <label for="line2">Address Line 2</label>
            <input type="text" class="form-control col-md-8" id="line2" placeholder="" 
                   name="address2" value="<?php echo $address2; ?>">
            </div>
            <div class="form-group col-sm-12">
            <label for="city">City</label>
            <input type="text" class="form-control col-md-8" id="line2" placeholder="" 
                   name="city" value="<?php echo $city; ?>" required="required">
            </div>
            <div class="form-group col-sm-12">
                <label for="region">State / Province / Region</label>
                <select class="form-control" id ="state" name="state" required="required">
                    <option></option>
                    <?php
                        echo FormUtil::displayState($state);
                    ?>
                </select>
            </div>
           <div class="form-group col-sm-12">
            <label for="country">Country</label>
                <select class="form-control" name="country" id ="country" required="required">
                    <option></option>
                    <?php
                        echo FormUtil::displayCountry($country);
                    ?>
                </select>
            </div>
             <div class="form-group col-sm-12">
                <label for="zipcode">ZIP / Postal Code</label>
                <input type="text" class="form-control" id="zipcode" maxlength="10" placeholder="" 
                       name="zip_code" value="<?php echo $zip_code; ?>" required="required">
             </div>
            <div class="form-group col-sm-12">
              <label for="state">State of Origin*</label>
                  <select class="form-control" id="state_of_origin" name="state_of_origin" required>
                        <option value=""></option>
                        <?php
                            echo FormUtil::displayState($state_of_origin);
                        ?>
                  </select>
              </div>
            <div class="form-group col-md-12">
              <label for="state">Local goverment*</label>
                  <select class="form-control" id ="local_govt" name="local_govt" required="required">
                    <option value=""></option>
                    
                  </select>
             </div>
            <div class="form-group col-sm-12">
            <label for="hometown">Home town</label>
                    <input type="text" class="form-control col-md-8" id="hometown" placeholder="" 
                           name="hometown" value="<?php echo $hometown; ?>" required="required">
            </div>
            <div class="form-group col-sm-12">
                    <label for="hometownaddr">Home town Address*</label>
                    <textarea class="form-control col-md-8" rows="3" id="hometownaddr" maxlength="300" 
                             name="hometown_address" required="required"><?php echo $hometown_address; ?></textarea>
            </div> 
      <input type="hidden" name="submit_biodata" value="yes" />

  </div>
</div>
 

    
</div>
  <div class="form-group col-sm-12 text-center">
  <button type="submit" class="btn btn-primary" id="center">SAVE AND PROCEED <i class="glyphicon glyphicon-save"></i></button>
  </div>
</form>

<?php }else{ ?>
      <div class="col-md-12"><h2 class="text-center alert alert-danger">
              Navigate to Other Tabs to PRINT individual FORMS</h2></div>
        <div style="margin-top:20px;" class="alert alert-success text-center">Your form has been submitted. You can now print a copy Each.</div>
<?php } ?>
    </div>
</div>
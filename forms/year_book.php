<div class="row">
    <div class="col-xs-12">
<?php if($next_tab > 1 && $done == 0){ ?>
       
<form action="" method="post" enctype="multipart/form-data">
    
    <div style="margin:5px auto;">
    <h3 class="text-center" id="bio-red">YEAR BOOK FORM</h3>
    </div>
  <div class="form-group col-xs-12">	
      
       <p class="note small" id=""><i class="glyphicon glyphicon-warning-sign text-danger"></i> STUDENTS SHOULD PAINSTAKINGLY FILL ALL THE FORMS AS ANY ERROR DETECTED ON THE FORMS AT THE POINT OF SUBMISSION WILL BE REJECTED AND STUDENTS WILL HAVE TO GO BACK TO THE PORTAL TO CORRECT, REPRINT & RE-SUBMIT </p>
        </div>
    
    <div class="form-group col-md-12" style="font-size:120%;">
        <?php echo $yearbook_alert; ?>
    </div>
      <div class="form-group col-md-8">
        <label for="yearbook_passport">Passport Photograph*</label>
        <input type="file" accept="image/png,image/jpeg,image/gif" id="yearbook_passport" name="yearbook_passport" required>
        <input type="hidden" name="submit_yearbook_form" value="yes" />
        <p class="help-block small text-danger"><b>AFFIX BLACK AND WHITE PASSPORT PHOTOGRAPH (45mm X  35mm).</b> <br />
            [<em class="text-danger">Not more than 20kb Image file</em>]</p>
      </div>
      <div class="form-group col-md-8 hidden-xs hidden-sm hidden-md hidden-lg hidden">
        <label for="experience">Experience at the Nigerian Law School/Hopes and aspirations in the Legal Profession</label>
        <textarea name="experience" class="col-md-6 form-control" rows="5" maxlength="350" 
                  placeholder="NOT be more than thirty (30) words" required><?php echo $experience; ?>NONE</textarea>
      </div>

    
<div class="form-group col-md-12">
<button type="submit" class="btn btn-primary" id="center">UPLOAD AND PROCEED <i class="glyphicon glyphicon-arrow-up"></i></button>
</div>
</form>
  
<?php 

}
else{ 
    if($next_tab < 2){
?>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 note" style="margin:30px auto;">
        <p class="alert alert-warning text-center">You need to Complete Bio Data &amp; ID CARD Form</p>
            </div>
            <div class="col-sm-2"></div>
        </div>
<?php
    }
    else{
?>
   <!-- Print section starts here-------------------------------------------------------------------->
  <!-------------------------- Printout starts here------------------->
  <div class="row">
      <div class="col-md-12"><h2 class="text-center alert alert-danger">
              Scroll Down to Print Form and Navigate to Other Tabs to PRINT individual FORMS</h2></div>
  <div class="col-md-2"></div>
  <div class="col-md-8 print-page" id="yearBookContainer" style="text-align:center;">
  		<div class="print-header text-center" style="text-align: center; line-height:0px;">
                <img width="50" height="50" src="images/logo1.jpg" class="print_logo"/>
	        <h5>COUNCIL OF LEGAL EDUCATION</h5>
                <h5>NIGERIAN LAW SCHOOL</h5>
                <h5>LAGOS CAMPUS</h5>
                <h5>2015/2016 (OCTOBER) ACADEMIC SESSION</h5>
                <h5>STUDENT YEAR BOOK FORM</h5>
                <hr>
	          </div>

    		<!-- <h4 class="text-center">STUDENT YEAR BOOK FORM</h4> -->
            
            <table class="print-table table-striped">
                <tbody>
                <tr style="background-color:#FFF;">
                <td><img class="img-thumbnail" <?php echo 'src="data:image/'.$yearbook_passport_type.';base64,' .
                        $yearbook_passport_data . '"'; ?>
                         height="80" width="80" style="margin-bottom:10px;"></td>
                <td></td>
                <td></td>
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
                <td>Valid Email Address:</p></td>
                <td><p><?php echo $email; ?></p></td>
                </tr>
                <tr>
                <td><p>University Attended:</p></td>
                <td><p><?php echo $university; ?></p></td>
                </tr>
                <tr>
                <td><p>State of Origin:</p></td>
                <td><p><?php echo $state_of_origin; ?></p></td>
                </tr>
                <tr>
                <td><p>Residential Address:</p></td>
                <td><p><?php echo $address1." ".$address2." ".$city." ".$state." ".$country; ?></p></td>
                </tr>
                <tr>
                <td><p>Phone Number(s):</p></td>
                <td><p>07066365036</p></td> 
                </tr>
                </tbody>
                </table>
    
  </div>
  <div class="col-md-2"></div>
</div>
  <!-------------------------- Printout ends here------------------->
  <div class="row text-center">
      <a href="#" onclick='return printYearBook();' class="btn btn-success">Print Me</a>
  </div>

 
<?php } }?>
    </div>
</div>
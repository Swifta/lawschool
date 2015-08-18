    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="jquery.bootstrap.wizard.js"></script>
        <script src="script/bootstrap-datepicker.js"></script>
        <script src="bootstrap-sweetalert-master/lib/sweet-alert.js"></script>
        <script src="script/jquery.validVal.min.js" type="text/javascript"></script>
	<script src="prettify.js"></script>	
	<script>
            
            function printId(){
                var divContents = $("#idCardContainer").html();
                var printWindow = window.open('', '', 'height=400,width=800');
                printWindow.document.write('<html><head><title>ID CARD FORM</title>');
                printWindow.document.write('</head><body >');
                printWindow.document.write(divContents);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
                return false;
            }
            function printYearBook(){
                var divContents = $("#yearBookContainer").html();
                var printWindow = window.open('', '', 'height=400,width=800');
                printWindow.document.write('<html><head><title>Year Book FORM</title>');
                printWindow.document.write('</head><body >');
                printWindow.document.write(divContents);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
                return false;
            }
            
            function printStudentAffairs(){
                var divContents = $("#studentAffairsContainer").html();
                var printWindow = window.open('', '', 'height=400,width=800');
                printWindow.document.write('<html><head><title>Student Affairs FORM</title>');
                printWindow.document.write('</head><body >');
                printWindow.document.write(divContents);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
                return false;
            }
            
            
        function determineSpouse(inst){
            var val = inst.value;
            //alert(val);
            if(val === "Single"){
                $(".disable_choosen").prop('disabled', true);
            }
            else{
                $(".disable_choosen").prop('disabled', false);
            }
        }
        
        function determineUniversity(inst){
            var val = inst.value;
            //alert(val);
            if(val === "Other"){
                var parent = document.getElementById("parent_university");
                var old = document.getElementById("university");
                parent.removeChild(old);
                var newTxtField = document.createElement('input');
                newTxtField.setAttribute('id', 'university');
                newTxtField.setAttribute('name', 'university');
                newTxtField.setAttribute('class', 'form-control');
                newTxtField.setAttribute('required', 'required');
                parent.appendChild(newTxtField);
            }
        }
        
        function submitForm() {
          swal({
            title: "Are you sure?", 
            text: "You will not be able to EDIT after Submission", 
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonText: "Yes, submit it!",
            confirmButtonColor: "#ec6c62"
          }, function() {
              location.href='?done=yes';
          });
          return false;
        }
        
        window.onload = function(){
            <?php
            if($biodata_submitted){          
            ?>
             swal("Successful", "<?php echo $biodata_submitted_msg; ?>", "success")
            <?php
            }
            ?>
            <?php
            if($id_card_submited){          
            ?>
             swal("Successful", "<?php echo $id_card_submited_msg; ?>", "success")
            <?php
            }
            ?>
            <?php
            if($yearbook_submitted){          
            ?>
             swal("Successful", "<?php echo $yearbook_submitted_msg; ?>", "success")
            <?php
            }
            ?>
        };
        
	$(document).ready(function() {
            $('.submit_form').click(function() {
              return submitForm();
            });
            $( ".dating" ).datepicker();
            $("#biodata_form").validVal();
            
	  	$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#rootwizard .progress-bar').css({width:$percent+'%'});
		}});
		window.prettyPrint && prettyPrint()
	});
        
            $(document).ready(function() {
                var useState = "<?php echo @$state_of_origin; ?>";
                var pickedLga = "<?php echo @$local_govt; ?>";
                $.ajax({
                        type: "POST",
                        url: "aj_get_lga_json.php",
                        data: "state="+ useState,
                        success: function(data){
                            var json = $.parseJSON(data);
                            $('#local_govt')
                                .find('option')
                                .remove()
                                .end()
                            ;
                            var opt = new Option(pickedLga, pickedLga);
                            $('#local_govt').append($(opt));
                            $.each(json.data, function(index, element) {
                                //alert(element); 
                                var option = new Option(element, element);
                                if(element !== pickedLga){
                                    $('#local_govt').append($(option));
                                }
                            });
                        }
                    });
            });
            
            $('#state_of_origin').change( function() {
                $(this).find(":selected").each(function () {
                         //alert( $(this).val() );
                    $.ajax({
                        type: "POST",
                        url: "aj_get_lga_json.php",
                        data: "state="+ $(this).val(),
                        success: function(data){
                            var json = $.parseJSON(data);
                            $('#local_govt')
                                .find('option')
                                .remove()
                                .end()
                            ;
                            $.each(json.data, function(index, element) {
                                //alert(element); 
                                var option = new Option(element, element);
                                $('#local_govt').append($(option));
                            });
                        }
                    });
                 });
            });
	</script>
  </body>
</html>
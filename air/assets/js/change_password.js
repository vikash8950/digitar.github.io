$(document).ready(function(){

	$('#stu_wrong_email_msg').hide();
	$('#stu_pwd_mismatch').hide();
	$('#stu_wrong_pwd_msg').hide();
	$('#pwd_change_btn2').hide();

	$('#stu_email_id').blur(function(){
		var email = $('#stu_email_id').val();
		 $.ajax({
            type: 'POST',
            url: base_url + 'change_password/get_email',
            data:  JSON.stringify(email),
            dataType: 'json',
         })
         .done(function(json) {
              if (json != 1){
                $('#stu_wrong_email_msg').show();
				$('#pwd_change_btn2').show();
				$('#pwd_change_btn1').hide();
              }//end if
              else{
              	$('#stu_wrong_email_msg').hide();
               $('#pwd_change_btn1').show();	
               $('#pwd_change_btn2').hide();
              }

         })
          .fail(function(xhr, status, errorThrown) {

            alert("Sorry, there was a problem!");
            console.log("Error: " + errorThrown);
            console.log("Status: " + status);
            console.dir(xhr);
         });

			
	});//end of function

	$('#stu_old_pwd').blur(function(){
		var pwd = $('#stu_old_pwd').val();
		 $.ajax({
            type: 'POST',
            url: base_url + 'change_password/get_pwd',
            data:  JSON.stringify(pwd),
            dataType: 'json',
         })
         .done(function(json) {
              if (json != 1){
                $('#stu_wrong_pwd_msg').show();
				$('#pwd_change_btn2').show();
				$('#pwd_change_btn1').hide();
              }//end if
              else{
              	$('#stu_wrong_pwd_msg').hide();
               $('#pwd_change_btn1').show();	
               $('#pwd_change_btn2').hide();
              }

         })
          .fail(function(xhr, status, errorThrown) {

            alert("Sorry, there was a problem!");
            console.log("Error: " + errorThrown);
            console.log("Status: " + status);
            console.dir(xhr);
         });

			
	}); //end of function match pwd

	$('#stu_new_pwd2').blur(function(){
		var new_pwd1 = $('#stu_new_pwd1').val();
		//alert(new_pwd1); 
		var new_pwd2 = $('#stu_new_pwd2').val();
		if (new_pwd2 != new_pwd1) {
			$('#stu_pwd_mismatch').show();
			$('#pwd_change_btn2').show();
			$('#pwd_change_btn1').hide();
		} else {
			$('#pwd_change_btn1').show();
			$('#pwd_change_btn2').hide();
			$('#stu_pwd_mismatch').hide();
		}
	});
});
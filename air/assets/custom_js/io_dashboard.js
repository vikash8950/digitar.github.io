var is_submit = true;
$(document).ready(function(){
    $('#users_list_tbl').DataTable();

});

function assign_marks(user_id){

    $.ajax({
        type:'POST',
        url:base_url+'io_dashboard/assign_marks',
        data:JSON.stringify(user_id),
        dataType:'json',
       
    })
	  .done(function( json ) { 

	      window.location.href = base_url+'io_marks';

	  })
	  .fail(function( xhr, status, errorThrown ) {

	    alert("Sorry, there was a problem!");
	    console.log("Error: " + errorThrown);
	    console.log("Status: " + status);
	    console.dir(xhr);
	  });
}

function validate_marks() {
	/*
    var rx = /^[1-9](?:\.\d{1,2})?$/;
    //var rx = (?<![\d\.-])\d(\.\d)?(?!(\.\d)|\d)|(?<![\d\.-])10(?!(\.\d)|\d]);
    var ele = document.getElementById(id);
    if ($('#'+id).val() == 10) {
    	is_submit = true;
    } else if(rx.test(ele.value)) { 
       is_submit = true;
    }else{ 
       is_submit = false;
    }

    showNotification(id,is_submit);
    */
    $.each(['A', 'B', 'C', 'D', 'E'], function( index, value ) {
    	 var marks = $('#'+value).val();
    	 console.log(marks); 
	 	 if ( marks > 10 || marks<1) {
	 	 	 is_submit = false;
	 	 	 showNotification(value,is_submit);
	 	 }
	});
}

function showNotification(id,is_submit){
	console.log("notificaiton ID"+id+' is submit'+is_submit)
	if (is_submit) {
		$('#'+id).css({'border-color':'#ccc'});
	} else {
		$('#'+id).css({'border':'1px solid red','border-radius': '4px'});
    	$('#'+id).focus();
    	var noti_html = '<div class="notification" style="color:red;"> Please enter vaild marks between 1 to 10 (2 decimal places only)!</div>';
	
		$('#'+id).after(noti_html);
		$('.notification').fadeIn(3000);     
	   	setTimeout(function() {  
	   		$('.notification').remove();
	    }, 3000);
	}
}

function submit_details(){

	var sro_id = $('#sro_id').val();

	if (sro_id == '') {
		$('#sro_id_text').text('Please input SRO ID, before sending details.');
	} else {
		is_submit = true;
		validate_marks();

		if (is_submit) {

			var data = JSON.stringify($('#assign_marks').serializeArray(this));
			

		    $.ajax({
		        type:'POST',
		        url:base_url+'io_marks/add_marks',
		        data:data,
		        dataType:'json',
		       
		    })
			.done(function( json ) { 

			    window.location.href = base_url+'io_dashboard';
			})
			.fail(function( xhr, status, errorThrown ) {

			    alert("Sorry, there was a problem!");
			    console.log("Error: " + errorThrown);
			    console.log("Status: " + status);
			    console.dir(xhr);
			});
			
		}

	}
}

function update_details(){
	is_submit = true;
		validate_marks();
	if (is_submit) {
	
		var data = JSON.stringify($('#assign_marks').serializeArray(this));

	    $.ajax({
	        type:'POST',
	        url:base_url+'io_marks/update_details',
	        data:data,
	        dataType:'json',
	       
	    })
		  .done(function( json ) { 

		      window.location.href = base_url+'io_marks';

		  })
		  .fail(function( xhr, status, errorThrown ) {

		    alert("Sorry, there was a problem!");
		    console.log("Error: " + errorThrown);
		    console.log("Status: " + status);
		    console.dir(xhr);
		  });
	}

}
var is_submit = true;
$(document).ready(function(){
    $('#users_list_tbl').DataTable();
});

function validate_marks(id) {
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

function assign_marks(user_id){

    $.ajax({
        type:'POST',
        url:base_url+'sro_dashboard/assign_marks',
        data:JSON.stringify(user_id),
        dataType:'json',
       
    })
	.done(function( json ) { 

	    window.location.href = base_url+'sro_marks';

	})
	.fail(function( xhr, status, errorThrown ) {

	    alert("Sorry, there was a problem!");
	    console.log("Error: " + errorThrown);
	    console.log("Status: " + status);
	    console.dir(xhr);
	});
}

function view_application(user_id){

    $.ajax({
        type:'POST',
        url:base_url+'sro_dashboard/assign_marks',
        data:JSON.stringify(user_id),
        dataType:'json',
       
    })
	.done(function( json ) { 

	    window.location.href = base_url+'sro_marks/application';

	})
	.fail(function( xhr, status, errorThrown ) {

	    alert("Sorry, there was a problem!");
	    console.log("Error: " + errorThrown);
	    console.log("Status: " + status);
	    console.dir(xhr);
	});
}

function submit_details(){
	is_submit = true;
	validate_marks();
	if (is_submit) {

		
		var data = JSON.stringify($('#assign_marks').serializeArray(this));

	    $.ajax({
	        type:'POST',
	        url:base_url+'sro_marks/add_marks',
	        data:data,
	        dataType:'json',
	       
	    })
		  .done(function( json ) { 

		      window.location.href = base_url+'sro_dashboard';

		  })
		  .fail(function( xhr, status, errorThrown ) {

		    alert("Sorry, there was a problem!");
		    console.log("Error: " + errorThrown);
		    console.log("Status: " + status);
		    console.dir(xhr);
		  });
	}

}
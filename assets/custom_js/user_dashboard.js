function add_strength_row() {
	var li = '<li><input class="form-control" type="text" name="strength" placeholder="Enter Your Strength"></li>';

	$('#Strengths').append(li);
}

function add_weakness_row() {
	var li = '<li><input class="form-control" type="text" name="weakness" placeholder="Enter Your Weakness"></li>';

	$('#Weaknesses').append(li);
}

function submit_details(){

	var io_id = $('#io_id').val();

	if (io_id == '') {
		$('#io_id_text').text('Please input IO ID, before sending details.');
	} else {

		var data = JSON.stringify($('#add_details_from').serializeArray(this));

	    $.ajax({
	        type:'POST',
	        url:base_url+'user_dashboard/submit_details',
	        data:data,
	        dataType:'json',
	       
	    })
		  .done(function( json ) { 

		      window.location.href = base_url+'user_marks';

		  })
		  .fail(function( xhr, status, errorThrown ) {

		    alert("Sorry, there was a problem!");
		    console.log("Error: " + errorThrown);
		    console.log("Status: " + status);
		    console.dir(xhr);
		  });

	}
}

function update_details(){

	var data = JSON.stringify($('#add_details_from').serializeArray(this));

    $.ajax({
        type:'POST',
        url:base_url+'user_marks/update_details',
        data:data,
        dataType:'json',
       
    })
	  .done(function( json ) { 

	      window.location.href = base_url+'user_marks';

	  })
	  .fail(function( xhr, status, errorThrown ) {

	    alert("Sorry, there was a problem!");
	    console.log("Error: " + errorThrown);
	    console.log("Status: " + status);
	    console.dir(xhr);
	  });

}
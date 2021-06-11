$(document).ready(function(){

	$('#edit_profile_hidden_div').hide(); 

	$("#profile_edit_id").click(function(){
		$('#edit_profile_hidden_div').show(); 
		$('#profile_div').hide(); 
	});

	$("#cancel_editing_div").click(function(){
		$('#profile_div').show(); 
		$('#edit_profile_hidden_div').hide(); 
	});
});


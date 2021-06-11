<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab padding0" id="form_tab">
    <!-- flight section -->
    <div class="bhoechie-tab-content active padding0">
			<div class="row">
				<h2>User Details</h2>
				<hr>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>Name</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user_data['first_name']; ?> <?php echo $user_data['last_name']; ?></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>Email</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user_data['email']; ?></h4>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>Date of Birth</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo date_format(date_create($user_data['dob']),"d-m-Y"); ?></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>Age</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user_data['age']; ?> years</h4>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>Ser No.</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user_data['ser_no']; ?></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>Mobile</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user_data['mobile']; ?></h4>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>MED CAT</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user_data['med_cat']; ?></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>Rank</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user_data['rank']; ?></h4>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>DOM</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user_data['dom']; ?></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>DOJ</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user_data['doj']; ?></h4>
				</div>
			</div>
			<div class="row admt">
				<div class="col-lg-5 col-md-5 col-sm-12">
					<h4><b>Strengths</b></h4>
					<ul>
						<?php foreach ($user_details['strengths'] as $key => $value) { ?>
							<li><?php echo $value['s_name']; ?></li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-12"></div>
				<div class="col-lg-5 col-md-5 col-sm-12">
					<h4><b>Weaknesses</b></h4>
					<ul id="Weaknesses">
						<?php foreach ($user_details['weaknesses'] as $key => $value) { ?>
							<li><?php echo $value['w_name']; ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="row admt-heads">
				<hr>
				<h3>Assign Marks</h3>
				<hr>
			</div>
			<form id="assign_marks">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<table class="table">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th class="text-center" width="30%">Topic</th>
									<th class="text-center" width="20%">Marks</th>
									<th class="text-center">Remarks</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td class="text-center">A</td>
									<td>
										<input class="form-control mt-0 pinpad" placeholder="Enter Marks" name="A" id="A" min="1" max="10" autocomplete="off" >
									</td>
									<td rowspan="5">
										<textarea class="form-control mt-0" rows="11" name="io_remarks" placeholder="Enter Remarks" id="io_remarks"></textarea>
									</td>
								</tr>
								<tr>
									<td>2.</td>
									<td class="text-center">B</td>
									<td>
										<input class="form-control mt-0 pinpad" placeholder="Enter Marks" name="B" id="B" min="1" max="10" autocomplete="off" >
									</td>
								</tr>
								<tr>
									<td>3.</td>
									<td class="text-center">C</td>
									<td>
										<input class="form-control mt-0 pinpad" placeholder="Enter Marks" name="C" id="C" min="1" max="10" autocomplete="off" >
									</td>
								</tr>
								<tr>
									<td>4.</td>
									<td class="text-center">D</td>
									<td>
										<input class="form-control mt-0 pinpad" placeholder="Enter Marks" name="D" id="D" min="1" max="10" autocomplete="off" >
									</td>
								</tr>
								<tr>
									<td>5.</td>
									<td class="text-center">E</td>
									<td>
										<input class="form-control mt-0 pinpad" placeholder="Enter Marks" name="E" id="E" min="1" max="10" autocomplete="off" >
									</td>
								</tr>
								<!--<tr>
									<td>
										<b>Number Input:</b>
										  <input type="text" step="any" min="0"  name="number" value="" 
										         oninput="check(this)" />
										  <input type="submit" class="submit" value="Save" />
									</td>
								</tr>-->
							</tbody>
						</table>
					</div>
				</div>
				<?php if (empty($user_details['io_marks'])) { ?>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3">
							<h4>SRO ID</h4>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3">
							<div class='input-group'>
			                    <input type='text' id="sro_id" name="sro_id" class="form-control">
			                    <input type='hidden' id="user_id" name="user_id" class="form-control" value="<?php echo $user_data['user_id']; ?>">
			                    <label id="sro_id_text" class="text-danger"></label>
			                </div>
						</div>
					</div>
				<?php } ?>

				<?php if (!empty($user_details['io_marks']) && empty($user_details['sro_marks'])) { ?>
				<input type='hidden' id="user_id" name="user_id" class="form-control" value="<?php echo $user_data['user_id']; ?>">
				<?php } ?>
			</form>

			<div class="row admt-heads button-head">
				<hr>
				<?php if (empty($user_details['io_marks'])) { ?>
				<button type="button" id="bt_register_emp" onclick="submit_details()" class="btn btn-main margintop10 clr-white">Send to SRO</button>
				<?php } ?>

				<?php if (!empty($user_details['io_marks']) && empty($user_details['sro_marks'])) { ?>
				<button type="button" onclick="update_details()" class="btn btn-main margintop10 clr-white">Update Marks</button>
				<?php } ?>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">

	$('#io_remarks').val('<?php echo $user_data['io_remarks']; ?>');

	var io = <?php echo json_encode($user_details['io_marks'],true); ?>;

	if (io.length > 0) {
    	$.each(io, function (key, item) {

    		$('#'+item.type).val(item.marks);

		});
    }
	
    $( function () {
        $( ".pinpad" ).pinpad({
           
        	maxLength:4,
        	display: {
		      decPoint:".",
		      cancel:"Clear",
		      correct:"Back",
		      confirm:"Enter"
		  	},

        	
        });
    });
</script>
<script>
 function check(input) {
   if (input.value > 10) {
     input.setCustomValidity('The number must not be Greater than 10.');
   } else {
     // input is fine -- reset the error message
     input.setCustomValidity('');
   }
 }
</script>


<script src="<?php echo base_url(); ?>assets/custom_js/io_dashboard.js?v=1.3"></script>

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
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<hr>
					<h4>Marks by IO  &nbsp;
						(<span>NAME - <b><?php echo $officials['io']['first_name']; ?> <?php echo $officials['io']['last_name']; ?></b></span>)  &nbsp; 
						(<span>SERVICE No. - <b><?php echo $officials['io']['ser_no']; ?></b></span>)  &nbsp;
						(<span>RANK - <b><?php echo $officials['io']['rank']; ?></b></span>)  &nbsp;
					</h4>
					<hr>
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
							<?php $sno=1; foreach ($user_details['io_marks'] as $key => $value) { ?>
								<tr>
									<td><?php echo $sno; ?>.</td>
									<td class="text-center"><?php echo $value['type']; ?></td>
									<td class="text-center"><?php echo $value['marks']; ?></td>
									<?php if ($key == 0) { ?>
									<td rowspan="5" class="text-center"><?php echo $user_data['io_remarks']; ?></td>
									<?php } ?>
								</tr>
							<?php $sno++; } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row admt-heads">
				<hr>
				<h4>
					Assign Marks &nbsp;
					(<span>NAME - <b><?php echo $officials['sro']['first_name']; ?> <?php echo $officials['sro']['last_name']; ?></b></span>)  &nbsp; 
					(<span>SERVICE No. - <b><?php echo $officials['sro']['ser_no']; ?></b></span>)  &nbsp;
					(<span>RANK - <b><?php echo $officials['sro']['rank']; ?></b></span>)  &nbsp;
				</h4>
				<hr>
			</div>
			<form id="assign_marks">
				<div class="row">
					<input type='hidden' id="user_id" name="user_id" class="form-control" value="<?php echo $user_data['user_id']; ?>">
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
										<input autocomplete="off" class="form-control pinpad mt-0" placeholder="Enter Marks" name="A" id="A" min="1" max="10" >
									</td>
									<td rowspan="5">
										<textarea class="form-control mt-0" rows="11" name="sro_remarks" placeholder="Enter Remarks" id="sro_remarks"></textarea>
									</td>
								</tr>
								<tr>
									<td>2.</td>
									<td class="text-center">B</td>
									<td>
										<input autocomplete="off" class="form-control pinpad mt-0" placeholder="Enter Marks" name="B" id="B" min="1" max="10" >
									</td>
								</tr>
								<tr>
									<td>3.</td>
									<td class="text-center">C</td>
									<td>
										<input autocomplete="off" class="form-control pinpad mt-0" placeholder="Enter Marks" name="C" id="C" min="1" max="10" >
									</td>
								</tr>
								<tr>
									<td>4.</td>
									<td class="text-center">D</td>
									<td>
										<input autocomplete="off" class="form-control pinpad mt-0" placeholder="Enter Marks" name="D" id="D" min="1" max="10" >
									</td>
								</tr>
								<tr>
									<td>5.</td>
									<td class="text-center">E</td>
									<td>
										<input autocomplete="off" class="form-control pinpad mt-0" placeholder="Enter Marks" name="E" id="E" min="1" max="10" >
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</form>

			<div class="row admt-heads button-head">
				<hr>
				<button type="button" id="bt_register_emp" onclick="submit_details()" class="btn btn-main margintop10 clr-white">Assign Marks</button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	
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
 function check(id) {
   if (input.value > 10) {
     input.setCustomValidity('The number must not be Greater than 10.');
   } else {
     // input is fine -- reset the error message
     input.setCustomValidity('');
   }
 }
</script>
<script src="<?php echo base_url(); ?>assets/custom_js/sro_dashboard.js?v=1.3"></script>

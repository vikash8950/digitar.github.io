<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab padding0" id="form_tab">
    <!-- flight section -->
    <div class="bhoechie-tab-content active padding0">
			<div class="row">
				<h2>Personal Details</h2>
				<hr>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>Name</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><b>Email</b></h4>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<h4><?php echo $user['email']; ?></h4>
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
					<h4><?php echo $user['mobile']; ?></h4>
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

			<div class="row admt-heads">
				<hr>
				<h3>Professional Details</h3>
				<hr>
			</div>
			<form id="add_details_from">
				<div class="row admt">
					<div class="col-lg-5 col-md-5 col-sm-12">
						<h4><b>Add Strengths</b></h4>
						<ul id="Strengths">
							<li>
								<input class="form-control" type="text" name="strength" placeholder="Enter Your Strength">
							</li>
							<li>
								<input class="form-control" type="text" name="strength" placeholder="Enter Your Strength">
							</li>
							<li>
								<input class="form-control" type="text" name="strength" placeholder="Enter Your Strength">
							</li>
							<li>
								<input class="form-control" type="text" name="strength" placeholder="Enter Your Strength">
							</li>
							<li>
								<input class="form-control" type="text" name="strength" placeholder="Enter Your Strength">
							</li>
						</ul>
						<button type="button" onclick="add_strength_row()" class="btn btn-main-sm margintop10 clr-white">+ Add More Strength</button>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12"></div>
					<div class="col-lg-5 col-md-5 col-sm-12">
						<h4><b>Add Weaknesses</b></h4>
						<ul id="Weaknesses">
							<li>
								<input class="form-control" type="text" name="weakness" placeholder="Enter Your Weakness">
							</li>
							<li>
								<input class="form-control" type="text" name="weakness" placeholder="Enter Your Weakness">
							</li>
							<li>
								<input class="form-control" type="text" name="weakness" placeholder="Enter Your Weakness">
							</li>
							<li>
								<input class="form-control" type="text" name="weakness" placeholder="Enter Your Weakness">
							</li>
							<li>
								<input class="form-control" type="text" name="weakness" placeholder="Enter Your Weakness">
							</li>
						</ul>
						<button type="button" onclick="add_weakness_row()" class="btn btn-main-sm margintop10 clr-white">+ Add More Weakness</button>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3">
						<h4>IO ID</h4>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class='input-group date' id='datetimepicker'>
		                    <input type='text' id="io_id" name="io_id" class="form-control">
		                    <label id="io_id_text" class="text-danger"></label>
		                </div>
					</div>
				</div>
			</form>

			<div class="row admt-heads button-head">
				<hr>
				<button type="button" id="bt_register_emp" onclick="submit_details()" class="btn btn-main margintop10 clr-white">Send to IO</button>
			</div>
		
	</div>
</div>
<!-- Modal -->

<div id="check_email_alert" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-red clr-white">
        <h4 class="modal-title">Alert!</h4>
      </div>
      <div class="modal-body">
      	<h2>Email Already Registered ! Use something else.</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default bg-red clr-white" data-dismiss="modal">Ok</button>
      </div>
    </div>

  </div>
</div>

<script src="<?php echo base_url(); ?>assets/custom_js/user_dashboard.js?v=1.2"></script>

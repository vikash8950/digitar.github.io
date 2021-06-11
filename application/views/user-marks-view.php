<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab padding0" id="form_tab">
    <!-- flight section -->
    <div class="bhoechie-tab-content active padding0">
    	<div class="row">
    		<div class="col-lg-2 col-md-2"></div>
    		<div id="User_details" class="col-lg-8 col-md-8">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h4>User Details</h4>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<table class="table">
							<thead>
								<tr>
									<th>SER No.</th>
									<th>RANK</th>
									<th>NAME</th>
									<th>DOB</th>
									<th>MED CAT</th>
									<th>AGE</th>
									<th>DOM</th>
									<th>DOJ</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?php echo $user_data['ser_no']; ?></td>
									<td><?php echo $user_data['rank']; ?></td>
									<td><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></td>
									<td><?php echo date_format(date_create($user_data['dob']),"d-m-Y"); ?></td>
									<td><?php echo $user_data['med_cat']; ?></td>
									<td><?php echo $user_data['age']; ?> years</td>
									<td><?php echo $user_data['dom']; ?></td>
									<td><?php echo $user_data['doj']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<?php if (!empty($user_details['io_marks'])) { ?>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h4><b>Strengths</b></h4>
										<ul>
											<?php foreach ($user_details['strengths'] as $key => $value) { ?>
												<li><?php echo $value['s_name']; ?></li>
											<?php } ?>
										</ul>
									</td>
									<td>
										<h4><b>Weaknesses</b></h4>
										<ul id="Weaknesses">
											<?php foreach ($user_details['weaknesses'] as $key => $value) { ?>
												<li><?php echo $value['w_name']; ?></li>
											<?php } ?>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<?php } else  {?>
					<form id="add_details_from">
						<div class="col-lg-5 col-md-5 col-sm-12">
							<h4><b>Add Strengths</b></h4>
							<ul id="Strengths">
								<?php foreach ($user_details['strengths'] as $key => $value) { ?>
									<li>
										<input class="form-control" type="text" name="strength" placeholder="Enter Your Strength" value="<?php echo $value['s_name']; ?>">
									</li>
								<?php } ?>
							</ul>
							<button type="button" onclick="add_strength_row()" class="btn btn-main-sm margintop10 clr-white">+ Add More Strength</button>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12"></div>
						<div class="col-lg-5 col-md-5 col-sm-12">
							<h4><b>Add Weaknesses</b></h4>
							<ul id="Weaknesses">
								<?php foreach ($user_details['weaknesses'] as $key => $value) { ?>
									<li>
										<input class="form-control" type="text" name="weakness" placeholder="Enter Your Weakness" value="<?php echo $value['w_name']; ?>">
									</li>
								<?php } ?>
							</ul>
							<button type="button" onclick="add_weakness_row()" class="btn btn-main-sm margintop10 clr-white">+ Add More Weakness</button>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 text-right" style="margin-top: 20px;">
							<button type="button" id="bt_register_emp" onclick="update_details();" class="btn btn-main margintop10 clr-white">Update</button>
						</div>
					</form>
					<?php } ?>
				</div>
				<div class="row admt-heads">
					<h4>Status</h4>
					<hr>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<?php if (empty($user_details['io_marks'])) { ?>
							<label class="text-danger"> Pending review by IO.</label>
						<?php } else if (empty($user_details['sro_marks'])) { ?>
							<label class="text-danger"> Pending review by SRO.</label>
						<?php } else  {?>
							<label class="text-success"> Reviewed by SRO.</label>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2">
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/custom_js/user_dashboard.js?v=1.2"></script>


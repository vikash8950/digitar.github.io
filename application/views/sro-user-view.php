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
									<td><?php echo $user_data['first_name']; ?> <?php echo $user_data['last_name']; ?></td>
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
				</div>
				<div class="row admt-heads">
					<hr>
				</div>
				<?php if (!empty($user_details['sro_marks'])) { ?>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h4>Marks by IO  &nbsp;
								(<span>NAME - <b><?php echo $officials['io']['first_name']; ?> <?php echo $officials['io']['last_name']; ?></b></span>)  &nbsp; 
								(<span>SERVICE No. - <b><?php echo $officials['io']['ser_no']; ?></b></span>)  &nbsp;
								(<span>RANK - <b><?php echo $officials['io']['rank']; ?></b></span>)  &nbsp;
							</h4>
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

						<div class="col-lg-12 col-md-12 col-sm-12">
							<h4>Marks by SRO  &nbsp;
								(<span>NAME - <b><?php echo $officials['sro']['first_name']; ?> <?php echo $officials['sro']['last_name']; ?></b></span>)  &nbsp; 
								(<span>SERVICE No. - <b><?php echo $officials['sro']['ser_no']; ?></b></span>)  &nbsp;
								(<span>RANK - <b><?php echo $officials['sro']['rank']; ?></b></span>)  &nbsp;
							</h4>
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
									<?php $sno=1; foreach ($user_details['sro_marks'] as $key => $value) { ?>
										<tr>
											<td><?php echo $sno; ?>.</td>
											<td class="text-center"><?php echo $value['type']; ?></td>
											<td class="text-center"><?php echo $value['marks']; ?></td>
											<?php if ($key == 0) { ?>
											<td rowspan="5" class="text-center"><?php echo $user_data['sro_remarks']; ?></td>
											<?php } ?>
										</tr>
									<?php $sno++; } ?>
								</tbody>
							</table>
						</div>
					</div>
				<?php } else { ?>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<label class="text-danger"> Marks not updated yet.</label>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="col-lg-2 col-md-2">
				<button type="button" class="btn btn-sm-main" onclick="printDiv('User_details');">Print</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function printDiv(divName) {
	     var printContents = document.getElementById(divName).innerHTML;
	     var originalContents = document.body.innerHTML;

	     document.body.innerHTML = printContents;

	     window.print();

	     document.body.innerHTML = originalContents;
	}
</script>

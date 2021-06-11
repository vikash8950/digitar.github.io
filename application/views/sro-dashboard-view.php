<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab padding0">
    <!-- flight section -->
    <div class="bhoechie-tab-content active padding0">
		<div id="emp_users">
			<div class="row admt-heads">
				<h2>Assign Marks</h2>
				<hr>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 margintop10">
					<div class="table-responsive" style="overflow-x:scroll;">
						<table id="users_list_tbl" class="table table-bordered results table-striped">
							<thead>
								<tr>
						          <th style="min-width: 40px;" width="5%">S No.</th>
						          <th style="min-width: 150px;" width="15%">User ID</th>
						          <th style="min-width: 150px;">Name </th>
						          <th style="min-width: 150px;">Rank</th>
						          <th style="min-width: 150px;">DOB</th>
						          <th style="min-width: 50px;">Action</th>			
						        </tr>
							</thead>
							<tbody id="user_tbody">
								<?php 
					            $serial = 1;
					            if (!empty($users))
					            foreach($users as $row) 
					            {  ?> 
							    	<tr>
							    	<td><?php echo $serial; ?></td>
							        <td id="id<?php echo $serial; ?>"><?php echo $row['user_id']; ?></td>
							        <td><?php echo $row['first_name']; ?>&nbsp;<?php echo $row['last_name']; ?></td>
							        <td><?php echo $row['rank']; ?></td>
							        <td><?php echo date_format(date_create($row['dob']),"d-m-Y"); ?></td>
					                <td class="text-center">
					                	<?php if (empty($row['marks'])) { ?>
					                		<button type="button" class="btn btn-sm-main" onclick="assign_marks('<?php echo $row['user_id']; ?>');">Assign</button>
					                	<?php } else { ?>
					                		<button type="button" class="btn btn-sm-main" onclick="view_application('<?php echo $row['user_id']; ?>');">View</button>
					                	<?php } ?>
					                </td>

							    	</tr>
					            <?php $serial = $serial+1;  
					        	} ?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/custom_js/sro_dashboard.js?v=1.2"></script>


<!-- dummy data -->
<?php
	// profile info
	$name= "Rica Tuwaera";
	$position= "Professor / Math Department Head";
	$sex= "Female";
	$employee_id = "04-012-022";
	$department_id= "012";
	// my documents
	$dtn = "001";
	$title = "Request for tables";
	$status = "Pending";
?>

<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">
			 
	</div>
</div>

<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 body " > 
		<div class="container-fluid" >
			<div class="row" >
				<br />
				<!-- temporary profile picture & sample profile info  --> 
				<div class="col-md-3 col-sm-12 col-xs-12" style="margin-left:50px;">
				<br />
					<div class="row">
							<img src="<?php echo base_url('assets/images/cat.jpg'); ?>" class="img-responsive" 
								alt="Profile Picture" id="profilepic" />
						</div>
					<div class="row"><br />
							<div class="info">
								<p><?php echo $name; ?> </p>
								<p> <?php echo $position; ?> </p>
								<p> <?php echo $sex; ?> </p>
								<p>Employee ID: <?php echo $employee_id; ?> </p>
								<p>Department ID: <?php echo $department_id; ?> </p> <br />
							</div>
						</div>
				</div>
				
				<div class="col-md-8 col-sm-12 col-xs-12" >
					<h2> My Documents <a href="<?php echo site_url('Home/add'); ?>" class="btn btn-danger btn-md" style="float:right;"> 
						<span class="glyphicon glyphicon-share"></span> Send a Document 
					</a>
					</h2>
					<hr/>
					<!--- sent docus table -->
					<h4> SENT DOCUMENTS </h4>
					<table class="table table-list-search table-hover table-condensed table-responsive ">
						<thead>
							<tr>
								<th>TRACKING NO. </th>
								<th>TITLE</th>
								<th>STATUS</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $dtn; ?></td>
								<td><?php echo $title; ?></td>
								<td><?php echo $status; ?></td>
								<td>
									<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#details">Details</button> 
									<button class="btn btn-success btn-sm">
										Download <span class="glyphicon glyphicon-download-alt"></span>
									</button>
								</td>
							</tr>
						</tbody>
					</table> <br/>
					
					<!--- inbox table -->
					<h4> INBOX </h4>
					<table class="table table-list-search table-hover table-condensed table-responsive ">
						<thead>
							<tr>
								<th>TRACKING NO. </th>
								<th>TITLE</th>
								<th>STATUS</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $dtn; ?></td>
								<td><?php echo $title; ?></td>
								<td><?php echo $status; ?></td>
								<td>
									<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#details">Details</button> 
									<button class="btn btn-success btn-sm">
										Download <span class="glyphicon glyphicon-download-alt"></span>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
	
</div>


		<!-- modal of details about the document-->
		<div id="details" class="modal fade" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #E74C3C">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title" style="color:#FFFFFF; text-align:center;">DOCUMENT DETAILS</h3>
					</div>
			
					<div class="modal-body">
					 <div>
						<h4 style="font-weight:bold; color:#000;"> 
							Document Tracking Number: <br /><br />
							Title: <br /><br />
							Description: <br /><br /><br /><br /><br /><br />
							Date Submitted: <br /><br />
							Date Received: <br /><br />
							Status: <br /><br />
							Signatories: <br /><br /><br /><br />
						</h4>
					 </div>
					</div>
				
				</div>
			</div>
		</div><!--- end of modal --->
	
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
	</div>
</div>
<!-- dummy data -->
<?php
	// profile info
	$name= "Rica Tuwaera";
	$position= "Professor";
	$dept="Mathematics Dept.";
	$employee_id = "04-012-022";
	$department_id= "012";
	// my documents
	$dtn = "001";
	$title = "Request for tables";
	$status = "Pending";
?>

<div class="container-fluid body">
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12" > 
		<div class="container red" >
			<div class="row" >
				<br />
				<!-- temporary profile picture & sample profile info  --> 
				<div class="col-md-3 col-sm-12 col-xs-12" style="margin-left:50px;">
				<div class="roundbox">
					<div class="row">
							<img src="<?php echo base_url('assets/images/cat.jpg'); ?>" class="img-responsive" 
								alt="Profile Picture" id="profilepic" />
						</div>
					<div class="row">
							<div class="info">
								<p><?php echo $name; ?> </p>
								<p>Employee ID: <?php echo $employee_id; ?> </p>
								<p>Department: <?php echo $dept; ?> </p>
								<p>Department ID: <?php echo $department_id; ?> </p>
								<p>Position: <?php echo $position; ?> </p> <br />
							</div>
						</div>
				</div>
				</div>
				
				<div class="col-md-8 col-sm-12 col-xs-12" >
					<h2> My Documents </h2> <br />
					<div class="tab">
						<button class="tablinks" onclick="openFolder(event, 'Inbox')" id="defaultOpen"> Inbox </button>
						<button class="tablinks" onclick="openFolder(event, 'Sent')"> Sent </button>
						<button class="tablinks" onclick="openFolder(event, 'Response')"> Response </button>
					</div>
					
					<div id="Inbox" class="tabcontent"> <br /><br />
						<!--- inbox table -->
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
					
					<div id="Sent" class="tabcontent"> <br />
					<a href="<?php echo site_url('Home/add'); ?>" class="btn btn-danger btn-md" style="float:right;"> 
						<span class="glyphicon glyphicon-share"></span> Send a Document 
					</a> <br /><br /><br />
						<!--- sent docus table -->
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
					</div>
					
					<div id="Response" class="tabcontent">
						<br /><p style=" color:white; font-size:18px;"> SELECT FILE: </p>
						<div class="dropdown">
							<button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" style="border-radius: 0px; width: 150px;">
							Files <span class="caret"></span></button>
							
						</div> <br /><br />
						
						<button class="btn btn-success">APPROVE</button>
						<button class="btn btn-danger">REJECT</button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</div>

<!-- javascript -->
<script>
function openFolder (event, folderName) {
	var x, tablinks, tabcontent;
	tabcontent= document.getElementsByClassName ("tabcontent");
	for (x=0; x < tabcontent.length; x++) {
		tabcontent[x].style.display = "none";
	}
		
	tablinks= document.getElementsByClassName ("tablinks");
	for (x=0; x < tablinks.length; x++) {
		tablinks[x].className= tablinks[x].className.replace("active", "");
	}
	document.getElementById(folderName).style.display = "block";
	evt.currentTarget.className += " active";
}
	
document.getElementById("defaultOpen").click();
</script>

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
	</div>
	
</div>
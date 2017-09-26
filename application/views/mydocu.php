<!-- dummy data -->
	<?php
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
		<div class="container" >
			<h2 class="h" > My Documents </h2> <br /><br /><br /><br />
			
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
	
		<!--modal-->
		<div id="details" class="modal fade" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #E74C3C">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title" style="color: #641E16 text-align: center;">DOCUMENT DETAILS</h3>
					</div>
			
					<div class="modal-body">
					 <div>
						<h4 style="font-weight: bold"> 
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
		
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
	</div>
</div>
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
	
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
	</div>
</div>
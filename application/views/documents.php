<div class= "container-fluid">
	<!--border-->
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			 
		</div>
	</div>
	
	<!--logo-->
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 logo">
			<h1 align="center"><b> DOCUMENT TRACKING SYSTEM </b>
		</div>
	</div>
	
	<!--navigation bar-->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="<?php echo base_url(); ?>" class="navbar-brand" >Home</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#">Profile</a></li>
				<li><a href="#">All Documents</a></li>
				<li><a href="<?php echo site_url('Home/add'); ?>">Add Documents</a></li>
				<li><a href="#">Offices & Employees</a></li>
			</ul>
    
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-phone"></span> Contacts</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	
	<!--border-->
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			 
		</div>
	</div>

	<!--body-->
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 body " > 
		<div class="container">
			<h2 class="h" > All Documents </h2> <br />
			
			<!-- search bar -->
			<form>
				<div class="form-group sbar input-group">
					<input type="text" class="form-control" id="search" name="search" />
					<span class="input-group-btn">
						<button type="submit" class="btn btn-danger">
							<span class="glyphicon glyphicon-search"></span> Search
						</button>
					</span>
				</div>
			</form> 
  
			<!-- dummy data -->
			<?php
			$dtn = "001";
			$title = "Request for tables";
			$status = "Pending";
			?>
			
			<!-- table -->
		    <table class="table table-hover table-condensed table-responsive ">
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
		
		<!--modal-->
		<div id="details" class="modal fade" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #E74C3C">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title" style="color: #641E16 text-align: center;">Document Details</h3>
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
		</div>
	</div>
	
	<!--border-->
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
		</div>
	</div>

</div>
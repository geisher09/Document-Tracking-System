<!-- dummy data -->
<?php
	$name= "Carlita Tuwaera";
	$status= "Professor / Math Department Head";
	$sex= "Female";
	$employee_id = "04-012-022";
	$department_id= "012";
?>

<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">
			 
	</div>
</div>

<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 body " > 
		<div class="container" >
			<h2 class="h" > PROFILE </h2> <br /><br /><br /><br />
			
			<div class="row" >
				<!-- temporary profile picture & sample profile info  -->
				<div class="col-md-2 col-sm-12 col-xs-12"></div>
				<div class="col-md-8 col-sm-12 col-xs-12" align="center">
					<img src="<?php echo base_url('assets/images/cat.jpg'); ?>" class="img-circle img-responsive" alt="profile picture" height="200" width="200" /> <br /><br />
					<p class="info">
						Name: <?php echo $name; ?> <br />
						Position: <?php echo $status; ?> <br />
						Sex: <?php echo $sex; ?> <br />
						Employee ID: <?php echo $employee_id; ?> <br />
						Department ID: <?php echo $department_id; ?> <br /><br />
					</p>
					<a href="<?php echo site_url('Home/myd'); ?>" class="btn btn-success btn-md"> 
						<span class="glyphicon glyphicon-file"></span> My Documents 
					</a>
				</div>
				<div class="col-md-2 col-sm-12 col-xs-12"></div>
				
			</div>
		</div>
	</div>
	
</div>
	
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
	</div>
</div>
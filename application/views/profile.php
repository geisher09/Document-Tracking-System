<!-- dummy data -->
<?php
	$name= "Carlita Abendanio";
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
			<h2 class="h" > Profile </h2> <br /><br /><br /><br />
			
			<div align="center" >
				<!-- temporary profile picture & sample profile info  -->
				<img src="<?php echo base_url('assets/images/cat.jpg'); ?>" class="img-circle img-responsive" alt="profile picture" height="200" width="200" /> <br /><br />
				<p class="info">
					<?php echo $name; ?> <br />
					<?php echo $status; ?> <br />
					<?php echo $sex; ?> <br />
					Employee ID: <?php echo $employee_id; ?> <br />
					Department ID: <?php echo $department_id; ?> <br /><br />
				</p>
				<a href="<?php echo site_url('Home/edit'); ?>" class="btn btn-info btn-md"> 
					<span class="glyphicon glyphicon-pencil"></span> Edit Profile 
				</a>
				
				<a href="<?php echo site_url('Home/myd'); ?>" class="btn btn-success btn-md"> 
					<span class="glyphicon glyphicon-file"></span> My Documents 
				</a>
			</div>
		</div>
	</div>
	
</div>
	
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
	</div>
</div>
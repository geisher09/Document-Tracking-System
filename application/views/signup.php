<head>
<title> <?php echo $title; ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css");?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/modi.css");?>" />
	
	<script src="<?php echo base_url("assets/js/jquery.min.js"); ?>" /></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>" /></script>
</head>
<div class= "container-fluid">
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			 
		</div>
	</div>

	
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 body " style="height:1000px;">
		    <h1 align="center" style="color:white; margin-top: 50px"><b> DOCUMENT TRACKING SYSTEM </b> </h1>
		    <h1 align="center" style="color:white;"><b> SIGN UP </b> </h1>
			<form class="lgform">
				<h3>PROFILE</h3>
				<div class="form-group">
					<label for="lname">Last Name:</label>
					<input type="text" class="form-control" id="lname">
				  </div>
				<div class="form-group">
					<label for="fname">First Name:</label>
					<input type="text" class="form-control" id="fname">
				  </div>
				<div class="form-group">
					<label for="mname">Middle Name:</label>
					<input type="text" class="form-control" id="mname">
				  </div>
				<div class="form-group">
					<label for="sex">Sex:</label>
					<div class="radio-inline">
						<div class="radio">
						  <label><input type="radio" name="optradio">Male</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="optradio">Female</label>
						</div>
						</div>
				  </div>
				<div class="form-group">
					<label for="department">Department:</label>
					<input type="text" class="form-control" id="department">
				  </div>
				<div class="form-group">
					<label for="status">Position:</label>
					<input type="text" class="form-control" id="status">
				  </div>
				  <br/>
				  <h3>ACCOUNT</h3>
				<div class="form-group">
					<label for="email">Username:</label>
					<input type="text" class="form-control" id="email" disabled>
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd">
				  </div>
				  <br />
				  <button type="submit" class="btn btn-danger btn-md">Create account</button>
				  <a href="<?php echo site_url('Home/login'); ?>" class="btn btn-default btn-md" role="button">Cancel</a>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
		</div>
	</div>

</div>
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
	
		<div class=" col-md-12 col-sm-12 col-xs-12 body " >
		
		    <h1 align="center" style="color:white; margin-top: 50px"><b> DOCUMENT TRACKING SYSTEM </b> </h1>
		    <h1 align="center" style="color:white;"><b> LOG IN </b> <br /><br />
			<form class="lgform">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="uname" type="text" class="form-control" name="uname" placeholder="User Name">
				</div> <br /> 
    
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="password" type="password" class="form-control" name="password" placeholder="Password">
				</div> </b> <br />
				
				<div class="form-group">
					<button type="submit" class="btn btn-danger btn-lg"> LOGIN </button>
				</div>
			</form>
			<a href="<?php echo site_url('Home/signup'); ?>" id="newaccountlink">Create an account</a>
		</div>
	</div>
	
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
		</div>
	</div>

</div>
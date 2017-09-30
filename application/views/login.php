<div class= "container-fluid">
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			 
		</div>
	</div>

	
	<div class="row">
	
		<div class=" col-md-12 col-sm-12 col-xs-12 body " >
			<?php echo form_open('home/validation');?>
		    <h1 align="center" style="color:white; margin-top: 50px"><b> DOCUMENT TRACKING SYSTEM </b> </h1>
		    <?php if(isset($account_created)) {?>
		    	<h3 align="center" style="color:white;"><b><?php echo $account_created; ?></b><br />You may now log in!<br /></h3>
		    <?php } else { ?>
		    	<h1 align="center" style="color:white;"><b> LOG IN </b> <br /><br /></h1>
		    <?php } ?>
				<div align="center" class="lgform input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input align="center" id="uname" type="text" class="form-control" name="uname" placeholder="User Name">
				</div> <br /> 
    
				<div class="input-group lgform">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="password" type="password" class="form-control" name="password" placeholder="Password">
				</div> </b> <br />
				
				<div align="center" class="form-group">
					<button align="center" type="submit" class="btn btn-danger btn-lg"> LOGIN </button>
				</div>
				<div align="center" class="form-group">
					<a align="center" href="<?php echo site_url('Home/signup'); ?>" id="newaccountlink">Create an account</a>
				</div>
		</div>
		<?php form_close(); ?>
	</div>
	
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
		</div>
	</div>

</div>
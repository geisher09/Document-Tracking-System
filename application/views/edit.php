<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">
			 
	</div>
</div>

<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 body " > 
		<div class="container" >
			<h2 class="h" > Edit Profile </h2> <br /><br /><br /><br />
			<form role="form" class="form" method="post">
				<div class="form-group">
					<label for="lname"> Last Name: </label>
					<input type="text" class="form-control" id="lname" name="lname" />
				</div>
				<div class="form-group">
					<label for="fname"> First Name: </label>
					<input type="text" class="form-control" id="fname" name="fname" />
				</div>
				<div class="form-group">
					<label for="mname"> Middle Name: </label>
					<input type="text" class="form-control" id="mname" name="mname" />
				</div>
				<div class="form-group">
					<label for="title"> Status: </label>
					<input type="text" class="form-control" id="title" name="title" />
				</div> <br />
				
				<div class="form-group">
					<a href="<?php echo site_url('Home/profile'); ?>" type="submit" class="btn btn-danger">
						Save <span class="glyphicon glyphicon-save"></span> 
					</a>
				</div>
			</form>
			
			
		</div>
	</div>
	
</div>
	
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
	</div>
</div>
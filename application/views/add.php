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
				<li><a href="<?php echo site_url('Home/docu'); ?>">All Documents</a></li>
				<li><a href="#">Add Documents</a></li>
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
			<h2 class="h" > Add Documents </h2> <br /> <br /><br /> <br />
			<form role="form" class="form" method="post">
				<div class="form-group">
					<label for="dtn"> Document Tracking Number: </label>
					<input type="text" class="form-control" id="dtn" name="dtn" />
				</div>
				<div class="form-group">
					<label for="title"> Title: </label>
					<input type="text" class="form-control" id="title" name="title" />
				</div>
				<div class="form-group">
					<label for="desc"> Description: </label>
					<textarea class="form-control" id="desc" name="desc" rows="3"> </textarea>
				</div>
				<div class="form-group">
					<label for="file"> Attach File: </label>
					<div class="input-group">
						<input type="text" class="form-control" id="file" name="file" />
						<span class="input-group-btn">
							<button type="submit" class="btn btn-warning"> Choose file </button>
						</span>
					</div>
				</div>
				<div class="form-group">
					<label for="sign"> Signatories: </label>
					<input type="text" class="form-control" id="sign" name="sign" />
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-danger">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
				</div>
			</form>
		</div>
		</div>
	</div>
	
	<!--border-->
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
		</div>
	</div>

</div>
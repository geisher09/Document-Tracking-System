<div class="container">
	<div class="container red" >
	<!--- dummy data!! 
	(sinubukan kong maglagay ng info galing sa db pero di ako nagtagumpay... ewan ko ba tsk tsk -Carlo T_T)-->
	<?php
	$lname="Santos";
	$fname="Josefina";
	$mname="Dimagiba";
	$position="Head";
	$username="taongsantos";
	$password="misterpogi";
	?>
	<h2>Settings</h2>
	<hr/>
	<div class="row" id="settingsdiv">
				<div class="col-md-4 col-sm-12 text-center">
					<img src="<?php echo base_url('assets/images/cat.jpg'); ?>" class="img-responsive"alt="Profile Picture" id="profilepic-settings" data-toggle="tooltip" title="Profile Picture" />
					<br />
					<p id="settings-uname"><?php echo $username; ?></p>
					<a href="#" class="btn btn-default btn-sm" role="button" data-toggle="modal" data-target="#change-dp">
						Change Profile Picture...</a>
					<br /><br /><br /><br />
					<button type="button" class="btn btn-success btn-md btn-block">Save Changes</button>
					<button type="button" class="btn btn-danger btn-md btn-block">Discard Changes</button>
				</div>
				<div class="col-md-8 col-sm-12">
				<form action="" class="lgform" method="post" accept-charset="utf-8">
					<h3>Profile</h3>
					<div class="form-group">
						<label for="lname">Last Name:</label>
						<input type="text" name="lname" class="form-control"  value="<?php echo $lname; ?>"/>
					</div>
					<div class="form-group">
						<label for="fname">First Name:</label>
						<input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control"  />
					</div>
					<div class="form-group">
						<label for="mname">Middle Name:</label>
						<input type="text" name="mname" value="<?php echo $mname; ?>" class="form-control" />
					</div>
					<div class="form-group">
						<label for="department">Department:</label>
						<div class="col-lg-12">
							 <div class="col-sm-6">
								<select name="department" class="form-control">							        	
									<option value="101" >Audio Visual Department</option>
									<option value="102">Computer Department</option>
									<option value="103" selected>Construction Engineering and Management Department</option>
									<option value="104">Electrical Department</option>
									<option value="105">sssss</option>
									<option value="106">efdfdsfsdf</option>
									<option value="201">Dean's Office</option>
									<option value="202">Math Department</option>
									<option value="203">Physics Department</option>
									<option value="204">Chemistry Department</option>
									<option value="301">New</option>
									<option value="302">Ancheta</option>
									<option value="303">Entry</option>
									<option value="304">Yo</option>
									<option value="305">Hello</option>
									<option value="401">Another Dummy Department</option>
									<option value="402">Name</option>
									<option value="403">Last na to</option>
									<option value="404">ABC</option>
									<option value="405">Dummy Department</option>
								</select> 
							  </div>
						 </div>

					 </div>
					 <br><br>
					<div class="form-group">
						<label for="status">Position:</label>
						<input type="text" name="position" value="<?php echo $position; ?>" class="form-control" />
					</div>
					<br />
					<br />
					<h3>Account</h3>
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" name="username" value="<?php echo $username; ?>" class="form-control" />
					</div>
					<div class="form-group">
						<label for="pwd">Current Password:</label>
						<input type="password" name="password" value="<?php echo $password; ?>" class="form-control"  />
					</div>
					<div id="password-change" class="collapse">
						<div class="form-group">
							<label for="pwd">New Password:</label>
							<input type="password" name="password" value="" class="form-control" placeholder="New Password"  />
						</div>
						<div class="form-group">
							<label for="pwd_2">Confirm New Password:</label>
							<input name="password_confirm" type="password" class="form-control" id="pwd_2" placeholder="Password Confirmation">
						</div>
					</div>
					<button type="button" class="btn btn-info btn-sm" id="show">Change Password</button>
						
						
					</form>				
				</div>
			</div>
	
	  <!-- Change DP Modal -->
	  <div class="modal fade" id="change-dp" role="dialog">
		<div class="modal-dialog">
		
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Change Profile Picture </h4>
			</div>
			<div class="modal-body text-center">
			  <img src="<?php echo base_url('assets/images/cat.jpg'); ?>" class="img-responsive"alt="Profile Picture" id="profilepic-settings"/>
			  <div class="upload-pic-form">
				  <form>
					  <label for="file" class="upload-photo-label">
						<span class="glyphicon glyphicon-picture"></span> 
						<span id="phototitle">Choose picture...</span>
					  </label>
					  <input type="file" name="photo" id="file" multiple="true"/>
				  </form>
			  </div>
			  
			  
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	
<!-- script  -->
<script>
	$(document).ready(function(){
		$("#show").click(function(){
			$("#password-change").show(300);
		});
	});
	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
	
</script>
	
	</div>
</div>

<div class="container">
	<div class="container red" >
	<!--- dummy data!! -->
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

					<?php foreach ($pro as $prof){ ?>
						<p id="settings-uname"><?php echo $prof['username']; ?></p>
					<?php } ?>

					<a href="#" class="btn btn-default btn-sm" role="button" data-toggle="modal" data-target="#change-dp">
						Change Profile Picture...</a>
					<br /><br /><br />
					<button type="button" class="btn btn-success btn-md btn-block">Save Changes</button>
					<button type="button" class="btn btn-danger btn-md btn-block">Discard Changes</button>
				</div>
				<div class="col-md-8 col-sm-12">
				<form action="" class="lgform" method="post" accept-charset="utf-8">
					<h3>Profile</h3>
					<div class="form-group">
						<label for="lastname">Last Name:</label>
						<input type="text" id="lastname" name="lastname" class="form-control" />
					</div>
					<div class="form-group">
						<label for="fname">First Name:</label>
							<input type="text" id="fname" name="fname" class="form-control" />					
					</div>
					<div class="form-group">
						<label for="mname">Middle Name:</label>
						<input type="text" id="mname" name="mname" class="form-control" />
					</div>
					<div class="form-group">
						<label for="dept">Department:</label>
						<div class="col-lg-12">
							 <div class="col-sm-6">
								<select name="dept" id="dept" class="form-control">							        	
									
								</select> 
							  </div>
						 </div>

					 </div>
					 <br><br>
					<div class="form-group">
						<label for="position">Position:</label>
						<input type="text" id="position"  name="position" class="form-control" />
					</div>
					<br />
					<br />
					<h3>Account</h3>
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" name="username" id="username" class="form-control" />
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
					<button type="button" class="btn btn-info btn-sm" id="change">Change Password</button>
					<button type="button" class="btn btn-danger btn-sm collapse" id="cancel">Cancel Change</button>
						
						
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
					  <input type="file" name="photo" id="uploadfile"/>
			  </div>
			  
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
			  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			  </form>
			</div>
		  </div>
		  
		</div>
	  </div>
	
<!-- script  -->
<script>
	$(document).ready(function(){
		$("#change").click(function(){
			$("#password-change").show(200);
			$("#change").hide(200);
			$("#cancel").show(200);
		});
		$("#cancel").click(function(){
			$("#password-change").hide(200);
			$("#cancel").hide(200);
			$("#change").show(200);
		});
	});
	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
			$.ajax({
			        type: 'POST',
			        //dataType:'json',
			        url: 'edit_list',
				        success: function(data) {
				        	var obj = $.parseJSON(data);
				        	console.log(obj);


							$('#lastname').val(obj.userprof.lname);
							$('#fname').val(obj.userprof.fname);
							$('#mname').val(obj.userprof.mname);
							$('#position').val(obj.userprof.position);
							$('#username').val(obj.userprof.username);

				        }
			});
		
	});
	
</script>
	
	</div>
</div>

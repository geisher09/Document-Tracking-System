<p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;display: block;
    z-index: 5;
    position: relative;">Settings</p>
<div class="container">
	<div class="container red" >
	<h2>Account Settings</h2>
	<hr/>

	<div class="row" id="settingsdiv">
				<div class="col-md-4 col-sm-12 text-center">
					<?php foreach ($pro as $prof){ ?>
							<img src="<?php echo base_url($prof['image']); ?>" class="img-responsive"
								alt="Profile Picture" id="profilepic" />
						<?php } ?>
					<br />

					<?php foreach ($pro as $prof){ ?>
						<p id="settings-uname"><?php echo $prof['username']; ?></p>
					<?php } ?>

					<a href="#" class="btn btn-default btn-md" role="button" data-toggle="modal" data-target="#change-dp">
						Change Profile Picture...</a>
					<br /><br />
					<a href="<?php echo site_url('Home/password_change');?>" role="button" class="btn btn-primary btn-md">Change Password...</a>
					
				</div>
				<div class="col-md-8 col-sm-12">
					<?php echo form_open('home/update_user',['class'=>'lgform']);?>
					<h3>Profile</h3>
					<div class="form-group">
							<input type="hidden" id="user_id" name="user_id" class="form-control"/>				
					</div>
					<div class="form-group">
						<label for="lastname">Last Name:</label>
						<?php echo form_input(['name'=>'lastname','id'=>'lastname','class'=>'form-control', 'value'=>set_value('lastname')]); ?>
						<?php echo '<h5 class="pulse animated" style="color: #ff4d4d;
							"><strong>'.form_error('lastname').'</strong></h5>'; ?>
					</div>
					<div class="form-group">
						<label for="fname">First Name:</label>
							<input type="text" id="fname" name="fname" class="form-control" />	
							<?php echo '<h5 class="pulse animated" style="color: #ff4d4d;
							"><strong>'.form_error('fname').'</strong></h5>'; ?>				
					</div>
					<div class="form-group">
						<label for="mname">Middle Name:</label>
						<input type="text" id="mname" name="mname" class="form-control" />
						<?php echo '<h5 class="pulse animated" style="color: #ff4d4d;
							"><strong>'.form_error('mname').'</strong></h5>'; ?>
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
					<div class="form-group">
						<label for="position">Position:</label>
						<input type="text" id="position"  name="position" class="form-control" />
						<?php echo '<h5 class="pulse animated" style="color: #ff4d4d;
							"><strong>'.form_error('position').'</strong></h5>'; ?>
					</div>
					<br />
					<h3>Account</h3>
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" name="username" id="username" class="form-control" />
						<?php echo '<h5 class="pulse animated" style="color: #ff4d4d;
							"><strong>'.form_error('username').'</strong></h5>'; ?>
					</div>
					<div style="float:right;">
						<button type="submit" class="btn btn-success btn-md">Save Changes</button>
						<button type="reset" class="btn btn-danger btn-md">Discard Changes</button>
					</div>
					<?php echo form_close();?>
					
				</div>
			</div>
	
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
			<?php echo form_open_multipart('home/upload_pic',['class'=>'horizontal']);?>
			<div class="modal-body text-center">
						<?php foreach ($pro as $prof){ ?>
							<img src="<?php echo base_url($prof['image']); ?>" class="img-responsive"
								alt="Profile Picture" id="profilepic" />
						<?php } ?>			  
			  <div class="upload-pic-form">
					  <input type="file" name="photo" id="uploadfile" accept="image/*"/>
			  </div>
			</div>
			<div class="modal-footer">
			  <button type="submit" class="btn btn-success">Save</button>
			  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>
			<?php echo form_close();?>
		  </div>
		  
		</div>
	  </div>

<!-- script  -->
<script>
	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
			$.ajax({
			        type: 'POST',
			        //dataType:'json',
			        url: 'edit_list',
				        success: function(data) {
				        	var obj = $.parseJSON(data);
				        	console.log(obj);

				        	var d = "";

				        	for(var i=0; i<parseInt(obj.departments.length); i++){
		 					        d += '<option value='+obj.departments[i].department_id+'>'+obj.departments[i].department_desc+'</option>';
								}
							$("#dept").html(d);
							$("#dept").val(obj.userprof.department_id);
							$("#user_id").val(obj.userprof.employee_id);
							$('#lastname').val(obj.userprof.lname);
							$('#fname').val(obj.userprof.fname);
							$('#mname').val(obj.userprof.mname);
							$('#position').val(obj.userprof.position);
							$('#username').val(obj.userprof.username);

				        }
			});
		
	});
	
</script>

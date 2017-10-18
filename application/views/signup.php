<body id="bgimage">
<div class="container-fluid">

	
	<div id="outer-div">
		<h1 style="color:white;"><b> SIGN UP </b> </h1><hr/>
			<div class="row" id="inner-div" style="color:white;">
				<div class="col-md-6 col-sm-12">
					<?php echo form_open('home/create_member',['class'=>'lgform']);?>
				<!--	<h3>PROFILE</h3> -->
					
					<div class="form-group">
							<label for="lname">Last Name:</label>
							<?php echo form_input(['name'=>'lname','class'=>'form-control','placeholder'=>'Last name', 'value'=>set_value('lname')]); ?>
							<?php echo '<h5 class="pulse animated" style="color: red;
							"><strong>'.form_error('lname').'</strong></h5>'; ?>
					</div>
					
					<div class="form-group">
						<label for="fname">First Name:</label>
						<?php echo form_input(['name'=>'fname','class'=>'form-control','placeholder'=>'First name', 'value'=>set_value('fname')]); ?>
						<?php echo '<h5 class="pulse animated" style="color: red;
						"><strong>'.form_error('fname').'</strong></h5>'; ?>
					  </div>
					<div class="form-group">
						<label for="mname">Middle Name:</label>
						<?php echo form_input(['name'=>'mname','class'=>'form-control','placeholder'=>'Middle name', 'value'=>set_value('mname')]); ?>
						<?php echo '<h5 class="pulse animated" style="color: red;
						"><strong>'.form_error('mname').'</strong></h5>'; ?>
					  </div>
					<div class="form-group">
						<label for="sex">Sex:</label>
						<div class="radio-inline">
							<div class="radio">
							  <label><input name="sex" value="male" type="radio"<?php echo  set_radio('sex', 'male', TRUE); ?>>Male</label>
							</div>
							<div class="radio">
							  <label><input name="sex" value="female" type="radio"<?php echo  set_radio('sex', 'female'); ?>>Female</label>
							</div>
						<?php echo '<h5 class="pulse animated" style="color: red;"><strong>'.form_error('sex').'</strong></h5>'; ?>
						</div>
					  </div>
					<div class="form-group">
						<label for="department">Department:</label>
						<div class="col-lg-12">
							 <div class="col-sm-6">
								<select name="department" class="form-control">							        	
									<?php foreach ($dp as $depart){ ?>
									  <option value="<?php echo $depart->department_id; ?>"><?php echo $depart->department_desc; ?></option>
									<?php } ?>
								</select> 
							  </div>
						 </div>

					 </div>
					 <br><br>
					<div class="form-group">
						<label for="status">Position:</label>
						<?php echo form_input(['name'=>'position','class'=>'form-control','placeholder'=>'Position', 'value'=>set_value('position')]); ?>
						<?php echo '<h5 class="pulse animated" style="color: red;
						"><strong>'.form_error('position').'</strong></h5>'; ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
				<!--	<h3>ACCOUNT</h3>   -->
					<div class="form-group">
						<label for="username">Username:</label>
						<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username', 'value'=>set_value('username')]); ?>
						<?php echo '<h5 class="pulse animated" style="color: red;
						"><strong>'.form_error('username').'</strong></h5>'; ?>
					  </div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<?php echo form_input(['name'=>'password','type'=>'password','class'=>'form-control','placeholder'=>'Password', 'value'=>set_value('password')]); ?>
						<?php echo '<h5 class="pulse animated" style="color: red;
						"><strong>'.form_error('password').'</strong></h5>'; ?>
					  </div>
					<div class="form-group">
						<label for="pwd_2">Confirm Password:</label>
						<input name="password_confirm" type="password" class="form-control" id="pwd_2">
						<?php echo '<h5 class="pulse animated" style="color: red;
						"><strong>'.form_error('password_confirm').'</strong></h5>'; ?>
					</div>
						<br />
						<div style="float:right;">
						<button type="submit" class="btn btn-success btn-lg">Create account</button>
						<a href="<?php echo site_url('Home'); ?>" class="btn btn-default btn-lg" role="button">Cancel</a>
						</div>
						
					<?php  echo form_close(); ?>
				</div>
			</div>
		<hr/>
	</div>
</div>
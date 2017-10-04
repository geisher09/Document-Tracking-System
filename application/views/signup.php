<div class="container-fluid" id="bgimage">
<!----
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item">
				<img src="<?php //echo base_url('assets/images/3.jpg') ?>" alt="three" />
			</div>
			<div class="item">
			</div>
		</div>
	</div> ---->
	
	<div id="outer-div">
		<h1 align="center" style="color:white;"><b> SIGN UP </b> </h1> <hr />
	
		<div id="inner-div">
				
				<?php echo form_open('home/create_member',['class'=>'lgform']);?>
				<h3>PROFILE</h3>
				
				<div class="form-group">
			  			<label for="lname">Last Name:</label>
			  			<?php echo form_input(['name'=>'lname','class'=>'form-control','placeholder'=>'Last name', 'value'=>set_value('lname')]); ?>
			  			<?php echo form_error('lname'); ?>
				</div>
				
				<div class="form-group">
					<label for="fname">First Name:</label>
			  		<?php echo form_input(['name'=>'fname','class'=>'form-control','placeholder'=>'First name', 'value'=>set_value('fname')]); ?>
					<?php echo form_error('fname'); ?>
				  </div>
				<div class="form-group">
					<label for="mname">Middle Name:</label>
			  		<?php echo form_input(['name'=>'mname','class'=>'form-control','placeholder'=>'Middle name', 'value'=>set_value('mname')]); ?>
					<?php echo form_error('mname'); ?>
				  </div>
				<div class="form-group">
					<label for="sex">Sex:</label>
					<div class="radio-inline">
						<div class="radio">
						  <label><input name="sex" value="male" type="radio" name="optradio">Male</label>
						</div>
						<div class="radio">
						  <label><input name="sex" value="female" type="radio" name="optradio">Female</label>
						</div>
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
					<?php echo form_error('position'); ?>
				</div>
				  <br/>
				  <h3>ACCOUNT</h3>
				<div class="form-group">
					<label for="username">Username:</label>
			  		<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username', 'value'=>set_value('username')]); ?>
					<?php echo form_error('username'); ?>
				  </div>
				<div class="form-group">
					<label for="pwd">Password:</label>
			  		<?php echo form_input(['name'=>'password','type'=>'password','class'=>'form-control','placeholder'=>'Password', 'value'=>set_value('password')]); ?>
					<?php echo form_error('password'); ?>
				  </div>
				<div class="form-group">
					<label for="pwd_2">Confirm Password:</label>
					<input name="password_confirm" type="password" class="form-control" id="pwd_2">
					<?php echo form_error('password_confirm'); ?>
				  </div>
				<hr />
				<div class="text-center"> 
				<button type="submit" class="btn btn-danger btn-lg">Create account</button>
				<a href="<?php echo site_url('Home'); ?>" class="btn btn-default btn-lg" role="button">Cancel</a>
				</div>
				<?php  echo form_close(); ?>
		</div>
	
	</div>
</div>
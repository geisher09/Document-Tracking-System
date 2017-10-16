<div class="container body">
	<div class="container red">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
		<h2>Change Password</h2>
		<br /><br />
			<div id="password-change">
				<?php echo form_open('home/change_pass',['class'=>'lgform']);?>
				<div class="form-group">
					<label for="password">Current Password:</label>
					<input type="password" name="password" id="password" class="form-control"  placeholder="Current Password" />
					<?php echo '<h5 class="pulse animated" style="color: red; "><strong>'.form_error('password').'</strong></h5>'; ?>
				</div>

				<div class="form-group">
					<label for="pwd">New Password:</label>
						<input type="password" id="password_change" name="password_change" value="" class="form-control" placeholder="New Password"  />
					<?php echo '<h5 class="pulse animated" style="color: red; "><strong>'.form_error('password_change').'</strong></h5>'; ?>
				</div>

				<div class="form-group">
					<label for="pwd_2">Confirm New Password:</label>
					<input name="password_confirm" type="password" class="form-control" id="pwd_2" placeholder="Password Confirmation">
					<?php echo '<h5 class="pulse animated" style="color: red; "><strong>'.form_error('password_confirm').'</strong></h5>'; ?>
				</div>
			</div>
			<br />
			<div class="text-center">
				<button type="submit" class="btn btn-info btn-md">Change Password</button>
				<a href="<?php echo site_url('Home/edit'); ?>" class="btn btn-danger btn-md" role="button">Cancel</a>
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-md-3">
		</div>
	</div>
	</div>
</div>
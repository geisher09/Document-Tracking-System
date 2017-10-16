<div class="container body">
	<div class="container red">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
		<h2>Change Password</h2>
		<br /><br />
			<div id="password-change">
				<form>
				<div class="form-group">
					<label for="password">Current Password:</label>
					<input type="password" name="password" id="password" class="form-control"  placeholder="Current Password" />
				</div>

				<div class="form-group">
					<label for="pwd">New Password:</label>
						<input type="password" id="password-change" name="password-change" value="" class="form-control" placeholder="New Password"  />
				</div>

				<div class="form-group">
					<label for="pwd_2">Confirm New Password:</label>
					<input name="password_confirm" type="password" class="form-control" id="pwd_2" placeholder="Password Confirmation">
				</div>
			</div>
			<br />
			<div class="text-center">
				<button type="button" class="btn btn-info btn-md">Change Password</button>
				<a href="<?php echo site_url('Home/edit'); ?>" class="btn btn-danger btn-md" role="button">Cancel</a>
			</div>
				</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>
	</div>
</div>
<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?><?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">


	<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/chartist/js/chartist.min.jss');?>"></script>
	<script src="<?php echo base_url('assets/scripts/klorofil-common.js');?>"></script>
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html" style="font-family: 'Josefin Slab'; font-size: 27px; color: #34495E; ">
				<img src="<?php echo base_url('assets/images/logo2.png');?>" alt="DTS Logo" class="img-responsive logo2">
				Document Tracking System </a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<?php foreach ($pro as $prof){ ?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url($prof['image']); ?>" class="img-circle" alt="Avatar"> <span><?php echo $prof['username'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<?php } ?>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url('Home/profile'); ?>"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="<?php echo site_url('Home/edit'); ?>"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="<?php echo site_url('Home'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo site_url('Home/home'); ?>" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php echo site_url('Home/docu'); ?>" class=""><i class="lnr lnr-inbox"></i> <span>My Documents</span></a></li>
						<li><a href="<?php echo site_url('Home/offices'); ?>" class=""><i class="lnr lnr-apartment"></i> <span>Offices</span></a></li>
						<li><a href="<?php echo site_url('Home/contacts'); ?>" class=""><i class="lnr lnr-phone"></i> <span>Contacts</span></a></li>
						<li><a href="<?php echo site_url('Home/profile'); ?>" class="active"><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
						<li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
<div class="main">
			<!-- MAIN CONTENT -->

<p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;display: block;
    z-index: 5;
    position: relative;">Settings</p>
<div class="container-fluid">
	<div class="container-fluid red" >
	<h2><strong>Account Settings</strong></h2>
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
	
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Document Tracki</a>. All Rights Reserved.</p>
			</div>
		</footer>


	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->

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
	$('.dropdown-toggle').dropdown();
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

	</div>
</div>
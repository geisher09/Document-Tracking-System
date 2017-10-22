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
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger"><?php echo count($inb);?></span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="<?php echo site_url('Home/docu'); ?>" class="notification-item"><span class="dot bg-danger"></span>You have <?php echo count($inb);?> file(s) on hold in your inbox!</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-link"></i> <span>Quicklinks</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a data-toggle="modal" href="#send_details"><i class="glyphicon glyphicon-share"></i> Compose</a></li>
								<li><a href="<?php echo site_url('Home/docu'); ?>"><i class="glyphicon glyphicon-inbox"></i> Inbox</a></li>
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
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
	</div>
	
<div class="main">
	<div class="container-fluid body">
	<div class="container-fluid introbody"><br />
		
		<div style="margin-top: 15px;">
		<p style="font-size:60px; font-family: 'Josefin Slab'; color: #ffffff; text-align:center;"> 
		Receive <span style="font-size:40px;" class="glyphicon glyphicon-download-alt"></span> &nbsp;
		Send <span style="font-size:40px;"class="glyphicon glyphicon-share-alt"></span> &nbsp;
		Track <span style="font-size:40px;" class="glyphicon glyphicon-search"></span> 
		</p>
		
		<p style="font-size: 20px; color: #ffffff; text-align:center; margin: 10px 50px 10px 50px;"> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Document Tracking System is innovative software designed to become an efficient way to track document location 
		and status. We have been told that many companies have trouble transferring documents from one department or office to 
		another because some of these documents get lost and employees find it hard to track whether it has reached the proper recipient, 
		which department holds it back, or if it has been approved or rejected. Finally, we have come up to this Document Tracking System 
		which could be a great solution to this problem.
		</p>
		</div>
		
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 35px;">
				<p style="font-size:60px; font-family: 'Josefin Slab'; color: #7FB3D5; text-align:center;">
				Meet Our Team ! </p>
			</div>
		</div>
		
		<div class="row" style="margin-top: 25px; margin-left:150px;">
			<div class="col-md-3 col-sm-3 col-xs-3" > <br>	
				<h1 style="font-family: 'Josefin Slab'; color: #cccccc; text-align:center;"> Geisher Bernabe </h1> <br>
				<p style="font-size:15px; font-family: 'Helvetica'; color: #7FB3D5; text-align:center;">TEAM LEADER <br> BACK-END DEVELOPER
			</div>
			
			<div class="col-md-2 col-sm-2 col-xs-2">
				<img style="float:right;" src="<?php echo base_url('assets/images/geisher.jpg');?>" alt="BERNABE" class="img-responsive img-circle pic">
			</div>
			
			<div class="col-md-2 col-sm-2 col-xs-2" style="float:left;">
				<img src="<?php echo base_url('assets/images/christian.jpg');?>" alt="ANCHETA" class="img-responsive img-circle pic">
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-4" > <br>	
				<h1 style="font-family: 'Josefin Slab'; color: #cccccc; text-align:center;"> Christian Ancheta </h1> <br>
				<p style="font-size:15px; font-family: 'Helvetica'; color: #7FB3D5; text-align:center;">DATABASE PROGRAMMER
			</div>
			
		</div>
		
		<div class="row" style="margin-top: 50px; margin-left: 0px;">
			<div class="col-md-3 col-sm-3 col-xs-3" > <br>	
				<h1 style="font-family: 'Josefin Slab'; color: #cccccc; text-align:center;"> Carlo Abendanio </h1> <br>
				<p style="font-size:15px; font-family: 'Helvetica'; color: #7FB3D5; text-align:center;">FRONT-END DEVELOPER
			</div>
			
			<div class="col-md-2 col-sm-2 col-xs-2" >
				<img style="float:center;" src="<?php echo base_url('assets/images/carlo.jpg');?>" alt="ABENDANIO" class="img-responsive img-circle pic">
			</div>
			
			<div class="col-md-2 col-sm-2 col-xs-2">
				<img src="<?php echo base_url('assets/images/angelo.jpg');?>" alt="ABERILLA" class="img-responsive img-circle pic">
			</div>
			
			<div class="col-md-2 col-sm-2 col-xs-2">
				<img src="<?php echo base_url('assets/images/audrey.jpg');?>" alt="WAJE" class="img-responsive img-circle pic">
			</div>
			
			<div class="col-md-3 col-sm-3 col-xs-3" > <br>
				<h1 style="font-family: 'Josefin Slab'; color: #cccccc; text-align:center;"> Audrey Waje </h1> <br>
				<p style="font-size:15px; font-family: 'Helvetica'; color: #7FB3D5; text-align:center;">FRONT-END DEVELOPER
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;">
				<h1 style="font-family: 'Josefin Slab'; color: #cccccc; text-align:center;"> Angelo Jose Aberilla </h1> <br>
				<p style="font-size:15px; font-family: 'Helvetica'; color: #7FB3D5; text-align:center;">FRONT-END DEVELOPER /
				TECHNICAL WRITTER / QUALITY ANALYST
			</div>
		</div>
		
	</div>	
	</div>	
</div>	
		

		
		<!-- modal of details about the document-->
	<div id="send_details" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">
	<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #34495E; color:#ffffff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h3 class="modal-title text-center">Add Document</h3>
        </div>
        <div class="modal-body">

			<?php echo form_open_multipart('home/save',['class'=>'form-horizontal']); ?>
			<div class="row">
					<input type="hidden" id="empid" name="empid"/>
			</div>
			<div class="row">
				<div class=" col-md-10">
					<label for="">Title:</label>
					<?php echo form_input(['name'=>'document_title','class'=>'form-control','placeholder'=>'Title', 'value'=>set_value('document_title')]); ?>
				</div>

					<div class="col-lg-10">
						<?php echo form_error('document_title'); ?>
			  		</div>
			</div>
			<br/>
			<div class="row">
				<div class=" col-md-10">
					<label for="">Description:</label>
					<?php echo form_textarea(['name'=>'document_desc','rows'=>'1','class'=>'form-control','placeholder'=>'Description', 'value'=>set_value('document_desc')]); ?>
				</div>

					<div class="col-lg-10">
						<?php echo form_error('document_desc'); ?>
			  		</div>
			</div>
			<br/>

			<div class="row">
				<div class="col-sm-8">
			      	<label for="">Send to:</label>
						<select name="employee" class="form-control">
							<?php foreach ($emp as $empoy){ ?>
							    <option value="<?php echo $empoy->employee_id; ?>"><?php echo $empoy->lname.','.$empoy->fname.'  '.$empoy->mname; ?></option>
							<?php } ?>
						</select>
				</div>
			</div>

			<div class="row">		
			<br/>
			<div class=" col-md-10">
					<label for="">Attach File:</label>
						<?php echo form_upload(['name'=>'file', 'accept'=>'document/*']); ?>
					</div>

					<div class="col-lg-10">
						<?php echo form_error('file'); ?>
			  		</div>
			</div><br/>
			<div>
				<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>Send</button>
				<button type="reset" class="btn btn-default"><i class="fa fa-refresh" aria-hidden="true"></i>Reset</button>
			</div>
			<?php echo form_close();?>
        </div>
      </div>

		</div>
	</div>
		
</div>

	<!-- END WRAPPER -->
	<!-- Javascript -->

	</div>
</div>

<script>
$(document).ready(function() {
	$('.dropdown-toggle').dropdown();	
});


function send(id){
			$.ajax({
			        type: 'POST',
			         data:{id: id},
				        success: function(data) {
				        	var obj = JSON.stringify(data);
				        	console.log(id);

				          $('#empid').val(id);
				          $('#send_details').modal('show');

				        }
				    });
		}

</script>
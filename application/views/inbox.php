<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-link"></i> <span>Quicklinks</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<?php foreach ($pro as $prof){ ?>
								<li><a data-toggle="modal" id="<?php echo $prof['employee_id']; ?>" onclick="send(this.id)"><i class="glyphicon glyphicon-share"></i> Compose</a></li>
								<?php } ?>
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
						<li><a href="<?php echo site_url('Home/docu'); ?>" class="active"><i class="lnr lnr-envelope"></i> <span>My Documents</span></a></li>
						<li><a href="<?php echo site_url('Home/offices'); ?>" class=""><i class="lnr lnr-apartment"></i><span>Offices and </span><i class="lnr lnr-users"></i><span>Employees</span></a></li>
						<li><a href="<?php echo site_url('Home/contacts'); ?>" class=""><i class="lnr lnr-phone"></i> <span>Contacts</span></a></li>
						<li><a href="<?php echo site_url('Home/profile'); ?>" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
						<li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
<div class="main">
			<!-- MAIN CONTENT -->
<p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;">Dashboard</p>
<div class="container-fluid body">
	<!--body-->
		<div class="container-fluid red">
		  <div class="row">
		  	<div class="container-fluid blue">
		  		<?php foreach ($inb as $inbox){ ?>
		  		<img style="width:35px;height:35px;float:left;" src="<?php echo base_url($inbox['image']); ?>" class="img-circle" alt="Avatar"><span style="font-size:20px;color:white;margin-left:5px;"><strong>
							<?php echo $inbox['lname'];?>, <?php echo $inbox['fname'];?>
							</strong></span>
				<span style="font-size:20px;color:white;">
					&nbsp;<
					<?php echo $inbox['username'];?>
					>&emsp;&emsp;
				</span>
				<button id="<?php echo $inbox['document_id'];?>" class="btn btn-md btn-primary" type="button" onclick="update(this.id)"><span class="lnr lnr-pencil"></span> Update Status </button>
				<button data-toggle="modal" data-target="#forward" class="btn btn-md btn-success" ><span class="lnr lnr-location"></span> Forward </button>
				
				<button data-toggle="modal" data-target="#response" class="btn btn-md btn-danger" ><span class="lnr lnr-bullhorn"></span> Return </button>
				<button class="btn btn-default btn-md" type="button" onclick="window.location='<?php echo site_url('Home/docu');?>'">Back&nbsp;<span class="fa fa-arrow-left" aria-hidden="true"></span></button>

				<br /><br /><br />
				<p style="font-size:25px; color: white;  font-style:italic;">FORWARDED FILE</p>
				<p style="font-size:20px; color: white;"><label style="font-weight: normal; color: white;";>Document Tracking no:</label>
				<strong>&emsp;<?php echo $idno;?></strong></p>
				<p style="font-size:20px; color: white;"><label style="font-weight: normal; color: white;";>Title:</label>
				<strong>&emsp;<?php echo $inbox['document_title'];?></strong></p>
				<p style="font-size:20px; color: white;"><label style="font-weight: normal; color: white;";>Description:</label>
				<strong>&emsp;<?php echo $inbox['document_desc'];?></strong></p>
				<p style="font-size:20px; color: white;"><label style="font-weight: normal; color: white;";>Current Status:</label>
				<strong>&emsp;<?php echo $inbox['response'];?></strong></p>
				<p style="font-size:20px; color: white;"><label style="font-weight: normal; color: white;";>Latest Comment:</label>
				<strong>&emsp;<?php echo $inbox['comment'];?></strong></p>
				<?php
					date_default_timezone_set('Asia/Manila');
					$mydate = strtotime($inbox['date_responded']);

				?>
				<p style="font-size:20px; color: white;"><label style="font-weight: normal; color: white;";>As of:</label>
				<strong>&emsp;<?php echo date('F d, Y ', $mydate);?>
				 at <?php echo date('g:i a', $mydate);?></strong></p>
				<?php } ?>

				<?php foreach ($orig as $origin){ ?>
				<p style="font-size:20px; color: white;  font-style:italic;">THIS FILE ORIGINATED FROM</p>
				<p style="font-size:20px; color: white;"><label style="font-weight: normal; color: white;";>Employee id:</label>
				<strong>&emsp;<?php echo $origin['employee_id'];?></strong></p>
				<p style="font-size:20px; color: white;"><label style="font-weight: normal; color: white;";>Employee id:</label>
				<strong>&emsp;<?php echo $origin['lname'];?>, <?php echo $origin['fname'];?> <?php echo $origin['mname'];?></strong></p>
				<?php } ?>
				




				</div>




</div>


</div>

	<!-- END WRAPPER -->
	<!-- Javascript -->


<!-- javascript -->
<script>

$('.dropdown-toggle').dropdown();

function update(id){
			$.ajax({
			        type: 'POST',
			        data:{id: id},
				        success: function(data) {
				        	var obj = JSON.stringify(data);
				        	//console.log(obj.signatory);
				        	// $('#employee_id').val(obj.signatory.employee_id);
				        	// $("#employee_name").val(obj.signatory.lname+','+obj.signatory.fname+' '+obj.signatory.mname);
				         //  	$("#response").val(obj.signatory.response);
				        	// $("#asof").val(obj.signatory.date_responded);
				        	// $("#comments").val(obj.signatory.comment);

				          	$('#update').modal('show');
				        }
				    });
		}


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

	</div>
</div>



			<div class="clearfix"></div>
			<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Document Tracki</a>. All Rights Reserved.</p>
			</div>
			</footer>

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

</script>


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


<!-- start of response modal -->
<div id="response" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
	<div class="modal-content">
		<div class="modal-header" style="background-color: #34495E; color: #fff; font-family: 'Josefin Slab';">
			<button type="button" style="color:#fff;" class="close" data-dismiss="modal">&times;</button>
			<h2 class="text-center modal-title"> Return File </h2>
		</div>
		<?php echo form_open_multipart('home/return_file',['class'=>'form-horizontal']); ?>
		<div class="modal-body">
			<h4 class="text-center" style="color:red; font-size:26px; font-style:bold;"> You're about to return this file: </h4> <br>
			<?php foreach ($inb as $inbox){ ?>
			<p style="margin-left:70px; font-size:20px;>"><strong>
				TRACKING NO:
			</p>
			<p style="margin-left:70px; font-size:20px; color: black;">
				<strong><?php echo $idno;?></strong></p>
			<p style="margin-left:70px; font-size:20px;>"><strong>
				TITLE:
			</p>
			<p style="margin-left:70px; font-size:20px; color: black;">
				<strong><?php echo $inbox['document_title'];?></strong></p>

			<div class="row">
					<input type="hidden" id="<?php echo $inbox['document_id'];?>" name="document_id" value="<?php echo $inbox['document_id'];?>"/>
			</div>

			<div class="row">
					<input type="hidden" id="<?php echo $inbox['employee_id'];?>" name="sender" value="<?php echo $inbox['employee_id'];?>"/>
			</div>
			<?php }?>	

			<?php foreach ($pro as $prof){ ?>
			<div class="row">
					<input type="hidden" id="<?php echo $prof['employee_id'];?>" name="employee_id" value="<?php echo $prof['employee_id'];?>"/>
			</div>
			<?php }?>

			<?php foreach ($orig as $origin){ ?>
			<div class="row">
					<input type="hidden" id="<?php echo $origin['employee_id'];?>" name="recipient" value="<?php echo $origin['employee_id'];?>"/>
			</div>
			<p class="text-center" style="font-size:20px;>"><strong>
				TO:
			</p>
			<p style="margin-left:70px; font-size:20px;>"><strong>
				EMPLOYEE ID:
			</p>
			<p style="margin-left:70px; font-size:20px; color: black;">
				<strong><?php echo $origin['employee_id'];?></strong></p>

			<p style="margin-left:70px; font-size:20px;>"><strong>
				EMPLOYEE NAME:
			</p>
			<p style="margin-left:70px; font-size:20px; color: black;">
				<strong><?php echo $origin['lname'];?>,<?php echo $origin['fname'];?> <?php echo $origin['mname'];?></strong></p>
			<?php }?>

			<div style="display:block; margin-left:auto; margin-right:auto; width:80%;">
			<h4 class="text-center"> Comments/Remarks: </h4>
			<textarea style="border:2px solid red;" class="form-control" id="comment" name="comment" rows="3">none</textarea> <br>
			</div>
		</div>
		
		<div class="modal-footer">
			<button type="submit" class="btn btn-info">Return</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		</div>
	</div>
	<?php echo form_close();?>
</div>
</div>
<!-- end of response modal -->


<!-- start of forward modal -->
<div id="forward" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
	<div class="modal-content">
		<div class="modal-header" style="background-color: #34495E; color: #fff; font-family: 'Josefin Slab';">
			<button type="button" style="color:#fff;" class="close" data-dismiss="modal">&times;</button>
			<h2 class="text-center modal-title"> Forward File </h2>
		</div>
		<?php echo form_open_multipart('home/forward_file',['class'=>'form-horizontal']); ?>
		<?php foreach ($inb as $inbox){ ?>
		<div class="modal-body">
			<p style="font-size:20px;"><strong> TRACKING NO: </strong></p>
			<p style="font-size:20px; color: black;">
			<strong><?php echo $idno;?></strong></p>
			<p style="font-size:20px;"><strong> TITLE: </strong></p>
			<p style="font-size:20px; color: black;">
			<strong><?php echo $inbox['document_title'];?></strong></p>
		<?php }?>	
			<p style="font-size:20px;"><strong> RECEIVER: </strong><p>
			<select name="employee" class="form-control">
							<?php foreach ($emp as $empoy){ ?>
							    <option value="<?php echo $empoy->employee_id; ?>"><?php echo $empoy->lname.','.$empoy->fname.'  '.$empoy->mname; ?></option>
							<?php } ?>
			</select>	
			<?php foreach ($inb as $inbox){ ?>
			<div class="row">
					<input type="hidden" id="<?php echo $inbox['document_id'];?>" name="document_id" value="<?php echo $inbox['document_id'];?>"/>
			</div>
			<?php }?>
			<?php foreach ($pro as $prof){ ?>
			<div class="row">
					<input type="hidden" id="<?php echo $prof['employee_id'];?>" name="employee_id" value="<?php echo $prof['employee_id'];?>"/>
			</div>
			<?php }?>
		</div>
		
		<div class="modal-footer">
			<button type="submit" class="btn btn-info">Save</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		</div>
	</div>
		<?php echo form_close();?>
</div>
</div>
<!-- end of forward modal -->


<!-- start of update modal -->
<div id="update" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
	<div class="modal-content">
		<div class="modal-header" style="background-color: #34495E; color: #fff; font-family: 'Josefin Slab';">
			<button type="button" style="color:#fff;" class="close" data-dismiss="modal">&times;</button>
			<h2 class="text-center modal-title"> Update Status of this File </h2>
		</div>
		<?php echo form_open_multipart('home/update_file',['class'=>'form-horizontal']); ?>
		<?php foreach ($inb as $inbox){ ?>
			<div class="row">
					<input type="hidden" id="<?php echo $inbox['document_id'];?>" name="document_id" value="<?php echo $inbox['document_id'];?>"/>
			</div>
			<div class="row">
					<input type="hidden" id="<?php echo $inbox['sender'];?>" name="sender" value="<?php echo $inbox['sender'];?>"/>
			</div>
		<?php }?>
		<?php foreach ($pro as $prof){ ?>
			<div class="row">
					<input type="hidden" id="<?php echo $prof['employee_id'];?>" name="employee_id" value="<?php echo $prof['employee_id'];?>"/>
			</div>
		<?php }?>	
		
		<div class="modal-body">
			<br><p style="font-size:20px;"><strong> SELECT STATUS: </strong><p>
			<div class="dropdown">
				<!-- sample statuses -->
				<select name="status" class="form-control">
					<?php foreach ($stat as $status){ ?>
							    <option value="<?php echo $status->status_desc; ?>"><?php echo $status->status_desc;?></option>
					<?php } ?>
				</select>
			</div><br><br>
			
			<div style="width:90%;">
			<p style="font-size:20px;"><strong> COMMENTS/REMARKS: </strong></p>
			<textarea class="form-control" id="comment" name="comment" rows="5">none</textarea> <br>
			</div><br>
		</div>
		
		<div class="modal-footer">
			<button type="submit" class="btn btn-info">Save</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		</div>
	</div>
		<?php echo form_close();?>
</div>
</div>
<!-- end of update modal -->
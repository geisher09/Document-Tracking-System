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
		  	<?php foreach ($pro as $prof){ ?>
							<img style="width:35px;height:35px;float:left;" src="<?php echo base_url($prof['image']); ?>" class="img-circle" alt="Avatar"><span style="font-size:25px;color:white;margin-left:5px;"><strong>
							<?php echo $prof['lname'];?>, <?php echo $prof['fname'];?>
							</strong></span>
							<span style="font-size:20px;color:white;"> /<?php echo $prof['username'];?>/</span>
			<?php } ?>
			<br>
			<hr />
			<p style="font-size:20px; color: white;  font-style:italic;" text-align="center">SENT FILE DETAILS</p>
			<p style="font-size:20px; color: white;"><label style="font-weight: normal; color: white;";>Document Tracking no:</label>
			<strong>&emsp;<?php echo $idno;?><strong></p>
			<?php foreach ($snt as $sent){ ?>
			<p style="font-size:20px;font-weight:normal;color:white;">Title:&emsp;<?php echo $sent['document_title'];?>
			</p>
			<p style="font-size:20px;font-weight:normal;color:white;">Description:&emsp;<?php echo $sent['document_desc'];?>
			</p>
			<p style="font-size:20px;font-weight:normal;color:white;">Document was last sent to:&emsp;<?php echo $sent['lname'];?>, <?php echo $sent['fname'];?> <?php echo $sent['mname'];?>
			</p>
			<p style="font-size:20px;font-weight:normal;color:white;">In the:&emsp;<?php echo $sent['department_desc'];?>
			</p>
			<p style="font-size:20px;font-weight:normal;color:white;">Current Status:&emsp;<?php echo $sent['status'];?>
			</p>
			<?php
					date_default_timezone_set('Asia/Manila');
					$mydate = strtotime($sent['date_of_action']);

			?>
			<p style="font-size:20px; font-weight: normal; color: white;">As of:&emsp;<?php echo date('F d, Y ', $mydate);?>
			 at <?php echo date('g:i a', $mydate);?>
			</p>
			<br>

				<!-- <button class="btn btn-default btn-sm" id="<?php echo $sent['tracking_no']; ?>" type="button" onclick="window.open('<?php echo site_url('Home/view_docu/?file='.$sent["tracking_no"]) ?>')">View file&nbsp;&nbsp;<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button> -->
				<button class="btn btn-default btn-md" id="<?php echo $sent['tracking_no']; ?>" type="button" onclick="window.open('<?php echo site_url('Home/view_docu/?file='.$sent["document_file"]) ?>')">View file&nbsp;&nbsp;<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button>
				<button class="btn btn-primary btn-md" type="button" onclick="window.location='<?php echo site_url('Home/docu');?>'">Back&nbsp;<span class="fa fa-arrow-left" aria-hidden="true"></span></button>

			<?php } ?>
			</div>




<!-- modal of details about the document-->
	<div id="inbox_details" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #34495E">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title" style="text-align:center; color:white;">DOCUMENT DETAILS</h3>
				</div>

				<div class="modal-body zoomIn animated">
					<div id="basicid">

					</div>
				</div>

			</div>
		</div>
	</div>



</div>


</div>

	<!-- END WRAPPER -->
	<!-- Javascript -->


<!-- javascript -->
<script>
function openFolder (evt, folder) {

	var x, tablinks, tabcontent;
	tablinks= document.getElementsByClassName ("tabcontent");
	for (x=0; x < tablinks.length; x++) {
		tablinks[x].style.display = "none";
	}

	tabcontent= document.getElementsByClassName ("tablink");
	for (x=0; x < tablinks.length; x++) {
		tabcontent[x].className= tabcontent[x].className.replace("active", " ");
	}
	document.getElementById(folderName).style.display = "block";
	evt.currentTarget.className += " active";
}

$('.dropdown-toggle').dropdown();
function openFolder (evt, folderName) {

	var x, tablinks, tabcontent;
	tablinks= document.getElementsByClassName ("tabcontent");
	for (x=0; x < tablinks.length; x++) {
		tablinks[x].style.display = "none";
	}

	tabcontent= document.getElementsByClassName ("tablink");
	for (x=0; x < tablinks.length; x++) {
		tabcontent[x].className= tabcontent[x].className.replace("active", " ");
	}
	document.getElementById(folderName).style.display = "block";
	evt.currentTarget.className += " active";

	// for (x=0; x < tablinks.length; x++) {
	// 	tabcontent[x].className= tabcontent[x].className.replace("notactive", " ");
	// }
	// document.getElementById(folderName).style.display = "block";
	// evt.currentTarget.className += " notactive";
}

document.getElementById("defaultOpen").click();

$('.modal').on('hidden.bs.modal', function (e) {
  if($('.modal').hasClass('in')) {
    $('body').addClass('modal-open');
  }
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
        <div class="modal-header" style="background-color: #555555">
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

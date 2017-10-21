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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-link"></i> <span>Quicklinks</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a data-toggle="modal" href="#send_details"><i class="lnr lnr-pencil"></i> Compose</a></li>
								<li><a href="<?php echo site_url('Home/docu'); ?>"><i class="lnr lnr-inbox"></i> Inbox</a></li>
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
						<li><a href="<?php echo site_url('Home/offices'); ?>" class=""><i class="lnr lnr-apartment"></i><span>Offices and </span><i class="lnr lnr-users"></i><span>Employees</span></a></li>
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
<p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;">Home</p>
<div class="container-fluid body">
<div class="container-fluid red">
<h1 style="color: #7FB3D5;"><strong> Profile </strong></h1>
	<div class="container-fluid profilebox">
				<div class="row" >
				<!-- temporary profile picture & sample profile info  -->
					<div class="col-md-12 col-sm-12 col-xs-12 roundbox">
						<?php foreach ($pro as $prof){ ?>
							<img src="<?php echo base_url($prof['image']); ?>" class="img-responsive img-circle"
								alt="Profile Picture" id="profilepic" />
								
							<p style="color: #fff; font-size: 35px; text-align: center;"><strong><?php echo $prof['username']; ?></strong></p><br />
						<?php } ?>
					</div>
				</div>
				
				
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 info" style="background-color: #424242; overflow: auto;">
							

								<h4 class="hdr">Personal Info</h4>
								<div class="row">
								
								<div class="col-md-2 col-sm-2 col-xs-2" style="margin: 10px 0px ;">
								<ul class="list-unstyled list-justified" style="color: #7FB3D5;">
									<li>Name: </li>
									<li>Employee ID:</li>
									<li>Department: </li>
									<li>Department ID: </li>
									<li>Position: </li>
								</ul>
								</div>
								
								<div class="col-md-4 col-sm-4 col-xs-4" style="margin: 10px 0px ;">
								<ul class="list-unstyled list-justified" style="color: #fff; font-weight: bold;">
									<?php foreach ($pro as $prof){ ?>
									<li><span><?php echo $prof['lname']; ?>, <?php echo $prof['fname']; ?>&nbsp;  <?php echo $prof['mname']; ?> </span></li>
									<li><span><?php echo $prof['employee_id']; ?></span></li>
									<li><span><?php echo $prof['department_desc']; ?></span></li>
									<li><span><?php echo $prof['department_id']; ?></span></li>
									<li><span><?php echo $prof['position']; ?></span></li>
									<?php } ?>
								</ul>
								</div>
								
								</div>
								
								<!--
								<?php foreach ($pro as $prof){ ?>
									<p>	<?php echo $prof['lname']; ?>,
										<?php echo $prof['fname']; ?>&nbsp;
										<?php echo $prof['mname']; ?>
									</p>
									<p>Employee ID: <?php echo $prof['employee_id']; ?> </p>
									<p>Department: <?php echo $prof['department_desc']; ?> </p>
									<p>Department ID: <?php echo $prof['department_id']; ?> </p>
									<p>Position: <?php echo $prof['position']; ?> </p> <br />
								<?php } ?> -->

								<!-- <p><?php echo $username; ?> </p>
								<p>Employee ID: <?php echo $employee_id; ?> </p>
								<p>Department: <?php echo $dept; ?> </p>
								<p>Department ID: <?php echo $department_id; ?> </p>
								<p>Position: <?php echo $position; ?> </p> <br /> -->
							
						</div>
					</div>
				

		</div>
	</div>
</div>
		
		<!-- start of send document modal -->
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
				<div class=" col-md-10">
					<label for="">Attach File:</label>
						<?php echo form_upload(['name'=>'file', 'accept'=>'document/*']); ?>
					</div>

					<div class="col-lg-10">
						<?php echo form_error('file'); ?>
			  		</div>
				</div> <br/><br/>
			<div>
				<button type="submit" class="btn btn-primary">Save</button>
				<button type="reset" class="btn btn-default">Reset</button>
			</div>
			<?php echo form_close();?>
        </div>
      </div>

		</div>
	</div><!-- end of send document -->
		
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
	document.getElementsByClassName("tablink")[0].click();

	function details(evt, windowName,id) {
		var i, x, tablinks;
		x = document.getElementsByClassName("window");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablink");
		for (i = 0; i < x.length; i++) {
		tablinks[i].className= tablinks[i].className.replace("active", " ");
		}
		document.getElementById(windowName).style.display = "block";
		evt.currentTarget.className += " active";
		};

		$(document).ready(function() {
		  $('#modal-6').on('show.bs.modal', function(e) {
		    var id = $(e.relatedTarget).data('id');
		    alert(id);
		  });
		});



function wow(id){
			$.ajax({
			        type: 'POST',
			        url: 'ajax_list',
			        data:{id: id},
				        success: function(data) {
				        	var obj = JSON.parse(data);
				        	console.log(obj.inbox);

				        	var s="";

							s = '<h4 style="font-weight:bold; color:#000;">Document Tracking Number: '+obj.inbox.tracking_no+'<br /><br />'
							+'Title: '+obj.inbox.document_title+'<br /><br />'
							+'Description: '+obj.inbox.document_desc+'<br /><br />'
							+'Response: '+obj.inbox.response+'<br /><br />'
							+'As of: '+obj.inbox.date_responded+'<br /><br />'
							+'From (Employee No.): '+obj.inbox.employee_id+'<br /><br />'
							+'From (Employee Name.): '+obj.inbox.lname+','+obj.inbox.fname+'&nbsp'+obj.inbox.mname+'<br /><br />'+'</h4>';
							// Description: <br /><br /><br /><br /><br /><br />
							// Date Received: <br /><br />
							// Status: <br /><br />
				          $('#basicid').html(s);
				          $('#inbox_details').modal('show');
				        }
				    });
		}


function send(id){
			$.ajax({
			        type: 'POST',
			        url: 'ajax_list',
			         data:{id: id},
				        success: function(data) {
				        	var obj = JSON.parse(data);
				        	console.log(id);

				          $('#empid').val(id);
				          $('#send_details').modal('show');

				        }
				    });
		}



function sos(id){
			$.ajax({
			        type: 'POST',
			        url: 'ajax_list',
			        data:{id: id},
				        success: function(data) {
				        	var obj = JSON.parse(data);
				        	console.log(obj.inbox.document_id);

				        	var s="";

						  $('#track_no').val(obj.inbox.tracking_no);
						  $('#doc_id').val(obj.inbox.document_id);
						  $('#sig_id').val(obj.inbox.signatory_id);
				          $('#inbox_response').modal('show');
				        }
				    });
		}


function pop(id){
			$.ajax({
			        type: 'POST',
			        url: 'ajax_list',
			        data:{id: id},
				        success: function(data) {
				        	var obj = JSON.parse(data);
				        	console.log(obj.signatory);
				        	$('#employee_id').val(obj.signatory.employee_id);
				        	$("#employee_name").val(obj.signatory.lname+','+obj.signatory.fname+' '+obj.signatory.mname);
				          	$("#response").val(obj.signatory.response);
				        	$("#asof").val(obj.signatory.date_responded);
				        	$("#comments").val(obj.signatory.comment);

				          $('#sig_detail').show();
				        }
				    });
		}



function lol(id){
			document.getElementById("Signatories").innerHTML="";
			$('#sig_detail').hide();
			$.ajax({
			        type: 'POST',
			        //dataType:'json',
			        url: 'ajax_list',
			        data:{id: id},
				        success: function(data) {
				        	var obj = JSON.parse(data);
				        	console.log(obj.signatories);

				        	var s = "";
				        	var v = "";


								for(var i=0; i<parseInt(obj.signatories.length); i++){
									s += '<tr><td>'+obj.signatories[i].employee_id+'</td><td>'+obj.signatories[i].response+'</td><td><button class="btn btn-info" id="'+obj.signatories[i].signatory_id+'"type="button" onclick="pop(this.id)">&nbsp;<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></button></td></tr>';
		 					        //v += '<option value='+obj.pets[i].petid+'>'+obj.pets[i].pname+'</option>';
								}
								$("#Signatories").html(s);
								//$("#VpetsOwned").html(v);


							$('#adddocuno').val(id);
				        	$('#docuno').val(obj.sent.tracking_no);
				        	$('#docutitle').val(obj.sent.document_title);
				        	$("#docudesc").val(obj.sent.document_desc);
				        	$("#docustat").val(obj.sent.action);
				        	$("#docudate").val(obj.sent.date_of_action);
				        	$('#clientModal').modal('show');
				        }
			});
		}



</script>

	</div>
</div>

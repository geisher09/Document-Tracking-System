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
		  <div class="col-md-6">
			<h1 style="color: #7FB3D5;"><strong> My Documents <strong></h1>
		  </div>
		  <div class="col-md-6">
			<!-- search bar -->
			<form>
				<div class="form-group sbar input-group">
										<!-- <input type="text" name="q" onkeyup="search()" placeholder="Search" id="search"/> -->

					<input type="text" class="form-control" id="search" onkeyup="search()" name="q" placeholder="Search for" required/>
					<span class="input-group-btn">
						<button type="submit" class="btn btn-primary" >
							<span class="glyphicon glyphicon-search"></span> Search
						</button>
					</span>
				</div>
			</form>

		   </div>
		   </div>
			<br />
			<?php foreach ($pro as $profi){ ?>
									<button class="btn btn-success btn-md" style="float: right;" type="button" id="<?php echo $profi['employee_id']; ?>" onclick="send(this.id)" style="float:right;">
										<span class="glyphicon glyphicon-share"></span> Compose
									</button> <br />
						<?php } ?>


					<?php if( $error = $this->session->flashdata('responsed')): ?>
							<div class="alert alert-dismissable alert-danger col col-md-6">
								<a href="<?php echo site_url('Home/docu'); ?>" class="close" data-dismiss="alert" aria-label="close">×</a>
								<i class="fa fa-window-close-o" aria-hidden="true"></i><?php echo $error; ?>
							</div>
							<br /><br /><br /><br />
					<?php endif; ?>

					<?php if( $error = $this->session->flashdata('response')): ?>
							<div class="alert alert-dismissable alert-success col col-md-6">
								<a href="<?php echo site_url('Home/docu'); ?>" class="close" data-dismiss="alert" aria-label="close">×</a>
								<i class="fa fa-check-square-o" aria-hidden="true"></i><?php echo $error; ?>
							</div>
							<br /><br /><br /><br />
					<?php endif; ?>
					<div class="tab">
						<button class="tablink active" onclick="openFolder(event, 'Inbox')" id="defaultOpen"><i class="lnr lnr-inbox"></i> Inbox&nbsp;<span class="badge bg-danger">5</span></button>
						<button class="tablink" onclick="openFolder(event, 'Sent')"><i class="lnr lnr-rocket"></i> Sent</button>
					</div>

					<div id="Inbox" class="tabcontent">
						<br />
						<!--- inbox table -->
						<table class="tablet table-list-search table-hover table-condensed table-responsive ">
							<tbody>
								<?php foreach ($inb as $inboxes){ ?>
								<tr class="dropdown">
									<td><img style="width: 30px; border: 2px solid gray;" src="<?php echo base_url($inboxes['image']); ?>" class="img-thumbnail" alt="Avatar"><span></span>&emsp;<?php echo $inboxes['lname']; ?>, <?php echo $inboxes['fname']; ?> <?php echo $inboxes['mname']; ?></td>
									<td>Forwarded file: <?php echo $inboxes['tracking_no']; ?>&nbsp;
										Entitled: 
									<?php echo $inboxes['document_title']; ?>...</td>
									<td><?php echo $inboxes['response']; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>


					<div id="Sent" class="tabcontent">
						<br />

						<!--- inbox table -->
							<table class="tablet table-list-search table-hover table-condensed table-responsive ">
								<tbody>
									<?php if(isset($snt) && sizeof($snt)>0): ?>
									<?php foreach ($snt as $sents){ ?>
									<?php
										date_default_timezone_set('Asia/Manila');
									 	$mydate = strtotime($sents['date_created']);
									 	$myd = date('Y-m-d',$mydate);
										$time =date("h:i:sa");
										$date = date("Y-m-d");
										$data['date'] = $date;
										$data['time'] = $time;
									?>
									<tr id="<?php echo $sents['tracking_no'];?>" onclick="window.location='<?php echo site_url('Home/sent/'.$sents['tracking_no']);?>'">
										<td><?php echo $sents['tracking_no']; ?>
											&emsp;&emsp;
										</td>
										<td><?php echo $sents['document_title']; ?>
											&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
											&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
											&emsp;&emsp;&emsp;&emsp;&emsp;
										</td>
										<?php if($myd==$date){?>
										<td><?php echo "Today"; ?> at <?php echo date('g:h a', $mydate);?></td>
										<?php }else{?>
										<td><?php echo date('M d, Y ', $mydate);?>
											 at <?php echo date('g:h a', $mydate); }?>
										</td>
										<!-- <td>
											<button class="btn btn-primary btn-sm" id="<?php echo $sents['document_id']; ?>" type="button" onclick="lol(this.id)">View Details&nbsp;<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></button>
											<button class="btn btn-default btn-sm" id="<?php echo $sents['tracking_no']; ?>" type="button" onclick="window.open('<?php echo site_url('Home/view_docu/?file='.$sents["document_file"]) ?>')">Viewasa&nbsp;<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button>
										</td> -->
									</tr>
									<?php } ?>
									<?php else: ?>
											<tr>NO RECORD FOUND!</tr>
									<?php endif; ?>

								</tbody>
							</table> <br/>
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
			         data:{id: id},
				        success: function(data) {
				        	var obj = JSON.stringify(data);
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

		<!--modal-->
		<div id="details" class="modal fade" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #E74C3C">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title" style="color: #641E16 text-align: center;">Document Details</h3>
					</div>

					<div class="modal-body">
					 <div>
						<h4 style="font-weight: bold">
							Document Tracking Number: <br /><br />
							Title: <br /><br />
							Description: <br /><br /><br /><br /><br /><br />
							Date Submitted: <br /><br />
							Date Received: <br /><br />
							Status: <br /><br />
							Signatories: <br /><br /><br /><br />
						</h4>
					 </div>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>

<script>
$(document).ready(function() {
	$('.dropdown-toggle').dropdown();
});

</script>

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
	<p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;">Home</p>
<div class="container-fluid">
	<div class="container-fluid red" >
				<div class="row" >
				<br />
				<!-- temporary profile picture & sample profile info  -->
				<div class="col-md-3 col-sm-12 col-xs-12 roundbox" style="margin-left:0px;">

					<div class="row">
						<?php foreach ($pro as $prof){ ?>
							<img src="<?php echo base_url($prof['image']); ?>" class="img-responsive"
								alt="Profile Picture" id="profilepic" />
						<?php } ?>
					</div>
					<div class="row">
							<div class="info">

								<?php foreach ($pro as $prof){ ?>
									<p><?php echo $prof['username']; ?></p><br />
									<p>	<?php echo $prof['lname']; ?>,
										<?php echo $prof['fname']; ?>&nbsp;
										<?php echo $prof['mname']; ?>
									</p>
									<p>Employee ID: <?php echo $prof['employee_id']; ?> </p>
									<p>Department: <?php echo $prof['department_desc']; ?> </p>
									<p>Department ID: <?php echo $prof['department_id']; ?> </p>
									<p>Position: <?php echo $prof['position']; ?> </p> <br />
								<?php } ?>

								<!-- <p><?php echo $username; ?> </p>
								<p>Employee ID: <?php echo $employee_id; ?> </p>
								<p>Department: <?php echo $dept; ?> </p>
								<p>Department ID: <?php echo $department_id; ?> </p>
								<p>Position: <?php echo $position; ?> </p> <br /> -->
							</div>
					</div>
				</div>



				<div class="col-md-8 col-sm-12 col-xs-12" >
					<h2><strong>My Documents </strong></h2> <br />
					<?php if( $error = $this->session->flashdata('responsed')): ?>
							<div class="alert alert-dismissible alert-danger">
								<?php echo $error; ?>
							</div>
					<?php endif; ?>

					<?php if( $error = $this->session->flashdata('response')): ?>
							<div class="alert alert-dismissible alert-success">
								<?php echo $error; ?>
							</div>
					<?php endif; ?>
					<div class="tab">
						<button class="tablink active" onclick="openFolder(event, 'Inbox')" id="defaultOpen"> Inbox </button>
						<button class="tablink" onclick="openFolder(event, 'Sent')"> Sent </button>
					</div>

					<div id="Inbox" class="tabcontent">
						<!--- inbox table -->
						<h2 style="color:white">Inbox</h2><br />
						<table class="table table-list-search table-hover table-condensed table-responsive ">
							<thead>
								<tr>
									<th>TRACKING NO. </th>
									<th>TITLE</th>
									<th>STATUS</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody>

								<?php foreach ($inb as $inboxes){ ?>
								<tr>
									<td><?php echo $inboxes['tracking_no']; ?></td>
									<td><?php echo $inboxes['document_title']; ?></td>
									<td><?php echo $inboxes['response']; ?></td>
									<td>
											<button class="btn btn-primary btn-sm" id="<?php echo $inboxes['signatory_id']; ?>" type="button" onclick="wow(this.id)">View Details&nbsp;<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></button>
											<button class="btn btn-default btn-sm" id="<?php echo $inboxes['tracking_no']; ?>" type="button" onclick="location.href = '<?php echo site_url('Home/download_docu/?file='.$inboxes["document_file"]) ?>'">Download&nbsp;<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
											
											<?php if(($inboxes['response'])=='Approved'){ ?>
											<button class="btn btn-success btn-sm" id="<?php echo $inboxes['signatory_id']; ?>" type="button" onclick="sos(this.id)" title="You already approved this file!" disabled>Approved&nbsp;<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></button>
											<?php }elseif(($inboxes['response'])=='Rejected'){?>
											<button class="btn btn-danger btn-sm" id="<?php echo $inboxes['signatory_id']; ?>" type="button" onclick="sos(this.id)" title="You already rejected this file!" disabled>Rejected&nbsp;<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>
											<?php }else{?>
											<button class="btn btn-info btn-sm" id="<?php echo $inboxes['signatory_id']; ?>" type="button" onclick="sos(this.id)" >Respond&nbsp;<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>
											<?php }?>
									</td>
								</tr>
								<?php } ?>
								<!-- <tr>
									<td><?php echo $dtn; ?></td>
									<td><?php echo $title; ?></td>
									<td><?php echo $status; ?></td>
									<td>
										<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#details">Details</button>
										<button class="btn btn-success btn-sm">
											Download <span class="glyphicon glyphicon-download-alt"></span>
										</button>
									</td>
								</tr> -->
							</tbody>
						</table>
					</div>


					<div id="Sent" class="tabcontent">
						<?php foreach ($pro as $profi){ ?>
							<h2 style="color:white; float:left">Sent</h2></br>
									<button class="btn btn-success btn-md" style="float: right;" type="button" id="<?php echo $profi['employee_id']; ?>" onclick="send(this.id)" style="float:right;">
										<span class="glyphicon glyphicon-share"></span> Send a Document
									</button> <br />
						<?php } ?>
						<br /><br />
						
						<!--- inbox table -->
							<table class="table table-list-search table-hover table-condensed table-responsive ">
								<thead>
									<tr>
										<th>TRACKING NO. </th>
										<th>TITLE</th>
										<th>STATUS</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($snt as $sents){ ?>
									<tr>
										<td><?php echo $sents['tracking_no']; ?></td>
										<td><?php echo $sents['document_title']; ?></td>
										<td><?php echo $sents['action']; ?></td>
										<td>
											<button class="btn btn-primary btn-sm" id="<?php echo $sents['document_id']; ?>" type="button" onclick="lol(this.id)">View Details&nbsp;<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></button>
											<button class="btn btn-default btn-sm" id="<?php echo $sents['tracking_no']; ?>" type="button" onclick="location.href = '<?php echo site_url('Home/download_docu/?file='.$sents["document_file"]) ?>'">Download&nbsp;<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>

											<!-- <button class="btn btn-default btn-sm">
												Download <span class="glyphicon glyphicon-download-alt"></span>
											</button> -->
										</td>
									</tr>
									<?php } ?>
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


<!-- modal of details about the document-->
	<div id="inbox_response" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">
			<!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header" style="background-color: #34495E">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title" style="text-align:center; color:white;">RESPOND TO THIS FILE</h3>
				</div>
			      		<div class"form-group">

			      			<?php echo form_open('home/saverespond', ['class'=>'form-horizontal']); ?>
			      			<div class="col-md-12 form-group">
			      			<br />
							<label for="">Tracking no:</label>
								  <input type="text" class="form-control" id="track_no" name="track_no" disabled></textarea>
							</div>
							<div class="col-md-12 form-group">
								<input type="hidden" id="sig_id" name="sig_id"/>
							</div>
							<div class="col-md-12 form-group">
								<input type="hidden" id="doc_id" name="doc_id"/>
							</div>
							<div class="col-md-12 form-group">
								<label for="">Response:</label>
							        <select class="form-control" name="response">
										  <option value="Approved">Approve</option>
										  <option value="Rejected">Reject</option>
									</select>
							</div>
							
							<div class="col-md-12 form-group">
								<br /><br />
										<label for="">Comments :</label>
										<textarea class="form-control" id="comment" name="comment" rows="3">None</textarea>
							</div>

							<div class="form-group">
							        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							        <button type="submit" class="btn btn-primary">Save</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						    </div>
						    <?php echo form_close(); ?>
						</div>    
			    </div>
		</div>
	</div>


</div>



<div class="modal fade" id="clientModal" role="dialog">
    <div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header" style="background-color: #34495E">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title" style="text-align:center; color:white;">View Details</h3>
					<button class="tablink btn btn-default" onclick="details(event, 'clientDet')">Document Details</button>
					<button class="tablink btn btn-default" onclick="details(event, 'addSig')">Add Signatory</button>
			</div>

			<div class="modal-body">

					<div class="container-fluid window" id="clientDet">
					<p class="lead text-center">Document Details</p>
						<div class="row">
							<div class=" col-md-5 form-group">
								<label for="">Tracking no:</label>
								<input type="text" class="form-control form-inline" id="docuno" name="docuno" value="" disabled="true"/>
							</div>
							<div class=" col-md-7 form-group">
								<label for="">Title:</label>
								<input type="text" class="form-control form-inline" id="docutitle" name="docutitle" value="" disabled="true"/>
							</div>
						</div>
						<div class="row">
								<div class=" col-md-8 form-group">
									<label for="">Description:</label>
									<textarea id="docudesc"class="form-control" name="docudesc" rows="2" readonly></textarea>
								</div>
							</div>
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="">Document Status:</label>
								<input type="text" class="form-control" id="docustat" name="docustat" value="" disabled="true"/>
							</div>
							<div class="col-md-6 form-group">
								<label for="">As of:</label>
								<input type="text" class="form-control" id="docudate" name="docudate" value="" disabled="true"/>
							</div>
						</div>

					<div class="row">
						<div class="col-md-6">
								<p class="lead text-center">List of Signatory(s)</p>
								<div style="height: 300px; overflow: auto">
									<table id="sigList" class="table" style="margin-top: 20px;">
										<th align="center" class="text-center table-bordered bg-info" style="background-color:#000000;">Employee ID</th>
										<th align="center" class="text-center table-bordered bg-info" style="background-color:#000000;">Response</th>
										<th align="center" class="text-center table-bordered bg-info" style="background-color:#000000;">View Details</th>
										<tbody align="center" id="Signatories" style="color: black;" name="Signatories">
											<!-- <tr>
												<td>
													lol
												</td>
											</tr> -->
										</tbody>
									</table>
								</div>
						</div>

						<div class="col-md-6 collapse" id="sig_detail">
							<p class="lead text-center">Signatory Details</p>
									<div class="form-group">
										<span style="white-space: nowrap">
										<label for="">Employee Name:</label>
										<input type="text" class="form-control" id="employee_name" name="employee_name" value="" disabled="true">
										</span>
									</div>

									<div class="form-group">
										<label for="">Employee id:</label>
										<input type="text" class="form-control" id="employee_id" name="employee_id" value="" disabled="true"/>
									</div>

									<div class="form-group">
										<label for="">Response:</label>
										<input type="text" class="form-control" id="response" name="response" value="" disabled="true"/>
									</div>


									<div class="form-group">
										<label for="">As of:</label>
										<input type="text" class="form-control" id="asof" name="asof" value="" disabled="true"/>
									</div>

									<div class="row">
										<div class="col-md-12 form-group">
											<label for="">Comment:</label>
											<textarea id="comments" class="form-control" name="comments" rows="2" readonly></textarea>
										</div>
									</div>

						</div>
					</div>
				</div>

				<div class="container-fluid window" id="addSig">
					<p class="lead text-center">Add a Signatory</p>
					<div class="col-md-2"></div>
					<form></form>
					<?php echo form_open('home/savesig', ['class'=>'form-horizontal']); ?>
					<div class="col-md-8">
							<div class="col-lg-12">
							      <div class="col-sm-6">
							        <select name="employee" class="form-control">
									<?php foreach ($emp as $empoy){ ?>
							          <option value="<?php echo $empoy->employee_id; ?>"><?php echo $empoy->lname.','.$empoy->fname.'  '.$empoy->mname; ?></option>
							        <?php } ?>
							        </select>
							      </div>
				     		</div>

							<div class="form-group">
								<input type="hidden" id="adddocuno" name="adddocuno"/>
							</div>

						<div>
							<button type="submit" class="btn btn-primary">Save</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
						<?php echo form_close();?>
					</div>
					<div class="col-md-2"></div>
				</div>



			<!-----------------FOOTER ------------>
			<!-- <div class="modal-footer">
				<button type="button" onclick="" class="btn btn-primary" data-dismiss="modal">Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div> -->
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

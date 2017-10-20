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
				<img src="<?php echo base_url('assets/images/logo2.png');?>" alt="DTS Logo" class="img-responsive logo2">
				<a href="index.html" style="font-family: 'Josefin Slab'; font-size: 27px; color: #34495E;">
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
						<li><a href="<?php echo site_url('Home/home'); ?>" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php echo site_url('Home/docu'); ?>" class=""><i class="lnr lnr-inbox"></i> <span>My Documents</span></a></li>
						<li><a href="<?php echo site_url('Home/offices'); ?>" class=""><i class="lnr lnr-apartment"></i> <span>Offices</span></a></li>
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
	<p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;">Home</p>
<div class="container-fluid col-md-8">
	<div class="container-fluid red" >	
	<div class="row">
	   <div class="col-md-6">
	   	<?php foreach ($pro as $prof){ ?>
	   	<h1><strong>Welcome <?php echo $prof['username'];?>!</strong></h1>
		<?php } ?>

	   </div>
	</div>
			<form>
				<div class="form-group input-group home-searchbar">
					<!-- <input type="text" class="form-control" id="system-search" name="q" placeholder="Document to track..." required/> -->
					<input type="text" class="form-control" id="system-search" name="q" placeholder="Document to track..." required/>
					<!-- <input type="text" class="form-control" id="search" onkeyup="search()" name="q" placeholder="Search for" required/> -->
					<span class="input-group-btn">
						<button type="submit" class="btn btn-success" id="show" >
							<span class="glyphicon glyphicon-search"></span> Track
						</button>
					</span>
				</div>
			</form>

			<div id="map2" class="collapse">
					<h2><i>Tracking Details Of your Document...</i></h2>
						<div class="main" style="margin-right:200px;">
							<ul class="cbp_tmtimeline">
								<li id="summary">

								</li>
								<li id="department">

								</li>
								<li id="signatories">

								</li>
								<li>
									<div id="sender_view2">
									 <!-- <time class="cbp_tmtime" datetime="2017-01-16 21:30"><span>1/1/17</span> <span>21:30</span></time> -->
									 <time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;"></span></time>
									<div class="cbp_tmicon cbp_tmicon-earth"></div>
									<div class="cbp_tmlabel">
										<h2 id="sender2"></h2>
										<p id="comment2"></p>
									</div>
								</div>
								</li>
							</ul>
						</div>
					</div>

					<div id="error" class="collapse" style="margin-left:100px;">
					<div class="col-md-10 col-sm-10 col-xs-10 roundbox flipInX animated" style="margin-center:0px;"><h4 style="color: white; "><span class="glyphicon glyphicon-search"></span>&nbsp;Please search a valid document!</h4></div>
					</div>

					<div class="clearfix"></div>
			<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="<?php echo site_url('Home/home'); ?>" target="_blank">Document Tracking System</a>. All Rights Reserved.</p>
			</div>
			</footer>

		<!-- script for show/hide -->

		<script>
$(document).ready(function() {
	$('.dropdown-toggle').dropdown();

	$('#show').on('click', function(e) {
		e.preventDefault();
		var id = $("#system-search").val();
		if(id != ''){
			// alert(id);
			$.ajax({
							type: 'POST',
							url: 'histo',
							 data:{id: id},
								success: function(data) {
									// $('#invalid_view').hide(500);
									// var obj = JSON.stringify(data)
									// alert(data);
									$("#error").hide(500);
									$("#map2").hide(500);
									var obj = JSON.parse(data)
									var max = parseInt(obj.count);
									var splitarray = new Array();
									splitarray= obj.origin.date_created.split(" ");
									var dateTime = moment( obj.origin.date_created).format('MM-DD-YYYY HH:mm:ss');
									var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
									// var date = new Date(obj.origin.date_created);
									// alert(new Date(obj.origin.date_created));


									if(obj.status=="Rejected"){
										//initial
										$('#sender2').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										$('#send_date2').html(date);
										$('#comment2').html(obj.origin.document_desc);
										var s="";
										var v="";
										var d="";
										// alert(data);
										for(var i=0; i<parseInt(obj.signatories.length); i++){
											if(obj.signatories[i].response == "Rejected"){
												var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
												var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
												s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
												+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-remove"></span>&nbsp;Rejected</h2><p id="comment2">'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname+'</p></h2></div>';
												$("#signatories").html(s);
											}
											else if(obj.signatories[i].response == "Approved"){
							          var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
												var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
												s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
												// alert(mom2);
												// s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.signatories[i].date_responded
												+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-ok"></span>&nbsp;Approved</h2><p id="comment2">'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname+'</p></h2></div>';
												$("#signatories").html(s);
											}
											else if(obj.signatories[i].response == "Pending"){
												var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
												var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
												s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
												+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-ban-circle"></span>&nbsp;Pending</h2><p id="comment2">'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname+'</p></h2></div>';
												$("#signatories").html(s);
											}
											var a=i+1;
												if(a==i<parseInt(obj.signatories.length)){
													if(obj.signatories[i].response == "Approved"){
														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;Delivered</h2><p id="comment2">'+obj.signatories[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>To Employee :'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname
														+'<br/>Department :'+obj.signatories[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}
													else if(obj.signatories[i].response == "Rejected"){
														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;Delivered</h2><p id="comment2">'+obj.signatories[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>Was rejected by Employee: '+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname
														+'<br/>Department: '+obj.signatories[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}
													else if(obj.signatories[i].response == "Pending"){
														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;Last Department</h2><p id="comment2">'+obj.signatories[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>Is still in Employee: '+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname
														+'<br/>Department: '+obj.signatories[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}

												}
											}
											$("#map2").show(500);
									}
									else if(obj.status=="Approved"){
										//initial
										$('#sender2').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										$('#send_date2').html(date);
										$('#comment2').html(obj.origin.document_desc);
										var s="";
										var v="";
										var d="";
										// alert(data);
										for(var i=0; i<parseInt(obj.signatories.length); i++){
											if(obj.signatories[i].response == "Rejected"){
												var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
												var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
												s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
												+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-remove"></span>&nbsp;Rejected</h2><p id="comment2">'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname+'</p></h2></div>';
												$("#signatories").html(s);
											}
											else if(obj.signatories[i].response == "Approved"){
												var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
												var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
												s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
												+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-ok"></span>&nbsp;Approved</h2><p id="comment2">'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname+'</p></h2></div>';
												$("#signatories").html(s);
											}
											else if(obj.signatories[i].response == "Pending"){
												var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
												var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
												s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
												+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-ban-circle"></span>&nbsp;Pending</h2><p id="comment2">'
												+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname+'</p></h2></div>';
												$("#signatories").html(s);
											}
											var a=i+1;
												if(a==i<parseInt(obj.signatories.length)){
													if(obj.signatories[i].response == "Approved"){
														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;Delivered</h2><p id="comment2">'+obj.signatories[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>To Employee :'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname
														+'<br/>Department :'+obj.signatories[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}
													else if(obj.signatories[i].response == "Rejected"){
														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;Delivered</h2><p id="comment2">'+obj.signatories[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>Was rejected by Employee: '+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname
														+'<br/>Department: '+obj.signatories[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}
													else if(obj.signatories[i].response == "Pending"){
														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;Last Department</h2><p id="comment2">'+obj.signatories[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>Is still in Employee: '+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname
														+'<br/>Department: '+obj.signatories[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}

												}
											}
											$("#map2").show(500);
									}
									else if(obj.status=="Pending"){
										// alert("Pending");
										//initial
										$('#sender2').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										$('#send_date2').html(date);
										$('#comment2').html(obj.origin.document_desc);
										var s="";
										var v="";
										var d="";
										// if(parseInt(obj.signatories.length)!=0){
										if(obj.signa=="Yes"){
										for(var i=0; i<parseInt(obj.signatories.length); i++){
											if(obj.signatories[i].response == "Rejected"){
												var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
												var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
												s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
												+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-remove"></span>&nbsp;Rejected</h2><p id="comment2">'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname+'</p></h2></div>';
												$("#signatories").html(s);
											}
											else if(obj.signatories[i].response == "Approved"){
												var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
												var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
												s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
												+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-ok"></span>&nbsp;Approved</h2><p id="comment2">'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname+'</p></h2></div>';
												$("#signatories").html(s);
											}
											else if(obj.signatories[i].response == "Pending"){
												var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
												var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
												s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
												+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-ban-circle"></span>&nbsp;Pending</h2><p id="comment2">'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname+'</p></h2></div>';
												$("#signatories").html(s);
											}
											var a=i+1;
												if(a==i<parseInt(obj.signatories.length)){
													if(obj.signatories[i].response == "Approved"){
														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;Delivered</h2><p id="comment2">'+obj.signatories[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>To Employee :'+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname
														+'<br/>Department :'+obj.signatories[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}
													else if(obj.signatories[i].response == "Rejected"){
														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;Delivered</h2><p id="comment2">'+obj.signatories[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>Was rejected by Employee: '+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname
														+'<br/>Department: '+obj.signatories[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}
													else if(obj.signatories[i].response == "Pending"){
														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;Last Department</h2><p id="comment2">'+obj.signatories[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var dateTime = moment( obj.signatories[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
														var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>Is still in Employee: '+obj.signatories[i].lname+', '+obj.signatories[i].fname+' '+obj.signatories[i].lname
														+'<br/>Department: '+obj.signatories[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);

													}
												}
											}
											$("#map2").show(500);
										} //end of if
										else if(obj.signa=="No"){
											var dateTime = moment( obj.origin.date_of_action).format('MM-DD-YYYY HH:mm:ss');
											var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
											d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
											+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
											+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
											+'<br/>No responses from any sigantories yet</p></h2></div>';
											$("#summary").html(d);
											$("#map2").show(500);

										}
									}
								}
								// error: function(data){
								// 	// alert("asasa");
								// 	$("#map2").hide(500);
								// 	$("#error").show(500);
								// }
						});

		}
		else {
			$("#map2").hide(500);
			$("#error").show(500);
		}
	});
});

</script>

<script>
	function setTime() {
	var d = new Date(),
	  el = document.getElementById("time");

	  el.innerHTML = formatAMPM(d);

	setTimeout(setTime, 1000);
	}

	function formatAMPM(date) {
	  var hours = date.getHours(),
	    minutes = date.getMinutes(),
	    seconds = date.getSeconds(),
	    ampm = hours >= 12 ? 'pm' : 'am';
	  hours = hours % 12;
	  hours = hours ? hours : 12; // the hour '0' should be '12'
	  minutes = minutes < 10 ? '0'+minutes : minutes;
	  var strTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
	  return strTime;
	}

	setTime();



	var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

	</div>
</div>

<div class="container-fluid body col-md-4">
	<!--body-->
		<div class="container-fluid red">
		  <div class="row">
		  <div class="col-md-6">
			<h1><strong> All Documents <strong></h1>
		  </div>
		  <div class="col-md-12">
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
			<br />
			

			<!-- table -->
			<table class="table table-list-search table-hover table-responsive" id="mytable">
		    <!-- <table class="table table-list-search table-hover table-responsive "> -->
				<thead>
					<tr>
						<th>TRACKING NO. </th>
						<th>TITLE</th>
					</tr>
				</thead>
				<tbody>
					<?php if(isset($do)): ?>
					<?php foreach ($do as $document){ ?>
					<tr id="<?php echo $document['tracking_no'];?>" onclick='show(this.id)'>
						<td><?php echo $document['tracking_no'];?></td>
						<td><?php echo $document['document_title']; ?></td>
					</tr>
					<?php } ?>
					<?php else: ?>
							<tr>NO RECORD FOUND!</tr>
					<?php endif; ?>
				</tbody>
			</table>
			
			<div class="clearfix"></div>
			<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="<?php echo site_url('Home/home'); ?>" target="_blank">Document Tracking System</a>. All Rights Reserved.</p>
			</div>
			</footer>
		
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

	</div>
</div>
<script type="text/javascript">
	function show(id){
		$('#system-search').val(id);
	}
</script>
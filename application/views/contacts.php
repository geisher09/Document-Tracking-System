<!doctype html>
<html lang="en">

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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
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
						<li><a href="<?php echo site_url('Home/docu'); ?>" class=""><i class="lnr lnr-code"></i> <span>My Documents</span></a></li>
						<li><a href="<?php echo site_url('Home/offices'); ?>" class=""><i class="lnr lnr-chart-bars"></i> <span>Offices</span></a></li>
						<li><a href="<?php echo site_url('Home/contacts'); ?>" class=""><i class="lnr lnr-cog"></i> <span>Contacts</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo site_url('Home/profile'); ?>" class="">Profile</a></li>
									<li><a href="<?php echo site_url('Home/edit'); ?>" class="">Settings</a></li>
									<li><a href="<?php echo site_url('Home'); ?>" class="">Logout</a></li>
								</ul>
							</div>
						</li>
						
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
<div class="main">
			<!-- MAIN CONTENT -->		
	<p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;">Offices</p>
<div class="container-fluid body">

<!--body-->
		
	<div class="container-fluid red">
	<h1><strong>Contacts</strong></h1>
		<!---------------WARNING! DUMMY DATA AHEAD!-------------->
			<div style="width:100%;overflow:auto">
				<table id="mytable" class="table">
						<thead>
						<tr>
							<th>Department/Office</th>
							<th>PABX</th>
							<th>Direct Number</th>
							<th>E-mail Address</th>
							
						</tr>
						</thead>
						<tbody >
						<tr>
						<td><li>College of Architecture and Fine Arts (CAFA)</td>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dean's Office</ul></td>
								<td>01</td>
								<td>101.9145</td>
								<td>cafadean@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Architecture Department</ul></td>
											<td>02</td>
								<td>102.2017</td>
								<td>cafaarchi@gmail.com</td></tr>

							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fine Arts Department</ul></td>
											<td>03</td>
								<td>103.1992</td>
								<td>cafafa@gmail.com</td></tr>

							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graphics Technology Department</ul></td>
								<td>04</td>
								<td>104.1945</td>
								<td>cafagt@gmail.com</td></tr>
						</tr>
						<tr>
							<td><li>College of Industrial Education (CIE)</td>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dean's Office</ul></td>
								<td>11</td>
								<td>201.9145</td>
								<td>ciedean@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Technical Arts Department</ul></td>
											<td>12</td>
								<td>202.2017</td>
								<td>cietecharts@gmail.com</td></tr>

							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Economics Department</ul></td>
											<td>13</td>
								<td>203.1992</td>
								<td>ciehe@gmail.com</td></tr>

							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Professional Industrial Education Department</ul></td>
								<td>14</td>
								<td>204.1945</td>
								<td>ciepie@gmail.com</td></tr>
						</tr>
						<tr>
							<td><li>College of Industrial Technology (CIT)</td>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dean's Office</ul></td>
								<td>21</td>
								<td>301.9145</td>
								<td>citdean@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Basic Industrial Technology Department</ul></td>
											<td>22</td>
								<td>302.2017</td>
								<td>citbit@gmail.com</td></tr>

							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Civil Engineering Technology Department</ul></td>
											<td>23</td>
								<td>303.1992</td>
								<td>citcet@gmail.com</td></tr>

							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electrical Engineering Technology Department</ul></td>
								<td>24</td>
								<td>304.1945</td>
								<td>citelectricalet@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electronics Engineering Technology Department</ul></td>
								<td>25</td>
								<td>305.9145</td>
								<td>citelectronicset@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Food and Apparel Technology Department</ul></td>
											<td>26</td>
								<td>306.2017</td>
								<td>citfat@gmail.com</td></tr>

							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graphic Arts and Printing Technology Department</ul></td>
											<td>27</td>
								<td>307.1992</td>
								<td>citgapt@gmail.com</td></tr>

							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mechanical Engineering Technology Department</ul></td>
								<td>27</td>
								<td>308.1945</td>
								<td>citmet@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Power Plant Engineering Technology Department</ul></td>
								<td>28</td>
								<td>309.1945</td>
								<td>citppet@gmail.com</td></tr>
						</tr>
						<tr>
							<td><li>College of Liberal Arts (CLA)</td>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dean's Office</ul></td>
								<td>31</td>
								<td>401.1945</td>
								<td>cladean@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English Department</ul></td>
								<td>32</td>
								<td>402.1945</td>
								<td>claeng@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Filipino Department</ul></td>
								<td>33</td>
								<td>403.1945</td>
								<td>clafil@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical Education Department</ul></td>
								<td>34</td>
								<td>404.1945</td>
								<td>clape@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Social Sciences Department</ul></td>
								<td>35</td>
								<td>405.1945</td>
								<td>class@gmail.com</td></tr>
						</tr>								
						<tr>
							<td><li>College of Science (COS)</td>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dean's Office</ul></td>
								<td>51</td>
								<td>601.1945</td>
								<td>cosdean@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chemistry Department</ul></td>
								<td>52</td>
								<td>602.1945</td>
								<td>coschem@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mathematics Department</ul></td>
								<td>53</td>
								<td>603.1945</td>
								<td>cosmath@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physics Department</ul></td>
								<td>54</td>
								<td>604.1945</td>
								<td>cosphy@gmail.com</td></tr>
						</tr>								
						
						<tr>
							<td><li>Commission on Audit (COA)</td>
							<td>60</td>
							<td>701.2017</td>	
							<td>irtc@gmail.com</td>
						</tr>
						
						<tr>
							<td><li>College of Engineering (COE)</td>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dean's Office</ul></td>
								<td>41</td>
								<td>501.1945</td>
								<td>coedean@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COE Building Faculty Room</ul></td>
								<td>42</td>
								<td>502.1945</td>
								<td>coefac@gmail.com</td></tr>
							<tr><td><ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COE ESEP Building</ul></td>
								<td>43</td>
								<td>503.1945</td>
								<td>coeesep@gmail.com</td></tr>
						</tr>
						<tr>
							<td><li>Integrated Research and Training Center (IRTC)</td>
							<td>61</td>
							<td>702.2017</td>	
							<td>irtc@gmail.com</td>
						</tr>
						<tr>
							<td><li>Office of the President</td>
							<td>62</td>
							<td>703.2017</td>	
							<td>op@gmail.com</td>
						</tr>
						<tr>
							<td><li>Office of the Student Affairs (OSA)</td>
							<td>63</td>
							<td>704.4567</td>
							<td>--</td>	
						</tr>
						<tr>
							<td><li>Office of the University Research and Development Services (URDS)</td>
							<td>64</td>
							<td>705.2917</td>
							<td>--</td>
						</tr>
						<tr>
							<td><li>Office of the Vice President for Academic Affairs</td>
							<td>65</td>
							<td>706.2707</td>
							<td>vpaa@gmail.com</td>
						</tr>
						<tr>
							<td><li>Office of the Vice President for Research and Extension</td>
							<td>66</td>
							<td>707.2717</td>
							<td>vpre@gmail.com</td>
						</tr>
						
						
						</tbody>

				</table>
			</div>
			
		
		</div>
		<br/><br/><br/>

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

<script>
$(document).ready(function() {
	$('.dropdown-toggle').dropdown();	
});

</script>
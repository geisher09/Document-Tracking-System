<body>
	<div class= "container-fluid">
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			 
		</div>
	</div>
	
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 logo">
			<h1 align="center" style="color:#000;"><b> DOCUMENT TRACKING SYSTEM </b><h1>
		</div>
	</div>
	
	
	<nav class="navbar navbar-inverse navbar-fixed">
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="<?php echo site_url('Home/home'); ?>" >Home</a></li>
				<li><a href="<?php echo site_url('Home/profile'); ?>">Profile</a></li>
				<li><a href="<?php echo site_url('Home/docu'); ?>"> All Documents </a></li>
				<li><a href="<?php echo site_url('Home/add'); ?>">Send a Document</a></li>
				<li><a href="<?php echo site_url('Home/offices'); ?>">Offices & Employees</a></li>
			</ul>
    
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo site_url('Home/contacts'); ?>"><span class="glyphicon glyphicon-phone"></span> Contacts</a></li>
				<li><a href="<?php echo site_url('Home'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>


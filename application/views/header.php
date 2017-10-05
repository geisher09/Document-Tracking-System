<body>
	
	<h1 class="text-center title">DOCUMENT TRACKING SYSTEM</h1><br />
	
	<nav class="navbar navbar-inverse navbar-fixed">
		<div id="navigation">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo site_url('Home/home'); ?>"  style="color:white;" >Home</a></li>
				<li><a href="<?php echo site_url('Home/profile'); ?>" style="color:white;">Profile</a></li>
				<li><a href="<?php echo site_url('Home/docu'); ?>" style="color:white;"> All Documents </a></li>
				<li><a href="<?php echo site_url('Home/add'); ?>" style="color:white;">Send a Document</a></li>
				<li><a href="<?php echo site_url('Home/offices'); ?>" style="color:white;">Offices & Employees</a></li>
			</ul>
    
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo site_url('Home/contacts'); ?>" style="color:white;"><span class="glyphicon glyphicon-phone"></span> Contacts</a></li>
				<li><a href="<?php echo site_url('Home'); ?>" style="color:white;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	

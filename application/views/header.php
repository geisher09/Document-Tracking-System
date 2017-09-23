<!DOCTYPE html>
<html lang="en">
<head>
	<title> <?php echo $title; ?> </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">	
	
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css");?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/modi.css");?>" />
	
	<script src="<?php echo base_url("assets/js/ajax.js"); ?>" /></script>
	<script src="<?php echo base_url("assets/js/jquery.min.js"); ?>" /></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>" /></script>
	<script src="<?php echo base_url("assets/js/search.js"); ?>" /></script>

	
</head>
<body>
	<div class= "container-fluid">
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			 
		</div>
	</div>
	
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 logo">
			<h1 align="center"><b> DOCUMENT TRACKING SYSTEM </b>
		</div>
	</div>
	
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="<?php echo site_url('Home'); ?>" class="navbar-brand" >Home</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="<?php echo site_url('Home/profile'); ?>">Profile</a></li>
				<li><a href="<?php echo site_url('Home/docu'); ?>"> All Documents </a></li>
				<li><a href="<?php echo site_url('Home/add'); ?>">Add Documents</a></li>
				<li><a href="#">Offices & Employees</a></li>
			</ul>
    
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-phone"></span> Contacts</a></li>
				<li><a href="<?php echo site_url('Home/login'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>


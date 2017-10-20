<!doctype html>
<html lang="en">

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
							<div id="subPages" class="collapse">
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
	<p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;">Home</p>
<div class="container-fluid">
	<div class="container-fluid red" >
	<div class="row">
	   <div class="col-md-6">
		<h1><strong>Welcome <?php echo $username; ?>!</strong></h1>
	   </div>
	   <!-- <div class="col-md-6">

		<h3 style="color:#48C9B0;float:right;margin-top:20px;">
		  <?php echo $date; ?> | <span id='time'></span>
		</h3>
	   </div> -->


	</div>
			<!--		The current time is: <?php echo $time; ?>
					Today is: <?php echo $date; ?>
					<?php echo $username; ?> Cute <3
				</p>
				-->

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


			<div id="map2" class="collapse" style="text-align:left;">
			<h2><i>Tracking Details Of your Document...</i></h2>
				<div class="main">
					<ul class="cbp_tmtimeline">
						<li id="summary">

						</li>
						<li id="department">

						</li>
						<li id="approved">

						</li>
						<li id="rejected">

						</li>
						<li>
							<div id="sender_view2">
							 <!-- <time class="cbp_tmtime" datetime="2017-01-16 21:30"><span>1/1/17</span> <span>21:30</span></time> -->
							<time class="cbp_tmtime"><span id="send_date2"></span> <span id="send_time2"></span></time>
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

	</div>
	
	<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Document Tracki</a>. All Rights Reserved.</p>
			</div>
		</footer>
	<!-- END WRAPPER -->
	<!-- Javascript -->


<!-- script for show/hide -->
<script>
$(document).ready(function() {
	$('.dropdown-toggle').dropdown();

	$('#show').on('click', function(e) {  //nawala yung sa error message niya pag walang input di pwede sa functin(e)
			// 	$("#show").click(function(){

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
									// alert(data);
									// var obj = JSON.stringify(data)
									var obj = JSON.parse(data)
									//	alert(obj.count);
									var max = parseInt(obj.count);

									// var con = parseInt(obj.count);
									// console.log(data);
									// alert("total count of signatories: "+max);
									// alert(obj.status);
									// alert(obj.date[1].date_responded)
									for (a=0; a<max; a++){
										// alert(obj.date_sorted[a].date + obj.date[a].date_responded)
										// alert(obj.approved[a].lname)
										// alert(obj.rejected[a].lname);
									}
									// var a = obj.date_sorted[0].date
									// alert(obj.date_sorted[0].date);
									if((obj.date_sorted[0].date) == (obj.date[1].date_responded)){ //check if date is the same
										// alert("true");
									}
									// alert(obj.approved[0].lname);
									// alert(obj[4]);

									// alert(obj.approved);
									// var obj = JSON.parse(data);
									// alert(obj.document_id);
									// alert("parsed");
									// alert(obj.approved);
									var splitarray = new Array();
									splitarray= obj.origin.date_created.split(" ");
									if(obj.status=="Rejected"){
										alert("Rejected");
										//initial
										$('#sender2').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										$('#send_date2').html(splitarray[0]);
										$('#comment2').html(obj.origin.document_desc);
										var s="";
										// var con = parseInt(max);
										alert(data);
										for(var i=0; i<parseInt(obj.approved.length); i++){
											s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_responded
											// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
											+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-ok"></span>&nbsp;Approved</h2><p id="comment2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname+'</p></h2></div>';
											// con=con+1;
											$("#approved").html(s);
											var a=i+1;
												if(a==i<parseInt(obj.approved.length)){
														alert(obj.approved[i].lname);
														var v="";
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_of_action
														// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-import"></span>&nbsp;Delivered</h2><p id="comment2">'+obj.approved[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var d="";
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_responded
														// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-export"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>To Employee :'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'<br/>Department :'+obj.approved[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}
											}
											$("#map2").show(500);
											// $("#map2").show(500);


									}
									else if(obj.status=="Approved"){
										// alert("Approved");
										//initial
										$('#sender2').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										$('#send_date2').html(splitarray[0]);
										$('#comment2').html(obj.origin.document_desc);
										var s="";
										// var con = parseInt(max);
										// alert(data);
										for(var i=0; i<parseInt(obj.approved.length); i++){
											s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_responded
											+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-ok"></span>&nbsp;Approved</h2><p id="comment2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname+'</p></h2></div>';
											$("#approved").html(s);
											var a=i+1;
												if(a==i<parseInt(obj.approved.length)){
														// alert(obj.approved[i].lname);
														var v="";
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_of_action
														// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-import"></span>&nbsp;Delivered</h2><p id="comment2">'+obj.approved[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var d="";
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_responded
														// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-export"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>To Employee :'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'<br/>Department :'+obj.approved[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}
											}
											$("#map2").show(500);
											// $("#map2").show(500);

									}
									else if(obj.status=="Pending"){
										alert("Pending");
										// $("#send_view").show();
										// $("#pending_view").show();
										// $("#rejected_view").hide();
										// $("#approved_view").hide();
										// $("#department_view").hide();
										// $("#summary_view").hide();
										// $('#sender').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										// $('#send_date').html(splitarray[0]);
										// $('#send_time').html(splitarray[1]);
										// $('#comment').html(obj.origin.document_desc);
										// if(obj.pending!=null){
										// 	//pending
										// 	var pending_date = new Array();
										// 	pending_date= obj.pending.date_responded.split(" ");
										// 	// $('#pending').html(obj.rejected.lname+', '+obj.rejected.fname+' '+obj.rejected.mname);
										// 	$('#pending').html('The file: '+obj.origin.tracking_no+'<br/>Is still in: '+ obj.pending.department_desc);
										// 	$('#pending_date').html(pending_date[0]);
										// 	$('#pending_time').html(pending_date[1]);
										// 	$("#map").show(500);
										// }
										// else{
										// 	var pending_date = new Array();
										// 	pending_date= obj.origin.date_of_action.split(" ");
										// 	// $('#pending').html(obj.rejected.lname+', '+obj.rejected.fname+' '+obj.rejected.mname);
										// 	$('#pending').html('The file: '+obj.origin.tracking_no+'<br/>No response yet');
										// 	$('#pending_date').html(pending_date[0]);
										// 	$('#pending_time').html(pending_date[1]);
										// 	$("#map").show(500);
										// 	// $("#map").show(500);
										// }

									}
									else{
										// $("#invalid_view").show(500);
									}
								}
						});
		}
		else {
			// $("#sender_view").hide(500);
			// $("#pending_view").hide(500);
			// $("#rejected_view").hide(500);
			// $("#approved_view").hide(500);
			// $("#department_view").hide(500);
			// $("#summary_view").hide(500);
			// $("#invalid_view").show(500);
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















<!-- modi -->









<!-- main -->



<!-- script for show/hide -->
<script>
$(document).ready(function() {
	$('#show').on('click', function(e) {  //nawala yung sa error message niya pag walang input di pwede sa functin(e)
			// 	$("#show").click(function(){

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
									// alert(data);
									// var obj = JSON.stringify(data)
									var obj = JSON.parse(data)
									//	alert(obj.count);
									var max = parseInt(obj.count);

									// var con = parseInt(obj.count);
									// console.log(data);
									// alert("total count of signatories: "+max);
									// alert(obj.status);
									// alert(obj.date[1].date_responded)
									for (a=0; a<max; a++){
										// alert(obj.date_sorted[a].date + obj.date[a].date_responded)
										// alert(obj.approved[a].lname)
										// alert(obj.rejected[a].lname);
									}
									// var a = obj.date_sorted[0].date
									// alert(obj.date_sorted[0].date);
									if((obj.date_sorted[0].date) == (obj.date[1].date_responded)){ //check if date is the same
										// alert("true");
									}
									// alert(obj.approved[0].lname);
									// alert(obj[4]);

									// alert(obj.approved);
									// var obj = JSON.parse(data);
									// alert(obj.document_id);
									// alert("parsed");
									// alert(obj.approved);
									var splitarray = new Array();
									splitarray= obj.origin.date_created.split(" ");
									if(obj.status=="Rejected"){
										alert("Rejected");
										//initial
										$('#sender2').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										$('#send_date2').html(splitarray[0]);
										$('#comment2').html(obj.origin.document_desc);
										var s="";
										// var con = parseInt(max);
										alert(data);
										for(var i=0; i<parseInt(obj.approved.length); i++){
											s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_responded
											// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
											+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-ok"></span>&nbsp;Approved</h2><p id="comment2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname+'</p></h2></div>';
											// con=con+1;
											$("#approved").html(s);
											var a=i+1;
												if(a==i<parseInt(obj.approved.length)){
														alert(obj.approved[i].lname);
														var v="";
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_of_action
														// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-import"></span>&nbsp;Delivered</h2><p id="comment2">'+obj.approved[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var d="";
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_responded
														// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-export"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>To Employee :'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'<br/>Department :'+obj.approved[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}
											}
											$("#map2").show(500);
											// $("#map2").show(500);


									}
									else if(obj.status=="Approved"){
										// alert("Approved");
										//initial
										$('#sender2').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										$('#send_date2').html(splitarray[0]);
										$('#comment2').html(obj.origin.document_desc);
										var s="";
										// var con = parseInt(max);
										// alert(data);
										for(var i=0; i<parseInt(obj.approved.length); i++){
											s += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_responded
											+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-ok"></span>&nbsp;Approved</h2><p id="comment2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname+'</p></h2></div>';
											$("#approved").html(s);
											var a=i+1;
												if(a==i<parseInt(obj.approved.length)){
														// alert(obj.approved[i].lname);
														var v="";
														v += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_of_action
														// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-import"></span>&nbsp;Delivered</h2><p id="comment2">'+obj.approved[i].department_desc+'</p></h2></div>';
														$("#department").html(v);

														var d="";
														d += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:20px;">'+obj.approved[i].date_responded
														// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2">'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-export"></span>&nbsp;Summary</h2><p id="comment2">The file: '+obj.origin.tracking_no
														+'<br/>From Employee: '+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
														+'<br/>To Employee :'+obj.approved[i].lname+', '+obj.approved[i].fname+' '+obj.approved[i].lname
														+'<br/>Department :'+obj.approved[i].department_desc
														+'</p></h2></div>';
														$("#summary").html(d);
													}
											}
											$("#map2").show(500);
											// $("#map2").show(500);

									}
									else if(obj.status=="Pending"){
										alert("Pending");
										// $("#send_view").show();
										// $("#pending_view").show();
										// $("#rejected_view").hide();
										// $("#approved_view").hide();
										// $("#department_view").hide();
										// $("#summary_view").hide();
										// $('#sender').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										// $('#send_date').html(splitarray[0]);
										// $('#send_time').html(splitarray[1]);
										// $('#comment').html(obj.origin.document_desc);
										// if(obj.pending!=null){
										// 	//pending
										// 	var pending_date = new Array();
										// 	pending_date= obj.pending.date_responded.split(" ");
										// 	// $('#pending').html(obj.rejected.lname+', '+obj.rejected.fname+' '+obj.rejected.mname);
										// 	$('#pending').html('The file: '+obj.origin.tracking_no+'<br/>Is still in: '+ obj.pending.department_desc);
										// 	$('#pending_date').html(pending_date[0]);
										// 	$('#pending_time').html(pending_date[1]);
										// 	$("#map").show(500);
										// }
										// else{
										// 	var pending_date = new Array();
										// 	pending_date= obj.origin.date_of_action.split(" ");
										// 	// $('#pending').html(obj.rejected.lname+', '+obj.rejected.fname+' '+obj.rejected.mname);
										// 	$('#pending').html('The file: '+obj.origin.tracking_no+'<br/>No response yet');
										// 	$('#pending_date').html(pending_date[0]);
										// 	$('#pending_time').html(pending_date[1]);
										// 	$("#map").show(500);
										// 	// $("#map").show(500);
										// }

									}
									else{
										// $("#invalid_view").show(500);
									}
								}
						});
		}
		else {
			// $("#sender_view").hide(500);
			// $("#pending_view").hide(500);
			// $("#rejected_view").hide(500);
			// $("#approved_view").hide(500);
			// $("#department_view").hide(500);
			// $("#summary_view").hide(500);
			// $("#invalid_view").show(500);
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

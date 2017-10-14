<body>
<div class="tab-menu">
    <ul class="list-group text-center">
        <a href="<?php echo site_url('Home/home'); ?>" class="list-group-item">
         <h3 class="glyphicon glyphicon-home"></h3><br/>Home
        </a>
        <a href="<?php echo site_url('Home/profile'); ?>" class="list-group-item">
         <h3 class="glyphicon glyphicon-user"></h3><br/>Profile
        </a>
        <a href="<?php echo site_url('Home/docu'); ?>" class="list-group-item text-center">
         <h3 class="glyphicon glyphicon-dashboard"></h3><br/>Dashboard
        </a>
        <a href="<?php echo site_url('Home/offices'); ?>" class="list-group-item">
         <h3 class="glyphicon glyphicon-briefcase"></h3><br/>Offices
        </a>
        <a href="<?php echo site_url('Home/edit'); ?>" class="list-group-item">
         <h3 class="glyphicon glyphicon-cog"></h3><br/>Settings
        </a>
		<a href="<?php echo site_url('Home/contacts'); ?>" class="list-group-item">
         <h3 class="glyphicon glyphicon-phone"></h3><br/>Contacts
        </a>
		<a href="<?php echo site_url('Home'); ?>" class="list-group-item">
         <h3 class="glyphicon glyphicon-log-out"></h3><br/>Logout
        </a>
    </ul>
</div>

	<!--
	<nav class="navbar navbar-inverse navbar-fixed">
		<div id="navigation">
			<ul class="nav navbar-nav">
				<li><a href="<?php // echo site_url('Home/home'); ?>"  style="color:white;" >Home</a></li>
				<li><a href="<?php // echo site_url('Home/profile'); ?>" style="color:white;">Profile</a></li>
				<li><a href="<?php // echo site_url('Home/docu'); ?>" style="color:white;"> All Documents </a></li>
				<li><a href="<?php // echo site_url('Home/add'); ?>" style="color:white;">Send a Document</a></li>
				<li><a href="<?php // echo site_url('Home/offices'); ?>" style="color:white;">Offices & Employees</a></li>
			</ul>
    
			<ul class="nav navbar-nav">
				<li><a href="<?php // echo site_url('Home/contacts'); ?>" style="color:white;"><span class="glyphicon glyphicon-phone"></span> Contacts</a></li>
				<li><a href="<?php // echo site_url('Home'); ?>" style="color:white;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	-->
	
<div class="container">
	<div class="title-banner">
	<img src="<?php echo base_url('assets/images/colored.png'); ?>" alt="logo" id="logo" class="img-reponsive" />
	<banner id="bannertitle">DOCUMENT TRACKING SYSTEM</banner>
	</div>
	<div class="col-md-6">
		<?php date_default_timezone_set('Asia/Manila');
			$date=date('y-m-d'); ?>
		<h3 class="roundbox"style="color:#555555;float:right;margin-top:-85px;margin-right:-600px;">
		  <?php echo $date; ?> | <span id='time'></span>
		</h3>
	</div>
</div>


<!-- script for show/hide -->
<script>
	$(document).ready(function(){
		$("#show").click(function(){
			$("#map").show(500);
		});
	});


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
var ctx = canvas.getContext("2");
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
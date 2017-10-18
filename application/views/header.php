<body>
<nav class="navbar navbar-inverse navbar-fixed">
<div class="container-fluid">
	<div class="navbar-header">
		<img src="<?php echo base_url('assets/images/logo2.png');?>" class="img-responsive logo2" alt="logo" />
		<a class="navbar-brand"> Document Tracking System </a>
    </div>
	
	<ul class="nav navbar-nav navbar-right" id="nav">
        <li><a href="<?php echo site_url('Home/home'); ?>" class="text-center">
         <span class="glyphicon glyphicon-home"></span><br/>Home
        </a></li>
        
		<li><a href="<?php echo site_url('Home/profile'); ?>" class="text-center">
         <span class="glyphicon glyphicon-user"></span><br/>Profile
        </a></li>
        
		<li><a href="<?php echo site_url('Home/docu'); ?>" class="text-center">
         <span class="glyphicon glyphicon-dashboard"></span><br/>Dashboard
        </a></li>
        
		<li><a href="<?php echo site_url('Home/offices'); ?>" class="text-center">
         <span class="glyphicon glyphicon-briefcase"></span><br/>Offices
        </a></li>
		
		<li><a href="<?php echo site_url('Home/contacts'); ?>" class="text-center">
         <span class="glyphicon glyphicon-phone"></span><br/>Contacts
        </a></li>
	
		<li><a href="<?php echo site_url('Home/edit'); ?>" class="text-center">
         <span class="glyphicon glyphicon-cog icon"></span><br/>Settings
        </a></li>
		
		<li><a href="<?php echo site_url('Home'); ?>" class="text-center">
         <span class="glyphicon glyphicon-log-out icon"></span><br/>Logout
        </a></li>
	</ul>
</div>
</nav>


<div class="col-md-6">
		<?php date_default_timezone_set('Asia/Manila');
			$date=date('y-m-d'); ?>
		<h3 class="roundbox"style="color:white;float:right;margin-top:-5px;margin-right:-615px;">
		  <?php echo $date; ?> | <span id='time'></span>
		</h3>
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

			<a href="<?php echo site_url('Home/edit'); ?>" class="text-center">
         <span class="glyphicon glyphicon-cog icon"></span><br/>Settings
        </a>
				<li><a href="<?php // echo site_url('Home/contacts'); ?>" style="color:white;"><span class="glyphicon glyphicon-phone"></span> Contacts</a></li>
				<li><a href="<?php // echo site_url('Home'); ?>" style="color:white;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>

<div class="container">
	<div class="title-banner">
		<img src="<?php echo base_url('assets/images/colored.png'); ?>" alt="logo" id="logo" class="img-reponsive" />
		<banner id="bannertitle">DOCUMENT TRACKING SYSTEM</banner>
	</div>
	
</div> -->


<!-- script for show/hide -->
<script>

	// $(document).ready(function(){
	// 	$("#show").click(function(){
	// 		$("#map").show(500);
	// 	});
	// });
	$(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
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
</script>

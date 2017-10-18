<div class="container-fluid">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
		<div class="item active">
			<img src="<?php echo base_url('assets/images/1.jpg'); ?>" alt="one">
		</div>

		<div class="item">
			<img src="<?php echo base_url('assets/images/2.jpg'); ?>" alt="two">
		</div>
    
		<div class="item">
			<img src="<?php echo base_url('assets/images/3.jpg'); ?>" alt="three">
		</div>
		
		<div class="item">
			<img src="<?php echo base_url('assets/images/4.jpg'); ?>" alt="four">
		</div>
    </div>
	</div>
	
		<canvas id="canvas" width="130" height="130"
		style="background-color:66,66,66,0.9; float: left; margin-top:24px; margin-left:76px; color:#ffffff; ">
		</canvas>
	<div  class="box">

		<?php echo form_open('home/login_validation');?>
		<p  style="color: #ffffff; font-size: 36px;"> Login </p> <br /><br /><br />


			<!--
			<?php // if(isset($account_created)) {?>
		    	<h3 align="center" style="color:white;"><b><?php // echo $account_created; ?></b><br />You may now log in!<br /></h3>
		    <?php // } else { ?>
		    	<h1 align="center" style="color:white;"><b> LOG IN </b> <br /><br /></h1>
		    <?php // } ?>
			-->
		<?php
			echo '<label style="color: White; "><strong>'.$this->session->flashdata("error").'</strong></label>'
		?>
		<div class="form-group">
			<?php echo form_input(['type'=>'text','align'=>'center','name'=>'uname','id'=>'uname','class'=>'form-control input-underline','placeholder'=>'User name', 'value'=>set_value('uname')]); ?>
			<!-- <input align="center" id="uname" type="text" class="form-control input-underline" name="uname" placeholder="User Name" value='uname'> -->
			<span style="color: White; "><strong><?php echo form_error('uname'); ?></strong></span>
		</div> <br />

		<div class="form-group">
			<?php echo form_input(['type'=>'password','align'=>'center','name'=>'password','id'=>'password','class'=>'form-control input-underline','placeholder'=>'Password', 'value'=>set_value('password')]); ?>
			<!-- <input align="center" id="password" type="password" class="form-control input-underline" name="password" placeholder="Password" value='password'> -->
			<span style="color: White; "><strong><?php echo form_error('password'); ?></strong></span>
		</div> <br /><br />

		<div class="form-group">
			<button align="center" type="submit" class="btn btn-md lgbtn"> LOG IN </button> <br /><br /><br /><br >
		</div>

		<div class="form-group" align="right" style="color: white;">
			Not yet a member? &nbsp; <a href="<?php echo site_url('Home/signup'); ?>" align="right" type="submit" class="btn btn-md subtn"> Sign Up </a>
		</div>
	</div>

	<?php echo form_close(); ?>
	<div id="title">
		<img src="<?php echo base_url('assets/images/logo2.png'); ?>" alt="logo" class="img-reponsive logo1" />
		<p> Document Tracking System </p>
	</div>

	<div id="tbar">

		<?php echo form_open('home/track_docu');?>
				<?php echo '<h4 class="pulse animated" style="color: red; "><strong>'.$this->session->flashdata("error1").'</strong></h4>'?>
			<form>
				<div class="form-group input-group">

					<?php echo form_input(['type'=>'text','style'=>'color: black;','name'=>'track_num','align'=>'center','id'=>'track_num','class'=>'form-control bar','placeholder'=>'Track a Document', 'value'=>set_value('track_num')]); ?>
					<span class="input-group-btn">
					<button type="submit" class="btn btn-default tbtn">
						<span class="glyphicon glyphicon-search"></span> Track
					</button>
				</span>
				</div>
			</form>

		<?php if($this->session->flashdata("track")){?>
		<?php
		echo '<div class="col-md-8 col-sm-12 col-xs-12 roundbox flipInX animated" style="margin-left:0px;"><h4 style="color: white; "><strong>'.$this->session->flashdata("track").'</strong></h4></div>'
		?>
		<?php }?>
		<?php echo form_close(); ?>

	</div> <br />

	

</div>


<script type="text/javascript">
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
  ctx.fillStyle = 'rgba(66,66,66,0.9)';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, 'white');
  grad.addColorStop(0.5, '#333');
  grad.addColorStop(1, 'white');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
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
</script>
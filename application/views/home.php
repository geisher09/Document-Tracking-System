<div class="container">
	<div class="container red" >
	<div class="row">
	   <div class="col-md-6">
		<h1> Welcome <?php echo $username; ?>!</h1>
	   </div>
	   <div class="col-md-6">
		
		<h3 style="color:#48C9B0;float:right;margin-top:20px;">
		  <?php echo $date; ?> | <span id='time'></span>
		</h3>
	   </div>

	   
	</div>
				<!--
				<p id="intro">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Many years ago before the advent of modern technology, people were just scribbling					on dried leaves using coals
					from burned wood as pens. Soon, mankind discovered how to make paper out of trees, while quills and ink came
					immediately thereafter. Many brilliant minds convened and soon, the concept of technology became the talk of the town.
					Technology improved over the course of time, witnessing the greatest wars in the world, surpassing the most dreadful
					diseases that humankind has ever faced. And here it is now, continues to be modernized by many of the world's cleverest
					people with knowledge about computers. We do still write on beautifully made parchments, but none would be easier than
					creating our letters using many different softwares nowadays such as Microsoft Word. Now, we can create documents using
					these complex machines, save it or share it by any means of "techy" transfer tools. <br /><br />

					Very nice isn't it? How about we realize that in a folder full of documents, each one could just be a speck of dust?
					How about they each become a butterfly fluttering from one place to another, lost in track? Okay, that was metaphorical
					but here's the catch: in most companies, transfering documents from one place to another is an essential process. Think
					about it, what if they get lost? Now imagine departments pointing at each other, each claiming that the other one has
					the document, and each arguing that they don't have it. Very confusing. My deepest pity to the secretaries. <br /><br />

					That is why after centuries, we have come up with the Document Tracking System-a system that will watch over the
					documents like an invisible chapperone as they are being passed on to different departments. Now there's no need
					to worry because the Document Tracking System is here to help you manage and keep track of your documents. From the
					developers of this Document Tracking System, "HOORAY!"


					The current time is: <?php echo $time; ?>
					Today is: <?php echo $date; ?>
					<?php echo $username; ?> Cute <3
				</p>
				-->
		
			<form>
				<div class="form-group input-group home-searchbar">
					<input type="text" class="form-control" id="system-search" name="q" placeholder="Document to track..." required/>
					<span class="input-group-btn">
						<button type="submit" class="btn btn-success" id="show" >
							<span class="glyphicon glyphicon-search"></span> Track
						</button>
					</span>
				</div>
			</form>
		<!-- bale nakatago pa ung details about sa tracking ng document [na may id na "map"] tapos lalabas na lang pag pinindot na ung button [na may id na [show] -->
			<div id="map" class="collapse" style="margin-left:100px;">
			<h2><i>Detail Map Of your Document...</i></h2>
				<div class="main">
					<ul class="cbp_tmtimeline">
						<li>
							<time class="cbp_tmtime" datetime="2017-01-10 18:30"><span>1/1/17</span> <span>18:30</span></time>
							<div class="cbp_tmicon cbp_tmicon-phone"></div>
							<div class="cbp_tmlabel">
								<h2><span class="glyphicon glyphicon-export"></span>&nbsp;Sent</h2>
								<p>Sent by [sender] of [sender's dept.] to [receiver] of [receiver's dept.]</p>
							</div>
						</li>
						<li>
							<time class="cbp_tmtime" datetime="2017-01-11T12:01"><span>1/1/17</span> <span>12:01</span></time>
							<div class="cbp_tmicon cbp_tmicon-screen"></div>
							<div class="cbp_tmlabel">
								<h2><span class="glyphicon glyphicon-import"></span>&nbsp;Delivered</h2>
								<p>Delivered to [receiver] of [department]</p>
							</div>
						</li>
						<li>
							<time class="cbp_tmtime" datetime="2017-01-17 05:36"><span>1/1/17</span> <span>05:36</span></time>
							<div class="cbp_tmicon cbp_tmicon-mail"></div>
							<div class="cbp_tmlabel">
								<h2><span class="glyphicon glyphicon-ok"></span>&nbsp;Approved</h2>
								<p>Approved by [nag-approve]</p>
							</div>
						</li>
						<li>
							<time class="cbp_tmtime" datetime="2017-01-15 17:15"><span>1/1/17</span> <span>17:15</span></time>
							<div class="cbp_tmicon cbp_tmicon-phone"></div>
							<div class="cbp_tmlabel">
								<h2><span class="glyphicon glyphicon-remove"></span>&nbsp;Rejected</h2>
								<p>Rejected by [nag-reject]</p>
							</div>
						</li>
						<li>
							<time class="cbp_tmtime" datetime="2017-01-16 21:30"><span>1/1/17</span> <span>21:30</span></time>
							<div class="cbp_tmicon cbp_tmicon-earth"></div>
							<div class="cbp_tmlabel">
								<h2>Carlo Abendanio</h2>
								<p>Oh to my water jug... it's been years...</p>
							</div>
						</li>
					</ul>
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

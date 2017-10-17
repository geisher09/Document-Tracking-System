<div class="container">
	<div class="container red" >
	<div class="row">
	   <div class="col-md-6">
		<h1> Welcome <?php echo $username; ?>!</h1>
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

			<!-- <div id="invalid_view" class="collapse" style="margin-left:100px;">
				<div class="main">
							<div class="alert alert-danger" >
								<h2><span class="glyphicon glyphicon-ban-circle"></span>&nbsp;Invalid File!</h2>
								<p id="invalid"></p>
							</div>
				</div>
		</div> -->

		<!-- bale nakatago pa ung details about sa tracking ng document [na may id na "map"] tapos lalabas na lang pag pinindot na ung button [na may id na [show] -->
			<div id="map" class="collapse" style="margin-left:100px;">
			<h2><i>Tracking Details Of your Document...</i></h2>
				<div class="main">
					<ul class="cbp_tmtimeline">
						<li>
							<div id="pending_view" >
							<!-- <time class="cbp_tmtime" datetime="2017-01-10 18:30"><span>1/1/17</span> <span>18:30</span></time> -->
							<time class="cbp_tmtime"><span id="pending_date"></span><span id="pending_time"></span></time>
							<div class="cbp_tmicon cbp_tmicon-phone"></div>
							<div class="cbp_tmlabel">
								<h2><span class="glyphicon glyphicon-export"></span>&nbsp;Pending</h2>
								<p id="pending"></p>
							</div>
						</div>
						</li>
						<li>
							<div id="summary_view" >
							<!-- <time class="cbp_tmtime" datetime="2017-01-10 18:30"><span>1/1/17</span> <span>18:30</span></time> -->
							<time class="cbp_tmtime"><span id="summary_date"></span><span id="summary_time"></span></time>
							<div class="cbp_tmicon cbp_tmicon-phone"></div>
							<div class="cbp_tmlabel">
								<h2><span class="glyphicon glyphicon-export"></span>&nbsp;Sent</h2>
								<p id="summary"></p>
							</div>
						</div>
						</li>
						<li>
							<div id="department_view">
							<time class="cbp_tmtime"><span id="department_date"></span><span id="department_time"></span></time>
							<div class="cbp_tmicon cbp_tmicon-screen"></div>
							<div class="cbp_tmlabel">
								<h2><span class="glyphicon glyphicon-import"></span>&nbsp;Delivered</h2>
								<p id="department"></p>
							</div>
						</div>
						</li>
						<li>
							<div id="approved_view">
							<!-- <time class="cbp_tmtime" datetime="2017-01-17 05:36"><span>1/1/17</span> <span>05:36</span></time> -->
							<time class="cbp_tmtime"><span id="approve_date"></span> <span id="approve_time"></span></time>
							<div class="cbp_tmicon cbp_tmicon-mail"></div>
							<div class="cbp_tmlabel">
								<h2><span class="glyphicon glyphicon-ok"></span>&nbsp;Approved</h2>
								<p id="approved"></p>
							</div>
						</div>
						</li>
						<li>
							<div id="rejected_view">
							<!-- <time class="cbp_tmtime" datetime="2017-01-15 17:15"><span>1/1/17</span> <span>17:15</span></time> -->
							<time class="cbp_tmtime"><span id="reject_date"></span> <span id="reject_time"></span></time>
							<div class="cbp_tmicon cbp_tmicon-phone"></div>
							<div class="cbp_tmlabel">
								<h2><span class="glyphicon glyphicon-remove"></span>&nbsp;Rejected</h2>
								<p id="rejected"></p>
							</div>
						</div>
						</li>
						<li>
							<div id="sender_view">
							<!-- <time class="cbp_tmtime" datetime="2017-01-16 21:30"><span>1/1/17</span> <span>21:30</span></time> -->
							<time class="cbp_tmtime"><span id="send_date"></span> <span id="send_time"></span></time>
							<div class="cbp_tmicon cbp_tmicon-earth"></div>
							<div class="cbp_tmlabel">
								<h2 id="sender"></h2>
								<p id="comment"></p>
							</div>
						</div>
						</li>
					</ul>
				</div>
			</div>

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
									// alert("pasok");
									var obj = JSON.parse(data);
									var splitarray = new Array();
									splitarray= obj.origin.date_of_action.split(" ");

									if(obj.status=="Rejected"){
										// alert("Rejected");
										//initial
										$("#send_view").show();
										$("#rejected_view").show();
										$("#pending_view").show();
										$('#sender').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										$('#send_date').html(splitarray[0]);
										$('#send_time').html(splitarray[1]);
										$('#comment').html(obj.origin.document_desc);

										//rejected
										var reject_date = new Array();
										reject_date= obj.rejected.date_responded.split(" ");
										$('#rejected').html(obj.rejected.lname+', '+obj.rejected.fname+' '+obj.rejected.mname);
										$('#reject_date').html(reject_date[0]);
										$('#reject_time').html(reject_date[1]);

										//pending/hold
										// var pending_date = new Array();
										// pending_date= obj.rejected.date_responded.split(" ");
										// $('#pending').html(obj.rejected.lname+', '+obj.rejected.fname+' '+obj.rejected.mname);
										// $('#pending').html('The file: '+obj.origin.document_id+'<br/>Is still in: '+ obj.rejected.department_desc);
										// $('#pending_date').html(pending_date[0]);
										// $('#pending_time').html(pending_date[1]);
										$('#approved_view').hide();
										$('#department_view').hide();
										$('#summary_view').hide();
										$('#pending_view').hide();
										$("#map").show(500);

									}
									else if(obj.status=="Approved"){
										// alert("Approved");

										//initial
										$("#send_view").show();
										$("#rejected_view").hide();
										$("#approved_view").show();
										$("#department_view").show();
										$("#summary_view").show();
										$('#sender').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										$('#send_date').html(splitarray[0]);
										$('#send_time').html(splitarray[1]);
										$('#comment').html(obj.origin.document_desc);

										//rejected
										// $('#rejected_view').hide();

										//approved
										var approve_date = new Array();
										approve_date= obj.approved.date_responded.split(" ");
										$('#approved').html(obj.approved.lname+', '+obj.approved.fname+' '+obj.approved.mname);
										$('#approve_date').html(approve_date[0]);
										$('#approve_time').html(approve_date[1]);

										//rejected
										// var reject_date = new Array();
										// reject_date= obj.rejected.date_responded.split(" ");
										// $('#rejected').html(obj.rejected.lname+', '+obj.rejected.fname+' '+obj.rejected.mname);
										// $('#reject_date').html(reject_date[0]);
										// $('#reject_time').html(reject_date[1]);

										//department
										var department_date = new Array();
										department_date= obj.approved.date_responded.split(" ");
										$('#department').html(obj.approved.department_desc);
										$('#department_date').html(department_date[0]);
										$('#department_time').html(department_date[1]);

										//summary
										var summary_date = new Array();
										summary_date= obj.origin.date_of_action.split(" ");
										$('#summary').html("From Employee: "+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname
										+'<br/>Department: '+obj.origin.department_desc
										+'<br/>To Employee: '+obj.approved.lname+', '+obj.approved.fname+' '+obj.approved.mname
										+'<br/>Department: '+obj.approved.department_desc);
										$('#summary_date').html(summary_date[0]);
										$('#summary_time').html(summary_date[1]);

										$('#pending_view').hide();

										$("#map").show(500);

									}
									else if(obj.status=="Pending"){
										// alert("Pending");
										$("#send_view").show();
										$("#pending_view").show();
										$("#rejected_view").hide();
										$("#approved_view").hide();
										$("#department_view").hide();
										$("#summary_view").hide();
										$('#sender').html(obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname);
										$('#send_date').html(splitarray[0]);
										$('#send_time').html(splitarray[1]);
										$('#comment').html(obj.origin.document_desc);
										if(obj.pending!=null){
											//pending
											var pending_date = new Array();
											pending_date= obj.pending.date_responded.split(" ");
											// $('#pending').html(obj.rejected.lname+', '+obj.rejected.fname+' '+obj.rejected.mname);
											$('#pending').html('The file: '+obj.origin.tracking_no+'<br/>Is still in: '+ obj.pending.department_desc);
											$('#pending_date').html(pending_date[0]);
											$('#pending_time').html(pending_date[1]);
											$("#map").show(500);
										}
										else{
											var pending_date = new Array();
											pending_date= obj.origin.date_of_action.split(" ");
											// $('#pending').html(obj.rejected.lname+', '+obj.rejected.fname+' '+obj.rejected.mname);
											$('#pending').html('The file: '+obj.origin.tracking_no+'<br/>No response yet');
											$('#pending_date').html(pending_date[0]);
											$('#pending_time').html(pending_date[1]);
											$("#map").show(500);
											// $("#map").show(500);
										}

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

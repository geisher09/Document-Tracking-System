<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
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
				<img src="<?php echo base_url('assets/images/logo2.png');?>" alt="DTS Logo" class="img-responsive logo2">
				<a href="<?php echo site_url('Home/home'); ?>" style="font-family: 'Josefin Slab'; font-size: 27px; color: #34495E;">
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
								<span class="badge bg-danger"><?php echo count($inb);?></span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="<?php echo site_url('Home/docu'); ?>" class="notification-item"><span class="dot bg-danger"></span>You have <?php echo count($inb);?> file(s) on hold in your inbox!</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-link"></i> <span>Quicklinks</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<?php foreach ($pro as $prof){ ?>
								<li><a data-toggle="modal" id="<?php echo $prof['employee_id']; ?>" onclick="send(this.id)"><i class="glyphicon glyphicon-share"></i> Compose</a></li>
								<?php } ?>
								<li><a href="<?php echo site_url('Home/docu'); ?>"><i class="glyphicon glyphicon-inbox"></i> Inbox</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<?php foreach ($pro as $prof){ ?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url($prof['image']); ?>" class="img-circle" alt="Avatar"> <span><?php echo $prof['username'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<?php } ?>
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
						<li><a href="<?php echo site_url('Home/docu'); ?>" class=""><i class="lnr lnr-envelope"></i><span>My Documents<span class="badge bg-danger"><?php echo count($inb);?></span></span></a></li>
						<li><a href="<?php echo site_url('Home/offices'); ?>" class=""><i class="lnr lnr-apartment"></i><span>Offices and </span><i class="lnr lnr-users"></i><span>Employees</span></a></li>
						<li><a href="<?php echo site_url('Home/contacts'); ?>" class=""><i class="lnr lnr-phone"></i> <span>Contacts</span></a></li>
						<li><a href="<?php echo site_url('Home/profile'); ?>" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
						<li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
<div class="main">
			<!-- MAIN CONTENT -->
	<p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;">Home</p>
<div class="container-fluid col-md-8">
	<div class="container-fluid red" >
	<div class="row">
	   <div class="col-md-6">
	   	<?php foreach ($pro as $prof){ ?>
	   	<h1 style="color: #7FB3D5;"><strong>Welcome <?php echo $prof['username'];?>!</strong></h1>
		<?php } ?>

	   </div>
	</div>
			<form>
				<div class="form-group input-group home-searchbar">
					<!-- <input type="text" class="form-control" id="system-search" name="q" placeholder="Document to track..." required/> -->
					<input type="text" class="form-control" id="system-search" name="q" placeholder="Document to track..." required/>
					<!-- <input type="text" class="form-control" id="search" onkeyup="search()" name="q" placeholder="Search for" required/> -->
					<span class="input-group-btn">
						<button type="submit" class="btn btn-info" id="show" >
							<span class="glyphicon glyphicon-search"></span> Track
						</button>
					</span>
				</div>
			</form>

			<div id="flow" class="collapse">
								<h2><i>Tracking Details Of your Document...</i></h2>
									<div class="">
										<ul class="cbp_tmtimeline">
											<li>
												<div id="sender_view2">
													<!-- <time class="cbp_tmtime" datetime="2017-01-16 21:30"><span>1/1/17</span> <span>21:30</span></time> -->
													<time class="cbp_tmtime"><span id="send_date" style="font-size:15px;"></span></time>
													<div class="cbp_tmicon cbp_tmicon-earth"></div>
													<div class="cbp_tmlabel">
														<h2 id="sender"></h2>
														<p id="comment"></p>
													</div>
												</div>
											</li>
											<li id="signatories"></li>
											<li id="summary"></li>
										</ul>
									</div>
								</div>


								<div id="error" class="collapse" style="margin-left:100px;">
								<!-- <div class="col-md-10 col-sm-10 col-xs-10 roundbox flipInX animated"<class="pulse animated" style="color: red; "> style="margin-center:0px;"><h4 style="color: white; "><span class="glyphicon glyphicon-search"></span>&nbsp;Please search a valid document!</h4></div> -->
								<div class="pulse animated" style="color: red; margin-center:0px;"><h4 style="color: Red; "><span class="glyphicon glyphicon-search"></span>&nbsp;Please search a valid document!</h4></div>
								</div>
								<div id="error2" class="collapse" style="margin-left:100px;">
								<!-- <div class="col-md-10 col-sm-10 col-xs-10 roundbox flipInX animated"<class="pulse animated" style="color: red; "> style="margin-center:0px;"><h4 style="color: white; "><span class="glyphicon glyphicon-search"></span>&nbsp;Please search a valid document!</h4></div> -->
								<div class="pulse animated" style="color: red; margin-center:0px;"><h4 style="color: Red; "><span class="glyphicon glyphicon-remove"></span>&nbsp;Not your document!</h4></div>
								</div>




						<div class="clearfix"></div>



					<!-- script for show/hide -->

					<script>
					$(document).ready(function() {
						$('.dropdown-toggle').dropdown();
						//
						$('#show').on('click', function(e) {
							e.preventDefault();
							var id = $("#system-search").val();
							if(id != ''){
								// alert(id);
								$('#error').hide(500);
								$('#error2').hide();
								$.ajax({
									type: "post",
									url: "history",
									data:{id:id},
									success: function(data){
										var obj = JSON.parse(data)
										if(obj.con=="false"){
											// alert("gbfgbgn");
											$('#flow').hide(300);
											$('#error2').show(300);
										}
										$('#flow').hide(300);
										// alert(data);
										// alert(s);
										var init ="";
										var recip ="";
										var summ ="";
										var dateTime = moment( obj.origin.date_created).format('MM-DD-YYYY HH:mm:ss');
										var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
										// alert(date);
										// var dd = parseInt(obj.origin.length);
										// alert(dd);
										// alert(obj.origin);
										//initial
										$('#sender').html("Start of document flow");
										$('#send_date').html(date);
										$('#comment').html("Employee:&nbsp;"+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.mname
																				+"<br/>Tracking no.&nbsp;"+obj.origin.tracking_no
																				+"<br/>Title:&nbsp;"+obj.origin.document_title
																				+"<br/>Department:&nbsp;"+obj.origin.department_desc);
										//flow
										var s = parseInt(obj.recipient.length)-1;
										// var rr = s.val();
										// alert(s);
										for(var i=0; i<parseInt(obj.recipient.length); i++){
										// for(var i=s; i>=0; i--){
												var dateTime = moment( obj.recipient[i].date_responded).format('MM-DD-YYYY HH:mm:ss');
												var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
												if(i==0){
													recip += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
													+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;'+obj.recipient[i].response
													+'</h2><p id="comment2">Receiver:&nbsp;&nbsp;'+obj.recipient[i].lname+', '+obj.recipient[i].fname+' '+obj.recipient[i].lname
													+'<br/>Department:&nbsp;&nbsp;'+obj.recipient[i].department_desc
													+'<br/>Comment:&nbsp;&nbsp;'+obj.recipient[i].comment
													+'<br/>Sender:&nbsp;&nbsp;'+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname+'</p></h2></div>';
												}
												if(i!=0){
													recip += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
													+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-road"></span>&nbsp;'+obj.recipient[i].response
													+'</h2><p id="comment2">Receiver:&nbsp;&nbsp;'+obj.recipient[i].lname+', '+obj.recipient[i].fname+' '+obj.recipient[i].lname
													+'<br/>Department:&nbsp;&nbsp;'+obj.recipient[i].department_desc
													+'<br/>Comment:&nbsp;&nbsp;'+obj.recipient[i].comment
													+'<br/>Sender:&nbsp;&nbsp;'+obj.recipient[i-1].lname+', '+obj.recipient[i-1].fname+' '+obj.recipient[i-1].lname+'</p></h2></div>';
												}
												$("#signatories").html(recip);
												// var a=i+1;
											}
											//current status
											var dateTime = moment( obj.end.date_of_action).format('MM-DD-YYYY HH:mm:ss');
											var date = moment(dateTime).format('MMMM Do YYYY, h:mm:ss a');  ///okay na!
											summ += '<div><time class="cbp_tmtime"><span id="send_date2" style="font-size:15px;">'+date
											// +'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary'+obj.recipient[i].status+'</h2><p id="comment2">Employee:&nbsp;&nbsp;'+obj.recipient[i].lname+', '+obj.recipient[i].fname+' '+obj.recipient[i].lname
											+'</span></time><div class="cbp_tmicon cbp_tmicon-earth"></div><div class="cbp_tmlabel"><h2 id="sender2"><span class="glyphicon glyphicon-book"></span>&nbsp;Summary</h2><p id="comment2">The file:&nbsp;'+obj.origin.tracking_no
											+'<br/>From:&nbsp;&nbsp;'+obj.origin.lname+', '+obj.origin.fname+' '+obj.origin.lname
											+'<br/>In department:&nbsp;&nbsp;'+obj.origin.department_desc
											+'<br/>Reciever:&nbsp;&nbsp;'+obj.end.lname+', '+obj.end.fname+' '+obj.end.lname
											+'<br/>In department:&nbsp;&nbsp;'+obj.end.department_desc
											+'<br/>Status:&nbsp;&nbsp;'+obj.end.status+'</p></h2></div>';
											$("#summary").html(summ);
											$('#flow').show(500);

									},
									error: function(data){
										e.preventDefault();
										// alert("asa");
										$('#error').show(300);
									}
								});

							}
							else{
								$('#error2').hide();
								$('#flow').hide(300);
								$('#error').show(300);
							}
						});
					});
			</script>


<script>
function send(id){
			$.ajax({
			        type: 'POST',
			         data:{id: id},
				        success: function(data) {
				        	var obj = JSON.stringify(data);
				        	console.log(id);

				          $('#empid').val(id);
				          $('#send_details').modal('show');

				        }
				    });
		}
</script>


	</div>
</div>

<div class="container-fluid body col-md-4">
	<!--body-->
		<div class="container-fluid red">
		  <div class="row">
		  <div class="col-md-6">
			<h1 style="color: #7FB3D5;"><strong> All Documents <strong></h1>
		  </div>
		  <div class="col-md-12">
			<!-- search bar -->
			<form>
				<div class="form-group sbar input-group">
										<!-- <input type="text" name="q" onkeyup="search()" placeholder="Search" id="search"/> -->

					<input type="text" class="form-control" id="search" onkeyup="search()" name="q" placeholder="Search for" required/>
					<span class="input-group-btn">
						<button type="submit" class="btn btn-info" >
							<span class="glyphicon glyphicon-search"></span> Search
						</button>
					</span>
				</div>
			</form>
		   </div>
		   </div>
			<br />
			<br />


			<!-- table -->
			<table class="table table-list-search table-hover table-responsive" id="mytable">
		    <!-- <table class="table table-list-search table-hover table-responsive "> -->
				<thead>
					<?php if(isset($do) && sizeof($do)>0): ?>
					<tr>
						<th>TRACKING NO. </th>
						<th>TITLE</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($do as $document){ ?>
					<tr id="<?php echo $document['tracking_no'];?>" onclick='show(this.id)'>
						<td><?php echo $document['tracking_no'];?></td>
						<td><?php echo $document['document_title']; ?></td>
					</tr>
					<?php } ?>
					<?php else: ?>
							<tr>NO RECORD FOUND!</tr>
					<?php endif; ?>
				</tbody>
			</table>

			<div class="clearfix"></div>
			<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="<?php echo site_url('Home/intro'); ?>" target="_blank">Document Tracking System</a>. All Rights Reserved.</p>
			</div>
			</footer>

		</div>

		<!-- start of send document modal -->
<!-- modal of details about the document-->
	<div id="send_details" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">
	<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #34495E; color:#ffffff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h3 class="modal-title text-center">Add Document</h3>
        </div>
        <div class="modal-body">

			<?php echo form_open_multipart('home/save',['class'=>'form-horizontal']); ?>
			<div class="row">
					<input type="hidden" id="empid" name="empid"/>
			</div>
			<div class="row">
				<div class=" col-md-10">
					<label for="">Title:</label>
					<?php echo form_input(['name'=>'document_title','class'=>'form-control','placeholder'=>'Title', 'value'=>set_value('document_title')]); ?>
				</div>

					<div class="col-lg-10">
						<?php echo form_error('document_title'); ?>
			  		</div>
			</div>
			<br/>
			<div class="row">
				<div class=" col-md-10">
					<label for="">Description:</label>
					<?php echo form_textarea(['name'=>'document_desc','rows'=>'1','class'=>'form-control','placeholder'=>'Description', 'value'=>set_value('document_desc')]); ?>
				</div>

					<div class="col-lg-10">
						<?php echo form_error('document_desc'); ?>
			  		</div>
			</div>
			<br/>

			<div class="row">
				<div class="col-sm-8">
			      	<label for="">Send to:</label>
						<select name="employee" class="form-control">
							<?php foreach ($emp as $empoy){ ?>
							    <option value="<?php echo $empoy->employee_id; ?>"><?php echo $empoy->lname.','.$empoy->fname.'  '.$empoy->mname; ?></option>
							<?php } ?>
						</select>
				</div>
			</div>

			<div class="row">
			<br/>
			<div class=" col-md-10">
					<label for="">Attach File:</label>
						<?php echo form_upload(['name'=>'file', 'accept'=>'document/*']); ?>
					</div>

					<div class="col-lg-10">
						<?php echo form_error('file'); ?>
			  		</div>
			</div><br/>
			<div>
				<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>Send</button>
				<button type="reset" class="btn btn-default"><i class="fa fa-refresh" aria-hidden="true"></i>Reset</button>
			</div>
			<?php echo form_close();?>
        </div>
      </div>

		</div>
	</div>

</div>

</div>


	<!-- start of send document modal -->
	<div id="send_details" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">
	<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #555555">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title text-center">Add Document</h3>
        </div>
        <div class="modal-body">

			<?php echo form_open_multipart('home/save',['class'=>'form-horizontal']); ?>
			<div class="row">
					<input type="hidden" id="empid" name="empid"/>
			</div>
			<div class="row">
				<div class=" col-md-10">
					<label for="">Title:</label>
					<?php echo form_input(['name'=>'document_title','class'=>'form-control','placeholder'=>'Title', 'value'=>set_value('document_title')]); ?>
				</div>

					<div class="col-lg-10">
						<?php echo form_error('document_title'); ?>
			  		</div>
			</div>
			<br/>
			<div class="row">
				<div class=" col-md-10">
					<label for="">Description:</label>
					<?php echo form_textarea(['name'=>'document_desc','rows'=>'1','class'=>'form-control','placeholder'=>'Description', 'value'=>set_value('document_desc')]); ?>
				</div>

					<div class="col-lg-10">
						<?php echo form_error('document_desc'); ?>
			  		</div>
			</div>
			<br/>
			<div class="row">
				<div class=" col-md-10">
					<label for="">Attach File:</label>
						<?php echo form_upload(['name'=>'file', 'accept'=>'document/*']); ?>
					</div>

					<div class="col-lg-10">
						<?php echo form_error('file'); ?>
			  		</div>
				</div> <br/><br/>
			<div>
				<button type="submit" class="btn btn-primary">Save</button>
				<button type="reset" class="btn btn-default">Reset</button>
			</div>
			<?php echo form_close();?>
        </div>
      </div>

		</div>
	</div><!-- end of send document -->

	<!-- END WRAPPER -->
	<!-- Javascript -->

	</div>
</div>
<script type="text/javascript">
	function show(id){
		$('#system-search').val(id);
	}
</script>
<script>
function status(id){
			$.ajax({
			        type: 'POST',
			         data:{id: id},
				        success: function(data) {
				        	var obj = JSON.stringify(data);
				        	// var obj = JSON.parse(data);
				        	console.log(id);
				          $('#status_id').val(id);
				          $('#new_status').modal('show');
				        }
				    });
		}
</script>
<!-- start of new_status document modal -->
	<div id="new_status" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">
	<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #555555">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title text-center">Add Status</h3>
        </div>
        <div class="modal-body">

			<?php echo form_open_multipart('home/new_status',['class'=>'form-horizontal']); ?>
			<div class="row">
					<input type="hidden" id="empid" name="empid"/>
			</div>
			<div class="row">
				<div class=" col-md-10">
					<label for="">Status ID:</label>
					<?php echo form_input(['name'=>'status_id','class'=>'form-control','placeholder'=>$sta, 'value'=>$sta, 'readonly'=>'true']); ?>
				</div>

					<div class="col-lg-10">
						<?php echo form_error('status_id'); ?>
			  		</div>
			</div>
			<br/>
			<div class="row">
				<div class=" col-md-10">
					<label for="">Description:</label>
					<?php echo form_textarea(['name'=>'status_desc','rows'=>'1','class'=>'form-control','placeholder'=>'Status name', 'value'=>set_value('document_desc')]); ?>
				</div>

					<div class="col-lg-10">
						<?php echo form_error('status_desc'); ?>
			  		</div>
			</div>
			<br/>
			<!-- <div class="row">
				<div class=" col-md-10">
					<label for="forward">Enable forward:</label>
					<div class="radio-inline">
						<div class="radio">
							<?php $yes=0;
							$no=1; ?>
						  <label><input type="radio" name="forward" value="<?php echo $yes;?>">yes</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="forward" value="<?php echo $no;?>">no</label>
						</div>
					</div>
				</div>
			</div> -->
			<br/><br/>
			<div>
				<button type="submit" class="btn btn-primary">Save</button>
				<button type="reset" class="btn btn-default">Reset</button>
			</div>
			<?php echo form_close();?>
        </div>
      </div>

		</div>
	</div><!-- end of new status document -->

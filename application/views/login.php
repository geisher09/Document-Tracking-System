<body>
<div class="container-fluid">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo base_url('assets/images/1.jpg') ?>" alt="one" />
			</div>

			<div class="item">
				<img src="<?php echo base_url('assets/images/2.jpg') ?>" alt="two" />
			</div>

			<div class="item">
				<img src="<?php echo base_url('assets/images/3.jpg') ?>" alt="three" />
			</div>

			<div class="item">
				<img src="<?php echo base_url('assets/images/4.jpg') ?>" alt="four" />
			</div>
		</div>
	</div>

	<div  class="box">

		<?php echo form_open('home/login_validation');?>
		<h1  style="color: White; "> Login </h1> <br /><br /><br />

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
			<span style="color: White; "><?php echo form_error('uname'); ?></span>
		</div> <br />

		<div class="form-group">
			<?php echo form_input(['type'=>'password','align'=>'center','name'=>'password','id'=>'password','class'=>'form-control input-underline','placeholder'=>'Password', 'value'=>set_value('password')]); ?>
			<!-- <input align="center" id="password" type="password" class="form-control input-underline" name="password" placeholder="Password" value='password'> -->
			<span style="color: White; "><?php echo form_error('password'); ?></span>
		</div> <br /><br />

		<div class="form-group">
			<button align="center" type="submit" class="btn btn-md lgbtn"> LOG IN </button> <br /><br /><br /><br /><br /><br /><br >
		</div>

		<div class="form-group" align="right" style="color: white;">
			Not yet a member? &nbsp; <a href="<?php echo site_url('Home/signup'); ?>" align="right" type="submit" class="btn btn-md subtn"> Sign Up </a>
		</div>
	</div>

	<?php echo form_close(); ?>
	<div id="title">
		<p> Document Tracking System </p>
	</div>

	<div id="tbar">

		<?php echo form_open('home/track_docu');?>
		<!-- <form>
			<div class="form-group">
				<input type="text" class="form-control bar" id="track" name="track" placeholder="Track a Document">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-danger tbtn">
						<span class="glyphicon glyphicon-search"></span> Track
					</button>
				</span>
			</div>
		</form> -->
		<div class="form-group">
			<form>

				<?php
				echo '<label style="color: Black; "><strong>'.$this->session->flashdata("error1").'</strong></label>'
				?>
			<?php echo form_input(['type'=>'text','name'=>'track_num','id'=>'track_num','class'=>'form-control','placeholder'=>'Track a Document', 'value'=>set_value('track_num')]); ?>
			<span class="input-group-btn">
				<button type="submit" class="btn btn-danger tbtn">
					<span class="glyphicon glyphicon-search"></span> Track
				</button>
			</span>
		</form>
		</div>
		<?php
		echo '<label style="color: Black; "><strong>'.$this->session->flashdata("track").'</strong></label>'
		?>
<?php echo $employee_id .$action; ?>
		<?php echo form_close(); ?>
	</div> <br />

	<!--
	<div id="outputbox">
		<div class="container">
			<h3 class="txtbox"> Status : </h3>
		</div>
	</div>
	-->

</div>

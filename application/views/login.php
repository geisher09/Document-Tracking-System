	<div  class="box">

		<?php echo form_open('home/login_validation');?>
		<h1  style="color: #ffffff; "> Login </h1> <br /><br /><br />


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
			<button align="center" type="submit" class="btn btn-md lgbtn"> LOG IN </button> <br /><br /><br /><br >
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
		echo '<div class="col-md-8 col-sm-12 col-xs-12 roundbox flipInX animated" style="margin-left:0px;"><h4 style="color: Black; "><strong>'.$this->session->flashdata("track").'</strong></h4></div>'
		?>
		<?php }?>
		<?php echo form_close(); ?>

	</div> <br />

	

</div>

<body>
<div class="container-fluid">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo base_url('assets/images/1.jpg') ?>" alt="one" />
			</div>

			<div class="item">
				<img src="<?php echo base_url('assets/images/1.jpg') ?>" alt="two" />
			</div>
		
			<div class="item">
				<img src="<?php echo base_url('assets/images/1.jpg') ?>" alt="three" />
			</div>
			
			<div class="item">
				<img src="<?php echo base_url('assets/images/1.jpg') ?>" alt="four" />
			</div>
		</div>
	</div>
	
	<div  class="box">
		<?php echo form_open('home/validation');?>
		<h1  style="color: White; "> Login </h1> <br /><br /><br />
		
			<!--
			<?php // if(isset($account_created)) {?>
		    	<h3 align="center" style="color:white;"><b><?php // echo $account_created; ?></b><br />You may now log in!<br /></h3>
		    <?php // } else { ?>
		    	<h1 align="center" style="color:white;"><b> LOG IN </b> <br /><br /></h1>
		    <?php // } ?>
			-->
		
		<div class="form-group">
			<input align="center" id="uname" type="text" class="form-control input-underline" name="uname" placeholder="User Name">
		</div> <br /> 
    
		<div class="form-group">
			<input align="center" id="password" type="password" class="form-control input-underline" name="password" placeholder="Password">
		</div> <br /><br />
				
		<div class="form-group">
			<button align="center" type="submit" class="btn btn-md lgbtn"> SIGN IN </button> <br /><br /><br /><br /><br /><br /><br >
		</div>
		
		<div class="form-group" align="right" style="color: white;">
			Not yet a member? &nbsp; <a href="<?php echo site_url('Home/signup'); ?>" align="right" type="submit" class="btn btn-md subtn"> Sign Up </a>
		</div>
	</div>
	<?php form_close(); ?>
	
	<div id="title">
		<p> Document Tracking System </p>
	</div>
	
	<div id="tbar">
		<form>
			<div class="form-group input-group">
				<input type="text" class="form-control bar" id="track" name="track" placeholder="Track a Document">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-danger tbtn">
						<span class="glyphicon glyphicon-search"></span> Track
					</button>
				</span>
			</div>
		</form> 
	</div> <br />
	
	<!--
	<div id="outputbox">
		<div class="container">	
			<h3 class="txtbox"> Status : </h3>
		</div>
	</div>
	-->
	
</div>
<p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;">Offices</p>
<div class="container body">

<!--body-->
		
	<div class="container red">
			<div class="h">
			<h1><strong>List of Offices</strong></h1>
			<?php foreach($offices as $o) :?>
			<!-- <?php echo $o; ?> -->
			<h3><a style="color:white;" href="<?php echo site_url('Home/dept/'.$o["office_id"]); ?>"><?php echo $o["office_desc"]; ?></a></h3>
			<!-- <h3><a href=.base_url('Home/dept/'.$o['office_id'])><?php echo $o["office_desc"]; ?></a></h3> -->
		<?php endforeach; ?>
<!--
				<h3><a href="<?php echo site_url('Home/dept'); ?>" class="o"> Office of the Vice President for Research and Extension </a></h3> <br><br>
				<h3><a href="#" class="o"> Office of the University Research and Development Services (URDS) </a></h3> <br><br>
				<h3><a href="#" class="o"> Integrated research and Training Center </a></h3> <br><br> -->

		   </div>
	   </div>

</div>

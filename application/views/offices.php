<div class="container-fluid body">

<!--body-->
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12">
		<div class="container red">
			<div class="h">
			<h1>Offices</h1><br>
			<?php foreach($offices as $o) :?>
			<!-- <?php echo $o; ?> -->
			<h3><a href="<?php echo site_url('Home/dept/'.$o["office_id"]); ?>"><?php echo $o["office_desc"]; ?></a></h3>
			<!-- <h3><a href=.base_url('Home/dept/'.$o['office_id'])><?php echo $o["office_desc"]; ?></a></h3> -->
		<?php endforeach; ?>
<!--
				<h3><a href="<?php echo site_url('Home/dept'); ?>" class="o"> Office of the Vice President for Research and Extension </a></h3> <br><br>
				<h3><a href="#" class="o"> Office of the University Research and Development Services (URDS) </a></h3> <br><br>
				<h3><a href="#" class="o"> Integrated research and Training Center </a></h3> <br><br> -->

		   </div>
	   </div>
	</div>
</div>

</div>

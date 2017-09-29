<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">

	</div>
</div>

	<div class="row" onload="setup()">
		<div class=" col-md-12 col-sm-12 col-xs-12 body " >
		<div class="container">
			<h2 class="h" > Add Departments </h2> <br /><br /><br /> <br />
			<?php if( $error = $this->session->flashdata('response')): ?>
			<div class="alert alert-dismissible alert-success">
				<?php echo $error; ?>
			</div>
			<?php endif; ?>
				<?php echo form_open_multipart('home/saveDept/'.$val,['class'=>'form']); ?>

				<div class="row">
					<div class="col-lg-12">
						<label for="ID"> Office ID: </label>
					<?php echo form_input(array('name'=>'office_id','class'=>'form-control','value'=>$val,'readonly'=>'true'));	?>
					</div>

					<div class="col-lg-12">
						<?php echo form_error('department_id'); ?>
			  		</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<label for="ID"> Department ID: </label>
						<?php echo form_input(['name'=>'department_id','class'=>'form-control','placeholder'=>'ID', 'value'=>set_value('department_id')]); ?>
					</div>

					<div class="col-lg-12">
						<?php echo form_error('department_id'); ?>
			  		</div>
				</div>


				<div class="row">
					<div class="col-lg-12">
					  		<div><br /></div>
						<label for="Name"> Department Name: </label>
						<?php echo form_input(['name'=>'department_desc','class'=>'form-control','placeholder'=>'Name', 'value'=>set_value('department_desc')]); ?>
					</div>

					<div class="col-lg-12">
						<?php echo form_error('department_desc'); ?>
			  		</div>
				</div>


				<div><br /></div>
				<div class="form-group">
					<?php $data = array(
					'type'      => 'submit',
					'content'   => 'Save <span class="btn-label"><i class="glyphicon glyphicon-save"></i></span>',
					'class'     => 'btn btn-md btn-labeled btn-danger',
					);

					echo form_button($data,$val);?>
				</div>
			</form>
		</div>
		</div>
	</div>

	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">

		</div>
	</div>

</div>

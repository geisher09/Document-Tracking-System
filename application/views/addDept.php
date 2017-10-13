<div class="container-fluid body">
	<div class="row" onload="setup()">
		<div class=" col-md-12 col-sm-12 col-xs-12" >
		<div class="container red">
			<h2 class="h" > Add Departments </h2> <br /><br /><br /> <br />
			<?php if( $error = $this->session->flashdata('response')): ?>
			<div class="alert alert-dismissible alert-success">
				<?php echo $error; ?>
			</div>
			<?php endif; ?>
				<?php echo form_open_multipart('home/saveDept/'.$id,['class'=>'form']); ?>

				<div class="row">
					<div class="col-lg-12">
						<label for="ID"> Department ID: </label>
						<input 
						<?php echo form_input(['name'=>'department_id','class'=>'form-control','placeholder'=>'ID', 'value'=>$id,'readonly'=>'true']); ?>
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

					echo form_button($data);?>
				</div>
			</form>
		</div>
		</div>
	</div>

</div>

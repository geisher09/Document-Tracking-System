<div class="container-fluid body">

	<!--body-->
	<div class="row" onload="setup()">
		<div class=" col-md-12 col-sm-12 col-xs-12" >
		<div class="container red" style="opacity: 0.90">
			<h2 class="h" > Add Documents </h2> <br /><br /><br /> <br />


				<?php echo form_open_multipart('home/save',['class'=>'form']); ?>

				<div class="row">
					<div class="col-lg-12">
						<label for="dtn"> Document Tracking Number: </label>
						<?php echo form_input(['name'=>'document_id','class'=>'form-control','placeholder'=>'Tracking no', 'value'=>set_value('document_id
						')]); ?>
					</div>

					<div class="col-lg-12">
						<?php echo form_error('document_id'); ?>
			  		</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<br />
						<label for="dtn"> Date: </label>
						<?php
						date_default_timezone_set('Asia/Manila');
						$time =date("h:i:sa");
						$date = date("Y-m-d");
						$data['time'] = $time;
						$data['date'] = $date;
						echo form_input(['name'=>'date_created','class'=>'form-control','placeholder'=>$date, 'value'=>$date,'readonly'=>'true']); ?>
					</div>

					<div class="col-lg-12">
						<?php echo form_error('date_created'); ?>
			  		</div>
				</div>


				<div class="row">
					<div class="col-lg-12">
					  		<div><br /></div>
						<label for="title"> Title: </label>
						<?php echo form_input(['name'=>'document_title','class'=>'form-control','placeholder'=>'Title', 'value'=>set_value('document_title')]); ?>
					</div>

					<div class="col-lg-12">
						<?php echo form_error('document_title'); ?>
			  		</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
					  		<div><br /></div>
						<label for="desc"> Description: </label>
						<?php echo form_textarea(['name'=>'document_desc','rows'=>'1','class'=>'form-control','placeholder'=>'Description', 'value'=>set_value('document_desc')]); ?>
					</div>

					<div class="col-lg-12">
						<?php echo form_error('document_desc'); ?>
			  		</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
					  		<div><br /></div>
						<label for="file"> Attach File: </label>
						<div class="input-group">
						<?php echo form_upload(['name'=>'file','class'=>'form-control']); ?>
						</div>
					</div>

					<div class="col-lg-12">
						<?php echo form_error('file'); ?>
			  		</div>
				</div>

				<!-- <div class="row">
					<div class="col-lg-12">
					  		<div><br /></div>
						<label for="sign"> Signatories: </label>
						<?php echo form_input(['name'=>'signatories','class'=>'form-control','placeholder'=>'Signatories', 'value'=>set_value('signatories')]); ?>
					</div>

					<div class="col-lg-12">
						<?php echo form_error('signatories'); ?>
			  		</div>
				</div> -->

				<div><br /></div>
				<div class="form-group">
					<?php $data = array(
					'type'      => 'submit',
					'content'   => 'Save <span class="btn-label"><i class="glyphicon glyphicon-save"></i></span>',
					'class'     => 'btn btn-md btn-labeled btn-danger',
					'value'		=> 'upload'
					);

					echo form_button($data);?>
				</div>
			</form>
		</div>
		</div>
	</div>

</div>

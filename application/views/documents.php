
	
	<!--border-->
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			 
		</div>
	</div>

	<!--body-->
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 body " > 
		<div class="container">
			<h2 class="h" > All Documents </h2> <br />
			
			<!-- search bar -->
			<form>
				<div class="form-group sbar input-group">
					<input type="text" class="form-control" id="system-search" name="q" placeholder="Search for" required/>
					<span class="input-group-btn">
						<button type="submit" class="btn btn-danger">
							<span class="glyphicon glyphicon-search"></span> Search
						</button>
					</span>
				</div>
			</form> 
 
			
			<!-- table -->
		    <table class="table table-list-search table-hover table-condensed table-responsive ">
				<thead>
					<tr>
						<th>TRACKING NO. </th>
						<th>TITLE</th>
						<th>STATUS</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					<?php if(isset($do)): ?>
					<?php foreach ($do as $document){ ?>
					<tr>
						<td><?php echo $document['document_id']; ?></td>
						<td><?php echo $document['document_title']; ?></td>
						<td><?php echo $document['action']; ?></td>
						<td>
							<?php echo anchor("home/view/{$document['document_id']}", 'View document', ['class'=>'btn btn-primary btn-sm'],['data-toggle'=>'modal'],['data-target'=>'#details']); ?>
							</td>
					</tr>
					<?php } ?>
					<?php else: ?>
							<tr>NO RECORD FOUND!</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		
		<!--modal-->
		<div id="details" class="modal fade" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #E74C3C">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title" style="color: #641E16 text-align: center;">Document Details</h3>
					</div>
			
					<div class="modal-body">
					 <div>
						<h4 style="font-weight: bold"> 
							Document Tracking Number: <br /><br />
							Title: <br /><br />
							Description: <br /><br /><br /><br /><br /><br />
							Date Submitted: <br /><br />
							Date Received: <br /><br />
							Status: <br /><br />
							Signatories: <br /><br /><br /><br />
						</h4>
					 </div>
					</div>
				
				</div>
			</div>
		</div>
		</div>
	</div>
	
	<!--border-->
	<div class="row">
		<div class=" col-md-12 col-sm-12 col-xs-12 border">
			    
		</div>
	</div>

</div>
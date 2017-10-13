<div class="container body">
<!--body-->
		<div class="container red">

				<h2>Departments</h2><br />
				<br>
				
				<table class="table table-list-search table-hover table-condensed table-responsive ">
					
					<tbody>
						<?php foreach($dept as $department) :?>
						<tr>
							<td><a href="<?php echo site_url('Home/deptEmployees/'.$department["department_id"]); ?>"><?php echo $department["department_desc"]; ?></a></td>
							<td><?php echo $department["department_id"]; ?></td>
						</tr>
						<!-- <h3><a href=.base_url('Home/dept/'.$o['office_id'])><?php echo $o["office_desc"]; ?></a></h3> -->
					<?php endforeach; ?>
						<!-- <tr>
							<td>Audio Visual Department</td>
							<td>314-6789</td>
							<td>
								<a href="<?php echo site_url('Home/AVD'); ?>" class="btn btn-sm btn-primary">
										 View Employees
								</a>
							</td>
						</tr>
						<tr>
							<td>Physics Department</td>
							<td>314-6789</td>
							<td>
								<button class="btn btn-sm btn-primary"> View Employees </button>
							</td>
						</tr> -->
					</tbody>
				</table>
				
				<a class="btn btn-success btn-md" data-toggle="modal" data-target="#add_dept" >
					<!-- matic na sa office of VP of research and extensions muna to -->
					<span class="glyphicon glyphicon-plus"></span> Add Department
				</a>
		</div>

<div class="modal fade" id="add_dept" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #555555">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title text-center">Add Document</h3>
        </div>
        <div class="modal-body">
			
			<div class="row">
					<div class="col-lg-10">
						<label for="ID"> Department ID: </label>
						<?php echo form_input(['name'=>'department_id','class'=>'form-control','placeholder'=>'ID','readonly'=>'true']); ?>
					</div>

				</div>


				<div class="row">
					<div class="col-lg-10">
					  		<div><br /></div>
						<label for="Name"> Department Name: </label>
						<?php echo form_input(['name'=>'department_desc','class'=>'form-control','placeholder'=>'Name', 'value'=>set_value('department_desc')]); ?>
					</div>

				</div>
			
			<br><br>
			<div>
			
				<button type="submit" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</form>
        </div>
        
      </div>
      
   </div>
 </div>
 
</div>
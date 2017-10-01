<!--border-->
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">

	</div>
</div>

<!--body-->
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 body">
		<div class="container">

				<h2 class="h">Departments</h2><br /><br />
				<a href="<?php echo site_url('Home/addDept/'.$office["office_id"]); ?>" class="btn btn-danger btn-md" id="adept">
					<!-- matic na sa office of VP of research and extensions muna to -->
					<span class="glyphicon glyphicon-plus"></span> Add Department
				</a>
				<div class="container">
				<table class="table table-list-search table-hover table-condensed table-responsive ">
					<thead>
						<tr>
							<td> <h3> List of Departments </h3> </td>
						</tr>
					</thead>
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
				</div>

		</div>
	</div>
</div>

<!--border-->
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">

	</div>
</div>

<!--border-->
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 border">

	</div>
</div>

<!--body-->
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12 body">
		<div class="container">

				<h2 class="h">  Department</h2><br /><br />
				<div class="container">
          <table class="table table-list-search table-hover table-responsive ">
  				<thead>
  					<tr>
  						<th>EMPLOYEE ID</th>
  						<th colspan="3">NAME</th>
  						<th>POSITION</th>
  						<th>SEX</th>
  					</tr>
  				</thead>
  				<tbody>
  					<?php foreach ($employees as $e){ ?>
  					<tr>
  						<td><?php echo $e['employee_id']; ?></td>
  						<td><?php echo $e['lname']; ?></td>
  						<td><?php echo $e['fname']; ?></td>
  						<td><?php echo $e['mname']; ?></td>
  						<td><?php echo $e['position']; ?></td>
  						<td><?php echo $e['sex']; ?></td>

  					</tr>
  					<?php } ?>
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

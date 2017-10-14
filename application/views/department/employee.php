<div class="container body">
		<div class="container red">
			<h2>Employees</h2><br /><br /><br />
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
  						<td><?php echo $e['lname'].', '.$e['fname'].' '.$e['mname'];?></td>
  						<td><?php echo $e['position']; ?></td>		
  						<td><?php echo $e['sex']; ?></td>

  					</tr>
  					<?php } ?>
  				</tbody>
  			</table>

		</div>
</div>


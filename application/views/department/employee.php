<div class="container-fluid body">
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12">
		<div class="container red">
			<h2 class="h">Department</h2><br /><br /><br />
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
						
							<!--- sorry kung ginalaw ko tong part na to ah, inayos ko lang ung 
								  pagkaka-display ng name ng employee hehe. XD   -Carlo
								  PS: okay lang kung ibalik niyo sa dati
								  PPS: remove this and all the other comments pag defense na nakakahiya sa panels haha.
							--->
								<td><?php //echo $e['fname'].' '; ?></td>   
								<td><?php //echo $e['mname']; ?></td>	
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


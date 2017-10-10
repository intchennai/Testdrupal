<div class="left_column inn-lft">  
<div class="sub_cnt_table innr_full_cnt">
               				<table class="table table-bordered table-striped custom-style">
	        				    <thead>
	        						<tr>
	        							<th>Sl. No.</th>
	        							<th>Name and place of the company</th>
	        							<th>Date of in-corporation	</th>
	        							
	        							<th>Address and Contact</th>
	        							<th>Present Management (Tvl)</th>
										<th>Objectives</th>
	        						</tr>
	        					</thead>  
<tbody>

<?php 

foreach($rows as $result)
//echo "<pre>";print_r($result1);

{ ?>
	
		<tr>
		<td><?php print $result['counter']; ?></td>
		<td><?php print $result['title']; ?></td>
		<td><?php print $result['field_corpaoration']; ?></td>
		<td><?php print $result['field_address']; ?></td>
		<td><?php print $result['field_management']; ?></td>
		<td><?php print $result['field_objectives']; ?></td>
	</tr>
<?php  }
?>
</tbody>
</table>
</div>
</div>

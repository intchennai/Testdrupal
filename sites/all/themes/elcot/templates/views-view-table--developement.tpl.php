<?php 
foreach($rows as $result1) { ?>
	
<h3 class="sub_tit2 mrbt-10 txt_up"><?php echo $result1['field_software_developement']; ?></h3>	
	<?php echo $result1['body']; ?>
<?php break;
} ?>
<div class="fc-tab-5">
		<div class="row-fluid pad-10 marbt_15">						
	<div class="sub_cnt_table innr_full_cnt">
	<table class="table table-bordered table-striped custom-style">
		<thead>
			<tr>
				<th>Department</th>
				<th>Project Name</th>
				<th>Scope of work</th>
				<th>Project cost in Lakhs</th>
				<th>Work Order Date</th>
				<th>Software Developer</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
<?php 
foreach($rows as $result)
//echo "<pre>";print_r($result);
{ ?>

		<tr>
			<td><?php echo $result ['field_developement']; ?></td>
			<td><?php echo $result ['title']; ?></td>
			<td><?php echo $result ['field_scope_of_work']; ?></td>
			<td><?php echo $result ['field_host']; ?></td>
			<td><?php echo $result ['field_year']; ?></td>
			<td><?php echo $result ['field_name']; ?></td>
			<td><?php echo $result ['field_address']; ?></td>
		</tr>
<?php }
?></tbody>
	</table>  
	</div>
	</div>
	
</div>
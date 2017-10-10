  <?php
  global $base_url;


?>  
  <div class="row-fluid pad-10">
	<div class="sub_cnt_table innr_full_cnt">
		<table class="table table-bordered table-striped custom-style">
	    <thead>
		<tr>
			<th>Sl. No.</th>
			<th>Name of the Joint Sector Company</th>
			<th>% of equity held by ELCOT</th>
		</tr>
		</thead> 
<?php 
foreach($rows as $result)
{ //echo "<pre>";print_r($result); ?>

<?php print $result['body']; ?>   
	        				
		<tr>
			<td><?php print $result['counter']; ?></td>
			<td><?php print $result['title']; ?></td>
			<td><?php print $result['field_percentage']; ?></td>
		</tr>
<?php }
?></tbody>
		</table> 

	<a href="<?php print $base_url; ?>/joint-ventureslist" class="more_btn btn mrg-10">For more details</a>            				
  	</div>				
 </div>
	

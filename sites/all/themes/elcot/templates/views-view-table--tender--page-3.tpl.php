<?php global $base_url;?>

	<table class="table table-bordered table-striped custom-style">
		<thead>
		<tr>
			 <th>Sl. No.</th>
		<th>Tender Ref. No</th>
		<th>Tender Description</th>
		<th>Published Date</th>
		<th>Closing Date and Time</th>
		<th>Opening Date and Time</th>
		
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($rows as $result) {
	      echo "<tr>";
		  echo "<td>" .$result['counter']. "</td>";
	      echo "<td>" .$result['title']. "</td>";
	      echo "<td>" .$result['body']. "</td>";
		  echo "<td>" .$result['field_ordering_date']. "</td>";
	      echo "<td>" .$result['field_end_date']. "</td>";
	      echo "<td>" .$result['field_start_date']. "</td>";
	?>
		</tr>
	
<?php  } ?>
		        						        				
</tbody>
</table>  



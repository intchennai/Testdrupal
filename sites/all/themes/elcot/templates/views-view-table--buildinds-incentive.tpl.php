
<div class="sub_cnt_table innr_full_cnt">
<table class="table table-bordered table-striped custom-style">
	        				    <thead>
	        						<tr>
	        							<th>Contact Person</th>
	        							<th>Address</th>
	        							<th>Phone Number</th>
	        							<th>Date of issue of NOC</th>
	        							<th>IT Building's Location</th>
	        							<th>Built-up Area(sq.ft)</th>
	        						</tr>
	        					</thead>
	        					<tbody>
<?php 
foreach($rows as $result)
{ //print_r($result); ?>
		  
		  <tr>
		  <td> <?php echo $result['title']; ?> </td>
		  <td> <?php echo $result['field_address']; ?> </td>
		  <td> <?php echo $result['field_host']; ?> </td>
		  <td> <?php echo $result['field_date']; ?> </td>
		  <td> <?php echo $result['field_pdf_name']; ?> </td>
		  <td> <?php echo $result['field_post']; ?> </td>
		  </tr>
		  
<?php }
?> </tbody>
</table></div>
		             
<div class="sub_cnt_table innr_full_cnt">
<table class="table table-bordered table-striped custom-style">
	        				    <thead>
	        						<tr>
									<th>S.No</th>
	        							<th>Projects</th>
	        							<th>Description</th>
	        							<th>Project Started date</th>
	        						</tr>
	        					</thead>
           

<?php 
foreach($rows as $result)
{
//echo "<pre>"; print_r($result);
	?>
 
               				 <div class="sub_cnt_table innr_full_cnt">
	        					<tbody>
	        						<tr>
									   <td><?php print $result['counter']; ?></td>
	        							<td><?php print $result['title']; ?></td>
	        							<td><?php print $result['field_description']; ?></td>
									
										<td><?php print $result['field_start_date']; ?> </td>
										
											
	        							
	        						</tr>     						        				
	        					</tbody>
               				</div> 
             
<?php }
?>
 </table>  
</div> 
               			
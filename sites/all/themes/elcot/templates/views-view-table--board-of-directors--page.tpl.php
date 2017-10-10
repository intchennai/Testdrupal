<div class="row-fluid sub_cnt_table bdir_page">
<table class="table table-bordered table-striped custom-style">
<thead>
	<tr>
		<th>Official Address</th>
		<th>Contact Details</th>
	</tr>
</thead>
<tbody>
<?php foreach($rows as $result)
{ 
//print_r($result);?>
	<tr>
		<td><p>
			<strong><?php echo $result['title'];?></strong><br>
			 <?php echo $result['field_post'];?>
		</p></td>
		<td>
			<p><span>Phone :</span><?php echo $result['field_phone_number'];?><br>
				<span>Fax:</span><?php echo $result['field_fax'];?><br>
				<span>e-mail:</span> <a href="#"><?php echo $result['field_email'];?></a></p>
		</td>
	</tr>
<?php } ?>

</tbody>
</table>               				

</div>
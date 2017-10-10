<?php global $base_url;?>

<div class="fc-tab-1">
<div class="sub_cnt_table innr_full_cnt">
<table class="table table-bordered table-striped custom-style">
<thead>
	<tr>
	    <th>Sl. No.</th>
		<th>Tender Ref. No</th>
		<th>Tender Description</th>
		<th>Published Date</th>
		<th>Closing Date and Time</th>
		<th>Opening Date and Time</th>
		<th>Tender Document</th>
	</tr>
</thead>
<?php
echo "<tbody>";
foreach($rows as $result)
 //echo "<pre>";print_r($result);
 
{  
    $today_datetime = strtotime("now");
    $last_date1= $result['field_last_date_of_document_down'];
    $last_date= Explode('-',$result['field_last_date_of_document_down']);
	$lastdate = $last_date[0]." ".$last_date[1];
	$lastdatetime = strtotime($lastdate);
	
	//echo "**".date('m/d/Y - H:i',$lastdatetime);
	
	echo "<tr>";
	echo "<td>" .$result['counter']. "</td>";
	echo "<td>" .$result['title']. "</td>";
	echo "<td>" .$result['body']. "</td>";
	echo "<td>" .$result['field_ordering_date']. "</td>";
	echo "<td>" .$result['field_end_date']. "</td>";
	echo "<td>" .$result['field_start_date']. "</td>"; ?>
	
	<td>
	
	<a href="<?php echo $base_url;?>/tender-form/?tenderid=<?php echo $result['nid'];?>"><span class="fa fa-file-text"></span></a>

	
	</td></tr>

<?php	  } ?>
</tbody></table>
</div></div>




				        					
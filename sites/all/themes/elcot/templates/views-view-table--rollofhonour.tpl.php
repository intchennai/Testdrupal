<?php 
echo "<div class='sub_cnt_table innr_full_cnt martp_15'>";
echo "<div class='fc-tab-5'>";

echo "<table class='table table-bordered table-striped custom-style'>";
foreach($rows as $result1)
//echo "<pre>";print_r($result1);

{ ?>
<h3 class="sub_tit3 mrbt-10"> <?php print $result1['field_roll_of_honour']; ?></h3>
	
<?php
break;

} ?>
<thead>
		<tr>
			<th>Name</th>
			<?php if($result1['field_post'] != '' ){ ?>
			<th>Post</th>
			<?php } ?>
			<th>Year</th>
		</tr>
	</thead>
	<tbody>
<?php 
foreach($rows as $result)
{
	   echo "<tr>";
       echo "<td>". $result['title']."</td>";
	   if ($result1['field_post'] != '' ){
	   echo "<td>".$result['field_post']."</td>"; 
	   }
	   echo "<td>". $result['field_year']."</td>";	  
	   echo "</tr>";   

} ?>
</tbody>
</table>  
</div>

</div>
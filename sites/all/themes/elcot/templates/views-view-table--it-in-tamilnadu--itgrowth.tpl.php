<div class="row-fluid pad-10">
<div class="sub_cnt_table innr_full_cnt">
<table class="table table-bordered table-striped custom-style">
<thead>
<tr><th>Year</th>
<th>Total Rs in Core</th>
</tr></thead>
<?php 

foreach($rows as $result1)
//echo "<pre>";print_r($result1);
{ ?>
<h3 class="sub_tit2 mrbt-10"><?php echo $term_title = $result1['field_it_growth'];?></h3>
<?php break;
 }

 ?>
 <tbody>

<?php 
foreach($rows as $result)
{
	   echo "<tr>";
       echo "<td>". $result['title']."</td>";
	    if ($result['field_text'] != '')
	   {
	   echo "<td>".$result['field_text']."</td>"; 
	   }
	   else
	   {
	  echo "<td>".$result['field_name']."</td>";  
	   }
		   
	   echo "</tr>";   

}

?>
</tbody>
</table>

</div>
               			</div>
	<?php 
foreach($rows as $result)
{ ?>
<div>
 <?php 
print $result['body']; 
//print $result['field_image']; 

?>
</div>

<?php } ?>
	
						
	
	
						











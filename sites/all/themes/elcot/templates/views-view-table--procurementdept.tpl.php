<div class="sub_cnt_table innr_full_cnt">

<table class="table table-bordered table-striped custom-style">
<thead>
<tr><th>Title</th><th>Management</th><th>Corpaoration</th></tr></thead>	
 <tbody>
<?php 
foreach($rows as $result)
{ 
//echo "<pre>";print_r($result);

echo $result['body'];
 echo "<tr>";
       echo "<td><a href='$result[field_file]' target=_blank>". $result['field_text']."</a></td>";
	   echo "<td>".$result['title']."</td>"; 
	   echo "<td>". $result['field_year']."</td>";	   
	   echo "</tr>"; 
}
echo "</tbody>";
echo "</table>";
echo "</div>";
?>
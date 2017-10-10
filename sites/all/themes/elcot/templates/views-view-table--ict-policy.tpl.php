     
        <div class="left_column itparkspage inn-lft">    
 <ul class="ul-list arrow_list">
<?php $i=0;
foreach($rows as $result)
{ //echo "<pre>"; print_r($result); 
 $files = $result['field_file'];
$files_1 = explode (',',$files);
//print_r($files_1);
$pdf_name = $result['field_pdf_name'];
$pdf_name_1 = explode (',',$pdf_name);
$link_count = count($files_1);

 ?>
<h3 class="sub_tit2 mrbt-10"><?php print $result['title']; ?></h3>
 <?php    if($link_count>0)
		   { 
				for($i=0;$link_count>$i;$i++) {
		?>
		
		<li><a href="<?php echo $files_1[$i]; ?>"><?php echo $pdf_name_1[$i]; ?></a></li>
		
		<?php
		
		} 
	
		}   
 } $i++;
?> </ul>
  </div>
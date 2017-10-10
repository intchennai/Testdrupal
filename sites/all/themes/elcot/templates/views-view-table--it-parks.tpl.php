      <?php $i=0;
foreach($rows as $result)
{ 

//echo "<pre>"; print_r($result);
$files = $result['field_file'];
$files_1 = explode (',',$files);
//echo "<pre>";print_r($files_1);
$links = $result['field_links'];
$links_1 = explode (',',$links);
$link_count = count($links_1);
//echo "<pre>";print_r($links_1);
$pdfName = $result['field_pdf_name'];

$pdfName_1 = explode (',',$pdfName);
$count = count($pdfName_1);


?>
 <div class="left_column itparkspage inn-lft">
    <h3 class="sub_tit2 mrbt-10"><?php echo $result['title']; ?></h3>
        <ul class="ul-list arrow_list">
           <?php 
		   if($count>0)
		   {
			for($i=0;$count>$i;$i++)
			{
			if($result['field_links'] == '' && $pdfName_1[$i]!='') 
			{ 
			?>
		        
				<li><a href="<?php echo $files_1[0];?>" target= "_blank"><?php echo $pdfName_1[$i];?></a></li>
		<?php }
			}
		   }
		   if($link_count>0)
		   { 
				for($i=0;$link_count>$i;$i++)
				{
					if($pdfName_1[$i]!='')
					{					
			?> 
				<li><a href="<?php echo $links_1[$i];?>" target= "_blank"><?php echo $pdfName_1[$i];?></a></li>
		<?php   
					}
				}	
		   }	
				
			?>                                    
            </ul>      
                             <?php echo $result['body']; ?>
                        </div>
<?php }
?>
 
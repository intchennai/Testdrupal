<?php global $base_url; ?>
   <div class="e_info_cont">
<?php
foreach($rows as $result)
	{  
	 $nodealias= $base_url.'/'.drupal_get_path_alias('node/'.$result['nid']);
	 
	
	?>
	
		<div class="e_info_li">
			<div class="e_info_tnlt_img">
				<img src="<?php echo $result['field_logo'];?>">
			</div>
			<div class="e_info_tnlt_cont">
			<ul>
			<?php if($result['field_link'] == '') 
			{  ?>
		        
				<li><a href="<?php echo $nodealias;?>" target= "_blank" style="color:#5d5d5d;"><?php echo $result['title'];?></a></p>
		</li><?php }
			else
			{ ?>
				<li><a href="<?php echo $result['field_link'];?>" target= "_blank" style="color:#5d5d5d;"><?php echo $result['title'];?></a></p>
				 
		</li><?php }
				
			?>	
			</ul>
			</div>
		</div>
		
		
<?php 	} ?>
                      
</div>


<div class="row-fluid ec_zone">
<div class="row-fluid spc_eco_zone_row gal_pop">
<?php  
$i= 1;
foreach($rows as $result1) {
$image = $result1['field_image'];
//print_r($result1);
$image_1 = explode (',',$image);
$img_count =count($image_1); 
if($img_count >0 & $result1['field_image'] !='') {
	 for($i=0;$img_count>$i;$i++)
       { ?>
           <div class="col-md-50 gal_line" data-responsive="" data-src="<?php echo $image_1[$i]; ?>">		               					
				<a href="#" class="zone_img_col gal_line"><img src="<?php echo $image_1[$i]; ?>"></a>		               					
		   </div>
<?php  } } } ?>
</div>
</div>
<div class="row-fluid pad-10 zone_list_cnt" >
  <ul class="ul-list zone_tab">
	<?php foreach ($rows as $result)
	{ ?>
		
		   <li>
			  <div><?php echo $result['title'];?></div>
			  <div class="row-fluid pad-10 zone_list_cnt_details" >
				<div class="row-fluid pad-10">
		<?php echo $result['body'];?>
			    </div>
		        </div>
		   </li>
	<?php } ?>
												
	</ul>
</div>
 <div class="container">                 
				      <div id="logo" class="owl-custom-nav  owl-carousel owl-theme"> 
<?php 
foreach($rows as $result)
{ ?>
          
	<div class="item">
	<div class="img_item">
	<a href='<?php print $result['field_link']; ?>' target="_blank"><img src="<?php print $result['field_image']; ?>"></a>
	</div>
	</div>
	
             
<?php }
?>
 </div>
				      </div>
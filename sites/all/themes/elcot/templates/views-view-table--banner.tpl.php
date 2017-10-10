<div id="banner_slider" class="banner_slider  owl-custom-nav  owl-carousel owl-theme"> 
<?php 
foreach($rows as $result)
{ ?>
 <div class="item">
	<img src="<?php echo $result['field_image'] ?>" alt="The Last of us">
		</div>
             
<?php }
?>
  </div>
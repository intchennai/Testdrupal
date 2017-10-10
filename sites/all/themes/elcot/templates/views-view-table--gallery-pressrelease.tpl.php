  <?php global $base_url;?>                             
 <div class="row-fluid pad-10 gallery_page">
 	
 	<ul class="img_list gal_img ">
 		<?php foreach ($rows as $result)
 		{ 
 		$nodealias= drupal_get_path_alias('node/'.$result['nid']);
 		
 		?>
 		<li>
 			<div class="gal_pop">
         			<div class="gal_line"  data-responsive="" data-src="<?php echo $result['field_image'];?>">
         				<a href="" class="img_a"><img src="<?php echo $result['field_image'];?>"></a>
         			</div>
 			</div>
 			<h3 class="gal_h3">
 				<span class="gal_tit"> <?php echo $result['field_post'];?> </span>
 				<span class="gal_date"><?php echo $result['field_start_date'];?> </span>
 			</h3>
 			
 			<p class="gal_cnt"><a href=""><?php echo $result['title'];?></a></p>
 			<p class="gal_link"><a href="<?php echo $nodealias; ?>" class="link_btn hvr-sweep-to-top">View Details</a></p>
 			
 		</li>	
 	<?php 	} ?>
 		
 	</ul>
 </div>

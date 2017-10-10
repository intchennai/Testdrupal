       <div class="row-fluid pad-10 main_gallery_page">
                                 	<ul class="img_list effect_img_list gal_img gal_pop da-thumbs">
<?php 
foreach($rows as $result)
{ //print_r($result); ?>

                                 		<!--gallery-1 -->
                                 		<li class=""  data-responsive="" data-src="<?php echo $result['field_image']; ?>">
                             				<a href="" class="img_a">
                                                <img src="<?php echo $result['field_image']; ?>">
                                                <div><span class="fa fa-search"></span></div>
                                            </a>
                                 		</li>
                                 		
                                 	
                                    
<?php }
?></ul>
   </div>  
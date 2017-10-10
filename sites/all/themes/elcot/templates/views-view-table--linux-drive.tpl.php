  
                                	<div class="row-fluid news_leter pad-10">
									<?php 
$i=0;
foreach($rows as $result)
{
	  
 //print_r($result);
       if($i==0 || $i==3 ) 
	   { ?>
                                		<h3 class="sub_tit2 bor-2_line mrbt-10"><span><?php echo $result['field_services'];?></span></h3>
										
<?php }  $i++; }  ?>
 <div class="row-fluid news_row">
 <?php   foreach($rows as $result)   { ?>                       
  
                                			<div class="col_news_img col_news_lt">
                                				<div href="#" class="b-link-stroke b-animate-go">
                                					<div class="b-bottom-line"></div>
                                					<div class="b-top-line"></div>
                                					<img src="<?php echo $result['field_image'];?>">
                                				
                                				<div class="b-wrapper">
											  	<h2 class="b-from-left b-animate b-delay03"><?php echo $result['title'];?></h2>
											  	<ul class="ul-list arrow_list  b-from-right b-animate b-delay03 pad-10">
											  		<li><a href="<?php echo $result['field_file'];?>" class="down_icon">Download Drivers</a></li>
											  	</ul>
							          			
											  </div>
											  </div>	
                                				
                                			</div>
                                		
                                		
										
										
<?php } ?>
</div>
                                	</div>
                                	
                              
                   
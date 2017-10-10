<div class="row-fluid partner_block">
<?php 
foreach($rows as $result){ ?>
	 
	  
                                	<div class="col-md-3 part_logo">                                        		                                		
                                		<a href="<?php print $result['field_link']; ?>" class="b-link-flow b-animate-go" target=_blank>                                		                                			
										  <img src="<?php print $result['field_page_logo']; ?>">
										  <div class="b-wrapper">										  	
						           			 <p class="b-opacity b-animate b-delay03"><?php print $result['title']; ?></p>
										  </div>
										  <div class="b-top-line"></div>
										  <div class="b-top-line"></div>
										</a>             			
                                	</div>
	 
	
<?php } 

?></div>


	

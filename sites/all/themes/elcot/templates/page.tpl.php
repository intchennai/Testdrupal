<?php include_once('page-header.tpl.php'); ?>  
 <!--<script>
  (function() {
    var cx = '000208920705303983489:bkafhw6kdvg';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>  -->
	
  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php //print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <?php if ($page['featured']): ?>
    <div id="featured"><div class="section clearfix">
      <?php print render($page['featured']); ?>
    </div></div> <!-- /.section, /#featured -->
  <?php endif; 
 if( arg(0) == 'active-tender' || arg(0) == 'archive-tender' || arg(0) == 'closed-tender' || arg(0) == 'cancelled-retendered-tender' || arg(0) == 'corrigendum-tender')
  { ?>
	 <section class="row-fluid clearfix inner_ban">
				<img src="<?php print base_path().path_to_theme(); ?>/images/inner-tender-banners.jpg">
				<div class="inr_ban_cnt">
						<div class="container">
						<h3><?php print $title; ?></h3>
						</div>
					</div>
</section>
  <?php }
elseif(arg(0) =='tn-gov-1' || arg(0) =='promotional-agencies'){ ?>
	 <section class="row-fluid clearfix inner_ban">
		<img src="<?php print base_path().path_to_theme(); ?>/images/inner_itpark.jpg">
			<div class="inr_ban_cnt">
				<div class="container">
					<h3><?php print $title; ?></h3>
				</div>
			</div>
        </section>
	
<?php } elseif(arg(0) =='contact-us'){ ?>
<section class="row-fluid clearfix inner_ban">
		<img src="<?php print base_path().path_to_theme(); ?>/images/inner banner/inner_contact.jpg">
			<div class="inr_ban_cnt">
				<div class="container">
					<h3><?php print $title; ?></h3>
				</div>
			</div>
</section> 
<?php } elseif(arg(0) =='IT-Tamilnadu'){ ?>
<section class="row-fluid clearfix inner_ban">
		<img src="<?php print base_path().path_to_theme(); ?>/images/inner banner/inner-it_in_tamilnadu.jpg">
			<div class="inr_ban_cnt">
				<div class="container">
					<h3><?php print $title; ?></h3>
				</div>
			</div>
</section> 
<?php } elseif(arg(0) =='it-parks'){ ?>
<section class="row-fluid clearfix inner_ban">
		<img src="<?php print base_path().path_to_theme(); ?>/images/inner banner/inner_itpark.jpg">
			<div class="inr_ban_cnt">
				<div class="container">
					<h3><?php print $title; ?></h3>
				</div>
			</div>
</section> 
<?php } elseif(arg(0) =='joint_ventures') { ?>
<section class="row-fluid clearfix inner_ban">
		<img src="<?php print base_path().path_to_theme(); ?>/images/inner banner/inner_Joint_Ventures.jpg">
			<div class="inr_ban_cnt">
				<div class="container">
					<h3><?php print $title; ?></h3>
				</div>
			</div>
</section> 
<?php } elseif(arg(0) =='goverment-policies') { ?>
<section class="row-fluid clearfix inner_ban">
		<img src="<?php print base_path().path_to_theme(); ?>/images/inner banner/inner_gov_policies.jpg">
			<div class="inr_ban_cnt">
				<div class="container">
					<h3><?php print $title; ?></h3>
				</div>
			</div>
</section> 
<?php } elseif(arg(0) =='it-growth') { ?>
<section class="row-fluid clearfix inner_ban">
		<img src="<?php print base_path().path_to_theme(); ?>/images/inner banner/inner_IT_Growth.jpg">
			<div class="inr_ban_cnt">
				<div class="container">
					<h3><?php print $title; ?></h3>
				</div>
			</div>
</section> 
<?php } elseif(arg(0) =='opensource') { ?>
<section class="row-fluid clearfix inner_ban">
		<img src="<?php print base_path().path_to_theme(); ?>/images/inner banner/inner_itpark.jpg">
			<div class="inr_ban_cnt">
				<div class="container">
					<h3><?php print $title; ?></h3>
				</div>
			</div>
</section> 
<?php } elseif(arg(0) =='partners') { ?>
<section class="row-fluid clearfix inner_ban">
		<img src="<?php print base_path().path_to_theme(); ?>/images/inner banner/inner_partner.jpg">
			<div class="inr_ban_cnt">
				<div class="container">
					<h3><?php print $title; ?></h3>
				</div>
			</div>
</section> 
<?php }  
 ?>

<section class="row-fluid clearfix inner_ban">
	<?php $block = module_invoke('views', 'block_view', 'banner_images-block_1');
                   print render($block['content']); ?> 
</section> 
<?php
	 if(arg(0) != 'user'){ ?> 
        <section class="row-fluid clearfix bread_crume pad-10">
             <div class="container">
			 
					<?php if ($breadcrumb): ?>
	                     <?php print $breadcrumb; ?>
	                 <?php endif; ?>
                	<!--	<ul>
                			<li><a href="#">Home</a></li>
                			<li><a href="#">Tender</a></li>
                		</ul> -->
               </div>
             </section>
              
<div class="row-fluid tabs">
 <?php print render($tabs); ?>
</div>
<?php } ?>

 <div id="content" class="column"><div class="section">
    
    
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
     
      <?php print $feed_icons; ?>

    </div></div> <!-- /.section, /#content -->
	
	 <section class="row-fluid clearfix pad-20">
	 	 <?php 
					if( arg(0) == 'active-tender' || arg(0) == 'archive-tender' || arg(0) == 'closed-tender' || arg(0) == 'cancelled-retendered-tender' || arg(0) == 'corrigendum-tender')
					{ 
					?> 
           <div class="container">
		      <div class="layout_tab row-fluid">
					<h2 class="e_title"><span><?php echo $title;?></span></h2> 
                <div class="inn_search_block" style="display:none;">
               					<form class="inn_search_form">
               						<div class="se_input">
               							<input type="text" name="" placeholder="Search">
               						</div>
               						<div class="se_submit">
               							<input type="submit" name="" value="Search">
               						</div>
               					</form>
               				</div> 

               				<div class="VerticalTab VerticalTab_6 tabs_ver_6">
		
				<ul class="resp-tabs-list hor_1">
			
					<li class="tabs-1 <?php if(arg(0) == 'active-tender') echo "resp-tab-active"; ?>" ><span class="tabs-text"><a href="<?php echo $base_url;?>/active-tender">Active Tender</a></span></li>
					
					<li class="tabs-2 <?php if(arg(0) == 'closed-tender') echo "resp-tab-active"; ?>"><span class="tabs-text"><a href="<?php echo $base_url;?>/closed-tender">Closed Tender</a></span></li>
					<li class="tabs-3 <?php if(arg(0) == 'archive-tender') echo "resp-tab-active"; ?>" ><span class="tabs-text"><a href="<?php echo $base_url;?>/archive-tender">Archive Tender</a></span></li>             
					<li class="tabs-4 <?php if(arg(0) == 'cancelled-retendered-tender') echo "resp-tab-active"; ?>" ><span class="tabs-text"><a href="<?php echo $base_url;?>/cancelled-retendered-tender">Cancelled / Retendered Tender</a></span></li>
					<li class="tabs-5 <?php if(arg(0) == 'corrigendum-tender') echo "resp-tab-active"; ?>" ><span class="tabs-text"><a href="<?php echo $base_url;?>/corrigendum-tender">Corrigendum Tender</a></span></li>
					
				</ul>		<div class="resp-tabs-container hor_1">
							        <?php if(arg(0) == 'active-tender')
									{
										echo "<div class='fc-tab-1 resp-tab-content-active'>";
									}
									elseif(arg(0) == 'closed-tender')
									{
										echo "<div class='fc-tab-2 resp-tab-content-active'>";
									}
									elseif(arg(0) == 'archive-tender')
									{
										echo "<div class='fc-tab-3 resp-tab-content-active'>";
									}
									elseif(arg(0) == 'cancelled-retendered-tender')
									{
										echo "<div class='fc-tab-4 resp-tab-content-active'>";
									}
									elseif(arg(0) == 'corrigendum-tender')
									{
										echo "<div class='fc-tab-5 resp-tab-content-active'>";
									}
									?>
									
									<div class="sub_cnt_table innr_full_cnt">
								 <?php //$block = module_invoke('views', 'block_view', 'tender-block_1');
                                         print render($page['content']);
										 ?> 
									 
									</div>
									</div>
									
								</div>
	               		</div>
					
					</div>
					</div>
					<?php 
						}
						 else  {   ?>
						 
						   <div class="container main_page">
						   <?php if($node->type=='tender' ||  $node->type=='webform')
						   { ?>
							  	<div class="layout_1 row-fluid">
	               			<div class="left_column inn-lft">
		               			<?php if($node->type =='tender') { ?>
		               			<h2 class="e_title"><span><?php print $title;?></span></h2>              			
							 <?php } 
							 
							 ?>             			
		               			
		               			<?php print render($page['content']);?>
		               		
		               	</div>
						
		               	<div class="right_column inn-rgt layout_3 ">
		               		 <h3 class=" e_title lay2_wid_tit"><?php print t('ELCOT Links');?></h3>
		               		<div class="l2_rgt widget_tab">
		               		<div class="widget acc_active">
		               			<h3 class="e_title spcl_icon"><?php print t('Special Economic Zone');?></h3>
								<?php $block = module_invoke('views', 'block_view', 'economic_zone-block');
                                         print render($block['content']);
								?> 
		               		</div>
		               		<div class="widget">
		               			<h3 class="e_title imp_link"><?php print t('Important Links');?></h3>
								<ul class="ul-list arrow_list">
			<?php 
			  
			$left_menu = db_select('menu_links','ml')
                        ->fields('ml',array('link_title','p1','options','has_children','link_path'))
                        ->condition('menu_name','menu-important-links')
                       ->condition('p2','0')
                       ->condition('hidden','0')
                       //->condition('language',$lang_name)
		       ->orderBy('weight')
                       ->execute()
			 ->fetchAll();
             
			foreach($left_menu as $left_menus)
			{ ?>
				<li>
				 <a href="<?php echo url($left_menus->link_path); ?>"><?php echo $left_menus->link_title; ?></a>
				</li>
		<?php 	}
          ?>								
		   
		               			</ul>
		               		</div>
		               		<div class="widget">
		               			<h3 class="e_title policy_icon"><?php print t('Policies');?></h3>
				<?php $block = module_invoke('views', 'block_view', 'policies_home_page-block');
                                     print render($block['content']); ?> 
		               			
		               		</div>
		               		<div class="widget">
		               			<h3 class="e_title spl_pr_icon"><?php print t('Special Projects');?></h3>
		               			<?php $block = module_invoke('views', 'block_view', 'speciall_projects-block_1');
                                     print render($block['content']); ?> 

		               		</div>
		               		
		               		</div>
			               <div class="wid_img img_cnt" style="display:none";>
			               <h3 class="e_title lay2_wid_tit"><?php print t('Procurement Portal');?></h3>
					           <a href="#"><img src="<?php print base_path().path_to_theme(); ?>/images/procurment_portal.png"></a>
					        </div>
		               	</div>
		               	
		            
	               	</div>	  
						 <?php  } else { ?>
               			<div class="layout_2 row-fluid">
               		
	               			<div class="left_column inn-lft">
		               			<h2 class="e_title"><span><?php print $title;?></span></h2>     
								
		               		 <?php print render($page['content']); ?>
                            
		               	</div>
						 
		               	
                       <div class="right_column inn-rgt layout_2 ">
		               		 <h3 class="e_title lay2_wid_tit"><?php print t('ELCOT Links');?></h3>
		               		<div class="l2_rgt widget_tab">
		               		<div class="widget acc_active">
		               			<h3 class="e_title"><?php print t('Special Economic Zone');?></h3>
		               			<?php $block = module_invoke('views', 'block_view', 'economic_zone-block');
                                         print render($block['content']);
								?> 	               			
		               		</div>
		               		<div class="widget">
		               			<h3 class="e_title"><?php print t('Important Links');?></h3>
		               			<ul class="ul-list arrow_list">
		               			<?php	$menu = menu_navigation_links('menu-important-links');
print theme('links__menu_important_links', array('links' => $menu)); ?>

		               				
		               			</ul>
		               		</div>
		               		<div class="widget">
		               			<h3 class="e_title"><?php print t('Policies');?></h3>
		               			<ul class="ul-list arrow_list">		               				
		               				<?php $block = module_invoke('views', 'block_view', 'policies_home_page-block');
                                     print render($block['content']); ?> 	               				
		               			</ul>
		               		</div>
		               		<div class="widget">
		               			<h3 class="e_title"><?php print t('Special Projects');?></h3>
		               				               				
		               	 <?php $block = module_invoke('views', 'block_view', 'speciall_projects-block_1');
                                              print render($block['content']); ?> 
		               			
		               		</div>
							
		               		
		               		</div>
							<div class="wid_img img_cnt" style="display:none";>
			               <h3 class="e_title lay2_wid_tit"><?php print t('Procurement Portal');?></h3>
					           <a href="#"><img src="<?php print base_path().path_to_theme(); ?>/images/procurment_portal.png"></a>
					        </div>
			               
		               	</div>
		               	
		            
	               	</div>	
					<?php 	 } ?>
               		</div>
					<?php 	 } ?>
				</section>
				
				
			
				 
	
				
			   
			
				
			   
			   
	<footer class="clearfix row-fluid">
                   <?php include_once('page-footer.tpl.php'); ?>  
                   
                </footer>
			</div>
		</div>




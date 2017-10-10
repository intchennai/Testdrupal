<?php include_once('page-header.tpl.php'); ?>	
               <section class="row-fluid clearfix">
                   <div class="banner row-fluid"> 
						  <?php echo render($page['banner']); ?>
                   </div>
               </section>
			  
              <!-- --> 
			  
			  <section class="row-fluid clearfix ban_bt imp_link pad-10">
               		<div class="container">
               			<div class="col_4 imp_link_icon hi-icon">
               				<div class="iocn_img">
               					<i class="fa fa-cogs" aria-hidden="true"></i>
               				</div>
               				<div class="ban_bt_txt icon_txt"><a href="<?php echo $base_url; ?>/admin-setup">Admin Setup</a></div>
               			</div>
               			<div class="col_4 imp_link_icon hi-icon">
               				<div class="iocn_img">
               					<i class="fa fa-user-o" aria-hidden="true"></i>
               				</div>
               				<div class="ban_bt_txt icon_txt"><a href="<?php echo $base_url; ?>/branch-manager">Branch Managers</a></div>
               			</div>
               			<div class="col_4 imp_link_icon hi-icon">
               				<div class="iocn_img">
               					<i class="fa fa-users" aria-hidden="true"></i>
               				</div>
               				<div class="ban_bt_txt icon_txt"><a href="<?php echo $base_url; ?>/board-of-directors">Board of Directors</a></div>
               			</div>
               			<div class="col_4 imp_link_icon hi-icon">
               				<div class="iocn_img">
               					<i class="fa fa-mortar-board" aria-hidden="true"></i>
               				</div>
               				<div class="ban_bt_txt icon_txt"><a href="<?php echo $base_url; ?>/roll-of-honour">Roll of honour</a></div>
               			</div>
               			
               		</div>
               </section>
			  
			  <!--     -->
               <section class="section page_main_content pad-20 row-fluid clearfix" id="skip_content">
                    <div class="container">
                        <div class="e_info_block">
                            <h2 class="e_title">ELCOT <span>Information</span></h2>
                            <div class="e_info_cont">
							   <?php $block = module_invoke('views', 'block_view', 'elcot_information-block');
                                          print render($block['content']); ?> 
                             
                            </div>
                        </div>
                        <div class="e_policy_block">
                            <h2 class="e_title">Special Economic <span>& Policy Note</span></h2>
                            <ul class="e_policy_tab">
                                <li class="acc_active">
                                    <div>
                                    <span class="fa fa-tags"></span><?php print t('Special Economic Zone'); ?></div>
                                    <ul class="mCustomScrollbar">
                                       <?php echo render($page['economic_zone']); ?> 
                                       
                                    </ul>
                                </li>
                                <li>
                                    <div><span class="fa fa-bars"></span><?php print t('Useful Links'); ?></div>
                                    <ul class="mCustomScrollbar">
                                        <?php echo render($page['useful_links']); ?> 
                                   </ul>
                                </li>
                                <li>
                                    <div><span class="fa fa-file-text-o"></span><?php print t('Policy Note') ?></a></div>
                                    <ul class="mCustomScrollbar">
                                        <?php echo render($page['policy_note']); ?> 
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="e_news_block">
                            <h2 class="e_title">News <span>& Events</span></h2>
                            <ul class="e_news_list">
                                <li class="newsactive">
                                    <a href="javascript:void(0)"><i class="fa fa-calendar-o" aria-hidden="true"></i>Events</a>
                                    <div class="e_news_list_toggle">
                                            <?php echo render($page['events']); ?> 
                                             <a href="<?php echo base_path().$sitelan;?>events" class="e_btn">Read More</a>
                                    </div>
                                </li>
                               <!--li>
                                    <a href="javascript:void(0)"><i class="fa fa-bullhorn" aria-hidden="true"></i>What's New</a>
                                    <!--div class="e_news_list_toggle">
									<ul class="mCustomScrollbar">
                                       <?php //echo render($page['whats_new']); ?> 
                                                <a href="<?php //echo base_path().$sitelan;?>whats-new" class="e_btn">Read More</a>
												</ul>
                                    </div>
                                </li-->
                            </ul>   
                        </div>
                    </div>
                </section>

              <!-- -->
               <section class="row-fluid prj_block clearfix pad-20">
               		<div class="container">
                    	<div class="row-fluid">
							<div class="prj_content mid_content">
                            	<h3 class="title pr_title"><?php print t('Special Projects')?></h3>
                                <div class="prj_cnt spc_prj">                                
                                        <?php $block = module_invoke('views', 'block_view', 'speciall_projects-block');
                                              print render($block['content']); ?> 
									
                                    
                                    <a href="<?php echo base_path().$sitelan;?>special-projects" class="view_prj hv_lr">View Projects</a>
                                </div>
                            </div>
                            <div class="ser_content mid_content">
                            	<h3 class="title pr_title"><?php print t('Services')?></h3>
                                <div class="ser_cnt spc_prj">
                                	<div class="ser_list">
                                   <?php $block = module_invoke('views', 'block_view', 'services_home_page-block');
                                         print render($block['content']); ?>  
									<a href="#" class="view_prj hv_lr">View Services</a>
                                    </div>
                                </div>
                            </div>
                            <div class="policy_content mid_content">
                            	<h3 class="title pr_title">Policies</h3>
                                <div class="poli_cy spc_prj">
                                  <?php $block = module_invoke('views', 'block_view', 'policies_home_page-block');
                                     print render($block['content']); ?>  
                                    <a href="#" class="view_prj hv_lr">View Policies</a>
                                </div>
                            </div>
                        </div>
                    </div>
               </section>
               <section class="row-fluid our_prj_block clearfix pad-20">
               		<?php $block = module_invoke('views', 'block_view', 'our_projects-ourproject');
                         print render($block['content']); ?> 
               </section>
			   
			   <section class="row-fluid clearfix logo_block pad-20 carousel ">
			
			<?php $block = module_invoke('views', 'block_view', 'partners-block_1');
                  print render($block['content']); ?> 				   
				 </section>

                <footer class="clearfix row-fluid">
<?php include_once('page-footer.tpl.php'); ?>
                </footer>
			</div>
		</div>

</body>




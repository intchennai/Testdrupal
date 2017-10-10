<?php
 global $themes;
 global $base_url;
 global $language;
if($language->language == 'en') 
{ $sitelan = ''; } 
else 
{ $sitelan = $language->language.'/'; }

 ?>
 <head>
 <link rel="stylesheet" type="text/css" href="<?php print base_path().path_to_theme(); ?>/css/responsive.css">
	<style>		
	#block-views-news-events-block ul li{ margin:0 0 0 0; }
	#block-views-whats-new-block  ul li{margin:0 0 0 0;}
	</style>
	 <link rel="shortcut icon" href="<?php print base_path().path_to_theme(); ?>/images/favi.png" type="image/x-icon">
     <link rel="icon" href="<?php print base_path().path_to_theme(); ?>/images/favi.png" type="image/x-icon">
     </head>
	<body>
	
		<div id="page-wrapper">
			<div id="page">
				<header class="clearfix" id="header">
					<div class="header_top head_top_icon row-fluid">
						<div class="container">
							<div class="ht_lft">
								<ul class="ht_social">
									<li><a href="#" class="fa_pook soc_ico"></a></li>
                                    <li><a href="#" class="twit soc_ico"></a></li>
                                    <li><a href="#" class="goog_pl soc_ico"></a></li>
								</ul>
							</div>
                            <div class="ht_rt top_hd_cnt">
                            	<div class="ht_rt_item">
                                	<a href="#skip_content" class="skip_cnt">Skip to Main Content</a>
                                </div>
                                <div class="top_hd_nav">
                                <div class="ht_rt_item">
                                	<ul class="text_size rt_item_list">
                                        <li><a href="javascript:chooseStyle('bigger', 60);" title="Bigger Size">A</a></li>
                                        <li><a href="javascript:chooseStyle('none', 60);" title="Default Size">A</a></li>
                                    	<li><a href="javascript:chooseStyle('small', 60);" title="Smaller Size">A</a></li>
                                    </ul>
                                </div>
                                <div class="ht_rt_item">
                                	<ul class="rt_item_list rt_ht_col">
                                        <li> <a href="javascript:chooseStyle('none', 60)" checked="checked" class="wh_color"></a> </li>
                                        <li> <a href="javascript:chooseStyle('black-theme', 60)" class="bl_color"></a> </li>
                                        <li> <a href="javascript:chooseStyle('blue-theme', 60)" class="blue_color"></a> </li>
                                        <li> <a href="javascript:chooseStyle('brown-theme', 60)" class="br_color"></a> </li>
                                    </ul>
                                </div>
								
                            <!--div class="ht_rt_item">
							<a  class="ctools-use-modal" href='<?php //echo $base_url;?>/modal_forms/nojs/login'>Login</a>
                            <!--<a href="#logIn" class="log_in">Login</a> 
                                 	
                             </div-->
                             <!--div class="ht_rt_item">
                                 	
									<a  class="ctools-use-modal" href='<?php echo $base_url;?>/modal_forms/nojs/register '>Register </a>
									<!--<a href="#RegisTer" class="regi_ster">Register</a>
                                 </div-->
                                 <div class="ht_rt_item trans_select">
								 
                                <select class="drop-css">
                                    	<option selected><a href="#" class="policy_und_lang_en"> English</a></option>
                                        
                                    </select> 
								
											
											 
										
                                 </div>
                                 </div>
                            </div>
						</div>
					</div>
                    <div class="header_bot row-fluid">
                    	<div class="container">
                        	<div class="logo">
                            	<?php if ($logo): ?>
<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
<img src="<?php print $logo;  ?>" alt="<?php print t('Home'); ?>" />
</a>
<?php endif; ?>	
                          </div>
                          <div class="gov_logo">
                            	<div class="gov_img row-fluid"><img src="<?php print base_path().path_to_theme(); ?>/images/gov_img.png"></div>
                            	<div class="gov_txt row-fluid">
                            		<h2>Electronics Corporation of Tamilnadu Ltd.,</h2>
                            		<h3>A Government of Tamilnadu Undertaking</h3>
                            	</div>
                            </div>
                          
                            <div class="hd_nav nav_block">
                            	<ul>
                                	<li>
						<a href="<?php echo base_path().$sitelan;?>active-tender">
                                        	<img src="<?php print base_path().path_to_theme(); ?>/images/nav_tend.png">
                                       	    <span>Tender</span>
                                        </a>
                                    </li>
                                    <li>
                                       <a href="<?php echo $base_url; ?>/partners">
                                       <img src="<?php print base_path().path_to_theme(); ?>/images/nav_partner_icon.png">
                                       <span>Partners</span>
                                       </a>
                                   </li>
                                    <li>
                                    	<a href="<?php echo base_path().$sitelan;?>annual-report">
                                        <img src="<?php print base_path().path_to_theme(); ?>/images/nav_annu.png">
                                        <span>Annual Report</span>
                                        </a>
                                    </li>
                                  <li class="hd_tp_nav">
                                       <a href="#">
                                       <img src="<?php print base_path().path_to_theme(); ?>/images/nav_impotr_link_iocn.png">
                                       <span>Important Links</span>
                                       </a>
                                       <ul class="ul-list arrow_list top_sun_nav">
                                       	<li><a href="<?php echo $base_url ?>/policy-note-2012-2013">Policy note</a></li>
                                       	<li><a href="<?php echo $base_url ?>/elcot-it-sezs">IT SEZ's</a></li>
                                       	<li><a href="<?php echo $base_url ?>/rti">Right to Information (RTI)</a></li>
                                       	<li><a href="<?php echo $base_url ?>/events-main-page">News & Events</a></li>
                                       	<li><a href="<?php echo $base_url ?>/tamilnadu-destination-choice">TN - Destination of Choice</a></li>
                                       	<li><a href="<?php echo $base_url ?>/ict-academy">ICT Academy</a></li>
                                       	
                                       </ul>
                                   </li>
                                    <li>
                                    	<a href="<?php echo base_path().$sitelan;?>contact-us">
                                        <img src="<?php print base_path().path_to_theme(); ?>/images/nav_cont.png">
                                        <span>Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
				</header>
				<nav class="clearfix nav" id="main-menu">
                	<div class="container">
                    	<div class="navigation">
						
						<?php $main_menus = get_main_menus(); ?>
                        	<ul>
							   <?php foreach($main_menus as $hmenu) {  
							  ?>                               
                                <li>
								
                                   <a href="<?php echo url($hmenu->link_path); ?>"><?php echo $hmenu->link_title; ?></a>
																
								  <?php $sub_menus = get_sub_menus($hmenu->p1);
								  
								  if($hmenu->has_children =='0')
								  { ?>
									<ul>	  
								 <?php  }
								  else
								  { ?>
									<ul class="navigation_dropdown">	  
								<?php  } 
									  foreach($sub_menus as  $menu_sub){ 
			                  if($menu_sub->p2 == 850) { 
		                         ?>
		 				<li><a href="<?php echo url($menu_sub->link_path); ?>" target='_blank'><?php echo $menu_sub->link_title; ?></a> 
		                        <?php 		} else {	
		                      ?>
						<li><a href="<?php echo url($menu_sub->link_path); ?>"><?php echo $menu_sub->link_title; ?></a> 
		                     <?php 		}	
		                          ?>

									<!--<li><a href="<?php echo url($menu_sub->link_path); ?>"><?php echo $menu_sub->link_title; ?></a> -->
                                <?php $sub_child=get_sub_menus1($menu_sub->p2);
										if($menu_sub->has_children =='0')
								  { ?>
									<ul>
									<?php  }
								  else
								  { ?>
									<ul class="navigation_sub_dropdown">	  
								<?php  } 
										?>
										
										   <?php foreach($sub_child as $sub_childs)
										   { ?>
										  
											  <li>
											  <a href="<?php echo url($sub_childs->link_path); ?>"><?php echo $sub_childs->link_title; ?></a></li>

                                              
										  <?php } ?>
                                               
                                           </ul>
										
										</li>
							   <?php } ?>
                                    </ul>
                                </li>
                            	
							   <?php }	?>						
                            </ul>
                        </div>
                        <div class="search_btn_logo">
                        <a href="<?php echo $base_url; ?>/google-search"><span class="fa fa-google" aria-hidden="true"></span> Search</a>
                        </div>
                        <div class="search" >
                        
                        	<div class="nl_ser">
                            	<input type="text" class="text_feild ser_text"  placeholder="Search - Keyword, Phrase" id="srch"/>
                                <input type="submit" class="btn sub_btn" value="Submit" onclick="return serach_content();">
                            </div>
							
                            <!--div class="ad_ser" style="display:none;">
                            	<a href="#" class="ad_ser_li ad_ser_click">Advanced Search</a>                                
                            </div-->
                        </div>
                    </div>
                    <div class="search_toggle">
                        <div class="container">
                            <form class="ad_search">
                                <div class="srch_tgle_label">
                                    <label>Title</label>
                                </div>
                                <div class="srch_tgle_input">
                                    <input type="text" name="">
                                </div>
                                <div class="srch_tgle_label">
                                    <label>Section</label>
                                </div>
                                <div class="srch_tgle_input">
                                    <select>
                                        <option>IT Tamil Nadu</option>
                                        <option>IT Sez's</option>
                                        <option>Open Source</option>
                                        <option>TNeGA</option>
                                        <option>State Portal</option>
                                    </select>
                                </div>
                                <div class="srch_tgle_label">
                                    <label>Sort by</label>
                                </div>
                                <div class="srch_tgle_input">
                                    <select>
                                        <option>Recent</option>
                                        <option>Most Updated</option>
                                    </select>
                                </div>
                                <div class="srch_tgle_btn">
                                    <input type="submit" name="" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
                
<script>
function serach_content()

{ 
jQuery.noConflict();
         
	   var search = jQuery('#srch').val();

	      if((search == '') ||(search == 'Search') || (search == 'Please Enter Keyword')){ 

		  jQuery('#srch').val("Please Enter Keyword");

		  return false;

		  }

	   var url = "<?php echo base_path().'search/node/';?>";

	    window.location.href = url+search;

	    return false;
}

</script>
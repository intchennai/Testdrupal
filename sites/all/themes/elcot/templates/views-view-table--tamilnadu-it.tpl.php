<div class="left_column inn-lft">
<?php 
foreach($rows as $result)
{ ?>
<?php print $result['body']; ?>
		               			<div class="row-fluid ites_it mrbt-10">
		               				
		               					<div class="ites_it_col1">
		               						<img src="<?php print $result['field_image']; ?>">
		               					</div>
		               					<div class="ites_it_col2">
		               						<h3><?php echo t("IT / ITES"); ?></h3>
		               						<?php print $result['field_it_ites']; ?>
		               					</div>
		               				
		               			</div>
             
						<?php $block = module_invoke('views', 'block_view', 'it_in_tamilnadu-policy_list');
                                          print render($block['content']); ?>    
			 
			 <?php }
?>
 </div>
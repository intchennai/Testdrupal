<div class="row-fluid pad-20 gov_policy">
	<h3 class="e_title mrbt-10"><?php echo t("Government Polices"); ?></h3>
	<div class="row-fluid gov_pri_row pad-10">									

<?php
global $base_url;
?>


<?php 
foreach($rows as $result)
{ //print_r($result); 
 $nodealias= $base_url.'/'.drupal_get_path_alias('node/'.$result['nid']);
           
?>	               				
		               				
<div class="col-md-50">
	<div class="gov_pri_col">

		<div class="gov_pol_img_sec row-fluid">
			<img src="<?php echo $result['field_image']; ?>">
			<span class="policy_img_txt"><?php echo $result['title']; ?></span>
		</div>
		<ul class="ul-list ul-tick martp_15 row-fluid">
			<?php echo $result['body']; ?>
		</ul>
		<p class="gov_policy_anch"><a href="<?php echo $nodealias;  ?>"class="wid_more read_more hvr-wobble-horizontal">Read More</a></p>

	</div>
	</div>             				
		               			  
<?php }
?>
	
</div>
		               			</div>
								
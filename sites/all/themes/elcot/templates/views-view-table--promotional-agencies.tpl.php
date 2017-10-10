<?php 
foreach($rows as $result)
{ //print_r($result); ?>
<div class="promo_add_block">

<h3 class="sub_tit2 mrbt-10"><?php print $result['title']; ?></h3>
	<div class="pro_add_r">
	<h4 class="pro_tit">	<?php echo t("Contact Address :"); ?></h4>
		<ul>
			<li><p><?php print $result['field_address']; ?></p> </li>
		</ul>
	</div>
	<div class="pro_add_r">
		<h4 class="pro_tit"><?php echo t("Email/Website :"); ?></h4>
		<ul>
			<li> <?php print $result['field_email']; ?></li>
		</ul>
	</div>
	 </div>
<?php }
?>


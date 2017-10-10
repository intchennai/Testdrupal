<?php echo $form['#node']->title; ?>
<div class="reg-form">
<!-- <form class="webform-client-form " enctype="multipart/form-data" action="" method="post" id="webform-client-form-454" accept-charset="UTF-8"> -->
<?php 
///echo "%%".$form['#action'];
//echo "<pre>";print_r($form);

$ternder_id = explode('?tenderid=',$form['#action']);
if(!empty($ternder_id[1]))
{
$ternder_id = $ternder_id[1];
}
?>
<?php print drupal_render($form['submitted']['contact_person_name']); ?>
<?php print drupal_render($form['submitted']['company_name']); ?>
<?php print drupal_render($form['submitted']['address_2']); ?>
<?php print drupal_render($form['submitted']['city']); ?>
<?php print drupal_render($form['submitted']['phone']); ?>
<?php print drupal_render($form['submitted']['fax']); ?>
<?php print drupal_render($form['submitted']['e_mail']); ?>
<?php   print drupal_render($form['submitted']['tenderid']); ?>

<?php
		
		 print drupal_render($form['actions']['submit']);  
	  print drupal_render($form['form_token']);
	  print drupal_render($form['form_id']);
?>
<!-- </form> -->
</div>	

<script>
jQuery(document).ready(function(){ 
	
	(jQuery('.webform-component--tenderid input').val(<?php echo $ternder_id;?>));
	
})
</script>
<style>
.left_column
{
width:750px !important;
}
</style>
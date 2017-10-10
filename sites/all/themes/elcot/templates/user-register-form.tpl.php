<?php 
global $base_url;
//print_r($form);

?>
<?php print render($form['account']['name']); ?>
<?php print render($form['account']['mail']);?>
<?php print render($form['profile_main']['field_age']); ?>
<?php print render($form['profile_main']['field_country1']); ?>
<?php print render($form['profile_main']['field_reg_pin_code']); ?>
<?php print render($form['profile_main']['field_reg_age_category']); ?>
<?php print render($form['profile_main']['field_reg_education']); ?>
<?php print render($form['profile_main']['field_reg_mobile_no']); ?>
<?php print render($form['captcha']);?>
<?php print render($form['actions']['submit']);?>
<?php print drupal_render($form['form_id']);?>
<?php print render($form['encrypt_submissions_status']);?>
	

	

	

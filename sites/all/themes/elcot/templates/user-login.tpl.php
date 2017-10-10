<?php 
global $base_url;  //echo "<pre>"; print_r($form); ?>
  <div class="row-sign">
  <div class="usersig_row">
	<label class="sign_text">Username<sub>*</sub></label>
	    <div class="sign_text_box sign_box">
		 <input type="text" id="edit-name" name="name" value="" class="sign_input text_feild " autocomplete="off">
           <span class="user sign_icon"></span>
	    </div>
  </div>
<div class="usersig_row">
	<label class="sign_text">Password<sub>*</sub></label>
	<div class="sign_text_box sign_box">
		<input type="password" id="edit-pass" name="pass"  class="sign_input text_feild " autocomplete="off">
		<span class="ps_word sign_icon"></span>
	</div>
</div>


<?php //print render($form['name']);?>
<?php //print render($form['pass']);?>
<?php //print render($form['actions']['submit']);?>
<?php print render($form['captcha']);?>
<div class="usersig_row">                                 				
<input type="submit" id="edit-submit" name="op" value="Log in" class="sign_btn btn">
<label class="sign_forget">
<a class='ctools-use-modal' href="<?php echo $base_url; ?>/modal_forms/nojs/password">Forgot Password?</a>
</label>
</div>

<?php print drupal_render($form['form_token']);?>
<?php print drupal_render($form['form_id']);?>

  <?php if(!empty($form['encrypt_submissions_status'])) {?>
	  <?php print render($form['encrypt_submissions_status']);?>
	<?php }?>
<?php //print(drupal_render(drupal_get_form('user_login_block')));?>

</div>





											
                                       

			               		 <div class="row-fluid bmanager_row">  				
              						
<?php $i=0; 
foreach($rows as $result)
{ //echo "<pre>";print_r($result);
$email= $result['field_email'];
$email_1= explode (',',$email);
$count = count($email_1);

?>


	       				  <div class="bmanager_cont">          
                                        <!--div class="bmanager_icon">
                                            <img src="<?php //echo $result['field_image']; ?>">
                                        </div-->
                                        <div class="bmanager_name">
                                            <p><?php echo $result['title']; ?></p>
                                        </div>
                                        <div class="bmanager_add">
                                           <p><?php echo $result['field_district']; ?></p>
                                        </div>
                                        <div class="bmanager_cdet">
                                             <div class="">
                                                 <p><span>Phone :</span><span><?php echo $result['field_phone_number']; ?></span></p>
                                               <?php   if($count>0)
		   {
			  
			for($i=0;$count>$i;$i++)
			{ if ($i==0) { ?>
				<p><span>email :</span><span>
				
		<?php	} ?>
			
			 
		<?php echo $email_1[$i]; ?>
		<?php	}
		   } ?> </span></p> 
  </div>
     </div>
        </div>
                                   
<?php } 
?>
		               
</div>
 				

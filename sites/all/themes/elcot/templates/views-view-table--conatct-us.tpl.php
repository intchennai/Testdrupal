  <div class="row-fluid mission_vission ">
  <ul class="contact_list">
<?php 
foreach($rows as $result)
{ //echo "<pre>"; print_r($result);
?>

                                   
                                        <li class="contact_box">
                                            <h3 class="cont_post"><?php print $result['title']; ?></h3>
                                            <h4 class="cont_name"><?php print $result['field_contant_name']; ?></h4>
                                            <p><strong><?php print $result['field_district']; ?></strong></p>
                                            <p><span>Phone & Fax :</span><?php print $result['field_phone_number']; ?></p>
                                            
                                            
                                        </li>
                                     
                                    
                                
             
<?php }
?>
</ul>
</div>
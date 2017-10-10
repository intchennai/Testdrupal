<?php 
foreach($rows as $result)
{ 
if ($result['field_image'] != '') { ?>
 <div class="row-fluid mission_vission ">
<div class="left_column inn-lft">
<?php echo $result['body'];?>
</div>
<div class="row-fluid inn-rgt martp_15">
              <h2 class="sub_tit2 mrbt-15"><?php echo t('Value Proposition'); ?></h2>                    
              <img src="<?php echo $result['field_image'];?>" alt="">
              </div>



</div>
<?php } else {
 echo $result['body'];
}


}

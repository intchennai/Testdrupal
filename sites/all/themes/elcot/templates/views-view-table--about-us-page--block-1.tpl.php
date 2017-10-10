<?php 
foreach($rows as $result)
{ 
if ($result['field_image'] != '') { ?>
 <div class="row-fluid mission_vission ">
<div class="innrig_cnt inn-lft">
<?php echo $result['body'];?>
</div>
<div class="mis_vis_img box_img b-link-box b-animate-go innr-lft-img inn-rgt">
<div class="b-bottom-line"></div>
<div class="b-top-line"></div>
<div class="b-bottom-line"></div>
<div class="b-top-line"></div>
<img src="<?php echo $result['field_image'];?>" alt="">

<div class="b-wrapper">
<h4 class="b-from-top b-animate b-delay03"><?php echo $result['title']; ?></h4>
</div>
</div>
</div>
<?php } else {
 echo $result['body'];
}


}
?>

<div class="container">
<h3 class="title e_title">Our <span>Projects</span></h3>
	<div id="project_slider" class="our_project  owl-carousel owl-theme">
<?php 
foreach($rows as $result)
//echo "<pre>"; print_r($result);
{ ?>


		  <div class="item">
				<div class="proj_img">
				<?php print $result['field_image']; ?></div>
				<h3 class="our_pr_tit"><a href="<?php print $result['field_link']; ?>"><?php print $result['title']; ?></h3>
				<p><?php print $result['field_description']; ?></p>
				<a href="<?php print $result['field_link']; ?>" class="pro_view pro_vie_btn">View More</a>
		  </div>
<?php 
}
?>
 </div>
 </div>
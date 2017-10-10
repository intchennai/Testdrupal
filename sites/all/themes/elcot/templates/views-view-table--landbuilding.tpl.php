 <div class="left_column itparkspage inn-lft">
                              
<?php 
foreach($rows as $result1) { ?>
	
<h3 class="sub_tit2 mrbt-10"><?php echo $result1['field_land_and_building']; ?></h3>	
	
<?php break;
}
foreach($rows as $result)
{ 
?>       
								
	<ul class="ul-list arrow_list">
		<li><a href="<?php echo $result['field_file']; ?>"><?php echo $result['title']; ?></a></li>
		
	</ul>
 
<?php }
?>
         </div>
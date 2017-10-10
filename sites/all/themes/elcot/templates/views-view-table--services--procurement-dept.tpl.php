<?php global $base_url; ?>
 <ul>
<?php 

foreach($rows as $result)
{ 
print_r($result);
//$nodealias= drupal_get_path_alias('node/'.$result['nid']);

 if($result['field_file'] ==' ')
 { ?>
	 <li><a href="<?php echo $result['field_link'];?>" target= "_blank" ><?php echo $result['title'];?></a></li>
<?php  }	 
 else
 { ?>
	 <li><a href="<?php echo $result['field_file'];?>" target= "_blank"><?php echo $result['title'];?></a></li>
 <?php
 }


} 
?>
</ul>

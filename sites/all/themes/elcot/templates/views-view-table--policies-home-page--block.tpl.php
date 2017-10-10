<?php global $base_url; ?>

<ul class="ul-list arrow_list">		
<?php

$i=0;
foreach($rows as $result)

{
$nodealias= $base_url.'/'.drupal_get_path_alias('node/'.$result['nid']);
//print_r($result); 
if($result['field_link'] != '')	
{
?>
<li><a href="<?php echo $result['field_link'];?>"><?php echo $result['title'];?></a></li>
<?php
}else
{
?>
<li><a href="<?php echo $nodealias;?>"><?php echo $result['title'];?></a></li>
<?php
}
$i++;
}
?>
</ul>

 
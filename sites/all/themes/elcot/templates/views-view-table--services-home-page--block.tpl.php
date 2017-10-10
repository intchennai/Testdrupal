<?php global $base_url; ?>

<ul>
<?php

$i=0;
foreach($rows as $result)
{
//print_r($result);
if($result['field_link']!='')	
{
?>
<li><a href="<?php echo $result['field_link'];?>" target= "_blank" ><?php echo $result['title'];?></a></li>
<?php
}else
{
?>
<li><a href="<?php echo $result['field_file'];?>" target= "_blank" ><?php echo $result['title'];?></a></li>
<?php
}
//$i++;
}
?>
</ul>

 
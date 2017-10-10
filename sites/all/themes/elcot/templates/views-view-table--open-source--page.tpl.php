
<?php 
foreach($rows as $result)
{ 
echo $result ['body'];
 }
?>

<div class="row-fluid">
<ul class="img_list text-center ops_img pad-10 gal_line">              						
<?php 
$i=0; 
foreach($rows as $result1)
{ 
$img_src = Explode(',',$result1['field_image']);
$count = count($img_src);
if($count>0)
	{
	for($i=0;$count>$i;$i++)
		{  ?>
		 
		 <li><a href=""><img src="<?php echo $img_src [$i];?> "></a></li>
	<?php 	}
} } ?> 
	</ul>
                                 </div>

<?php 
$i=1;
foreach($rows as $result)
{  //echo "<pre>"; print_r($result); 

$img_src = EXPLODE(',',$result['field_file']);

  ?>

<?php echo $result['body'];  ?>
<ul class="ul-list doc_link"> 
<?php 
foreach($img_src as $img_src1)
{  if($img_src1!='') { ?>
	<li><a target='_blank' class='a_link_icon pdf_icon' href="<?php echo $img_src1; ?>">Download the file</a> </li>
<?php } 
} ?>
</ul>
<?php if($result['field_link'] !='') { ?>

<p>Click the link file (<a target="_blank" href="<?php echo $result['field_link'];?>" >www.elections.tn.gov.in</a>)</p>
       

<?php } }?>



<div class="row-fluid pad-10 tm_font_list_cnt_details">
<div class="row-fluid" id="keyboard">
<?php foreach($rows as $result)
{  //print_r($result);?>
	<h3 class="sub_tit2 bac-org mrbt-10"><?php echo $result['field_download_tamil_fonts'];?></h3>
<?php  break; }   ?>

<ul class="ul-list ul-arrow-li">
<?php  $i=0;
foreach($rows as $result)
{
//print_r($result);
 $doc = EXPLODE(',', $result['field_file']);
 $date = EXPLODE(',', $result['field_date']);
 $name = EXPLODE(',', $result['field_text']);
 
 $doc_count =count($doc); ?>
  <h3 class="sub_tit2 mrbt-10"><?php echo $result['title'];?></h3>
<?php  if($doc_count >0)
 {
 for($i=0;$doc_count>$i;$i++)
 { ?>

 <li><a href="<?php echo $doc[$i];?>"><?php echo $name[$i];?></a> - <?php echo $date[$i];?></li>
 
<?php  }

 }
 } ?>
</ul>
</div>
</div>








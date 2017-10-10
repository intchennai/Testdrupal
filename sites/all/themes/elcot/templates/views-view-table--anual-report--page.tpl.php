<?php 
foreach($rows as $result)
{  //echo "<pre>"; print_r($result);   ?>

<?php echo $result['body']; } ?>
<ul class="ul-list doc_link">
<?php foreach($rows as $result)
{ ?>

<li>
<a href="<?php echo $result['field_file'];?>" target="_blank" class="a_link_icon pdf_icon">Download the file</a>
 </li>       

 <?php } ?>
</ul>

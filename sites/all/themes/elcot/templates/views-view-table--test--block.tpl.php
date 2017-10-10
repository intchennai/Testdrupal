<ul class="ul-list doc_link"> 
<?php 
foreach($rows as $result)
{  
//print_r($result);
if($result['field_file'] !='') { ?>
	<li><a target='_blank' class='a_link_icon pdf_icon' href="<?php echo $result['field_file']; ?>">Download the file</a> </li>

<?php } } ?> 
</ul>


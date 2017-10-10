       
            

       
            

<?php  $i=0;
foreach($rows as $result)
{ //echo "<pre>"; print_r($result);  
$files = $result['field_file'];
$files_1 = explode (',',$files);
$pdfName = $result['field_pdf_name'];
$pdfName_1 = explode (',',$pdfName);
$link_count = count($files_1);


 ?>
 
  <div class="left_column itparkspage inn-lft">
    <h3 class="sub_tit2 mrbt-10 txt_up"><?php echo $result['title']; ?></h3>
        <ul class="ul-list arrow_list">
	<?php	if($link_count>0)
		   { 
				for($i=0;$link_count>$i;$i++)
				{ ?>
		
            <li> <a href="<?php echo $files_1[$i];?>"><?php echo $pdfName_1[$i];?></a></li> 
			<?php 
			}
			
		} ?>
			
			</ul>
			</div>
		<?php echo $result['body']; ?>
<?php } $i++;
?>
 
<?php global $base_url;?>

<div class="row-fluid pad-10 tender_d_page">
<div class="d_p_block row-fluid">
<?php  $i=1;  $j=1; foreach($rows as $result){  

$corrigendum =Explode(',',$result['field_corrigendum_pdf']);
$tender_notice =Explode(',',$result['field_file']);
?>
<div class="d_row row-fluid">

	

	   <div class="d_l">
		   <p>Tender Ref No</p>
	   </div>
	   <div class="d_r">
		   <p><?php print $result['title'];?></p>
	   </div>
   </div>

   <div class="d_row row-fluid">
	   <div class="d_l">
		   <p>Tender Description</p>
	   </div>
	   <div class="d_r">
		   <?php echo $result['body'];?>
	   </div>
    </div>
   <div class="d_row row-fluid">
  	   <div class="d_l">
		   <p>Last date for Submission</p>
	   </div>
	   <div class="d_r">
		   <p><?php echo $result['field_end_date'];?></p>
	   </div>
   </div>
   <div class="d_row row-fluid">
   
	   <div class="d_l">
		   <p>Opening Date / Time</p>
	   </div>
	   <div class="d_r">
		   <p><?php echo $result['field_start_date'];?></p>
	   </div>
   </div>
   <div class="d_row row-fluid">
 	   <div class="d_l">
		   <p>Last Date of Document Downloading / Sale</p>
	   </div>
	   <div class="d_r">
		   <p><?php echo $result['field_last_date_of_document_down'];?></p>
	   </div>
   </div>
    <div class="d_row row-fluid">
 	   <div class="d_l">
		   <p>Tender Notice</p>
	   </div>
	   <div class="d_r">
	   <?php foreach($tender_notice  as $tender_notice1)  {  
	   ?>
		   <a href="<?php echo $tender_notice1;?>" target="_blank" class="d_down_icon">Download and View the Notice<?php echo $i++; ?></a><br>
	   <?php } ?>
	   </div>
	      
   </div>
  
    <?php if($result['field_corrigendum_pdf']!=''){ 
	
	?>
	
   <div class="d_row row-fluid">
   
 	   <div class="d_l">
		   <p>Tender Corrigendum</p>
	   </div>
	   <div class="d_r">
	<?php    foreach($corrigendum as $corrigendum_doc)
{ ?>
	 <a href="<?php echo $corrigendum_doc;?>" class="d_down_icon">Download Tender Corrigendum<?php echo $j++; ?></a><br>
<?php } ?>
		  
	   </div>

   </div>
	<?php } ?>
	 

   <div class="d_row row-fluid">
 	   <div class="d_l">
		   <p>Tender Document</p>
	   </div>
	   <div class="d_r">
		   <a href="<?php echo $base_url;?>/tender-form/?tenderid=<?php echo $result['nid'];?>" class="d_down_icon">Download Tender Docment</a>
	   </div>
	     
   </div>
	<?php    } ?>
</div>
</div>



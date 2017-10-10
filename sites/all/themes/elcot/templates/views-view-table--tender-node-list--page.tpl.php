

<div class="row-fluid pad-10 tender_d_page">
<div class="d_p_block row-fluid">
<div class="d_row row-fluid">
<?php foreach($rows as $result){ ?>
	

	   <div class="d_l">
		   <p>Tender Ref No</p>
	   </div>
	   <div class="d_r">
		   <p><?php print $result['title'];?></p>
	   </div>
   </div>
 <?php  }  ?>
   <div class="d_row row-fluid">
   <?php foreach($rows as $result){ ?>
	   <div class="d_l">
		   <p>Tender Description</p>
	   </div>
	   <div class="d_r">
		   <?php echo $result['body'];?>
	   </div>
   <?php } ?>
   </div>
   <div class="d_row row-fluid">
    <?php foreach($rows as $result){ ?>
	   <div class="d_l">
		   <p>Last date for Submission</p>
	   </div>
	   <div class="d_r">
		   <p><?php echo $result['field_end_date'];?></p>
	   </div>
	      <?php } ?>
   </div>
   <div class="d_row row-fluid">
    <?php foreach($rows as $result){ ?>
	   <div class="d_l">
		   <p>Opening Date / Time</p>
	   </div>
	   <div class="d_r">
		   <p><?php echo $result['field_end_date'];?></p>
	   </div>
	   <?php } ?>
   </div>
   <div class="d_row row-fluid">
      <?php foreach($rows as $result){ ?>
	   <div class="d_l">
		   <p>Last Date of Document Downloading / Sale</p>
	   </div>
	   <div class="d_r">
		   <p><?php echo $result['field_last_date_of_document_down'];?></p>
	   </div>
	    <?php } ?>
   </div>
   
   <div class="d_row row-fluid">
   <?php foreach($rows as $result){ ?>
	   <div class="d_l">
		   <p>Tender Notice</p>
	   </div>
	   <div class="d_r">
		   <a href="<?php echo $result['field_file'];?>" class="d_down_icon">Download and View the Notice</a>
	   </div>
	      <?php  } ?>
   </div>
   <div class="d_row row-fluid">
    <?php foreach($rows as $result){ ?>
	   <div class="d_l">
		   <p>Tender Document</p>
	   </div>
	   <div class="d_r">
		   <a href="<?php echo $result['field_link'];?>" class="d_down_icon">Download Tender Docment</a>
	   </div>
	      <?php  } ?>
   </div>
</div>
</div>



<div class="event_ico row-fluid">
<?php foreach($rows as $result) { //print_r($result); 
$total_content = $result['body'];
 ?>
                                        <div class="event_icon">
                                            <img src="<?php echo $result['field_image'];?>">
                                        </div>
                                        <div class="event_cont">
                                            <h3 class="event_name"><?php echo $result['title'];?></h3>
                                           <p><span>*Connect*,</span> International Conference and Exhibition on Information and Communication Te... </p>
                                        
                                        </div>
                                    </div>
                                    <div class="event_date row-fluid">
                                        <p class="eventfd"><span class="fa fa-calendar-check-o"></span>From Date : <?php echo $result['field_start_date'];?></p>
                                        <p class="eventtd"><span class="fa fa-calendar-times-o"></span>To Date : <?php echo $result['field_end_date'];?></p>
                                    </div>
                                    
                                 <?php    } ?>
                                    </div>
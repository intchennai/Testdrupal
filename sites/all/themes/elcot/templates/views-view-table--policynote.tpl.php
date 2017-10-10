<?php 

foreach($rows as $result)
//echo "<pre>";print_r($result);

{ ?>

<li><a href="#" target="_blank"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php print $result['title'] ?></a></li>
                                      
<?php }
?>

 
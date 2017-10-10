<?php 
foreach($rows as $result)
{  //echo "<pre>"; print_r($result);   ?>

<h3 class="sub_tit2 mrbt-10 martp_15"><?php echo $result['title'] ?></h3>


<?php echo $result['body'] ?>

        
<?php }
?>

<?php
global $themes;
global $base_url;

?>


<div class="search_btn">
<img src="<?php print base_path().path_to_theme(); ?>/images/Google.png">
</div>
<div>
<script>
(function() {
var cx = '014440015053289166127:bldfkr5bxmq';
var gcse = document.createElement('script');
gcse.type = 'text/javascript';
gcse.async = true;
gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(gcse, s);
})();
</script>
<gcse:search></gcse:search>
</div>
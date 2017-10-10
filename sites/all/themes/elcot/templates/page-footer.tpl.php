<div class="e_footer_top">
	<div class="container">
		<ul class="e_foot_top_links">
		<?php
			$menu = menu_navigation_links('menu-footer-menu'); 
			print_r (theme('links__menu_footer_menu', 
			array('links' => $menu)));
		?>
		</ul>
	</div>
</div>

<div class="e_footer_copy">
	<p>Copyright &copy; 2016 - ELCOT</p>
</div>
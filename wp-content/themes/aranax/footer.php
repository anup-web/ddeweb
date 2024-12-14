<?php
// Set up the objects needed
$args = array(
	'post_type'	=>	'page'
);
												
$my_wp_query = new WP_Query();
					
$all_wp_pages = $my_wp_query->query($args);
?>					

<div class="footer grey-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<h4 class="footer-section-title">About</h4>
				<?php wp_nav_menu( array('menu' => 'Footer-About', 'menu_class' => 'list-unstyled' )); ?>
			</div>
				
			<div class="col-sm-2">
				<h4 class="footer-section-title">Admission</h4>
				<?php wp_nav_menu( array('menu' => 'Footer-Admission', 'menu_class' => 'list-unstyled' )); ?>
			</div>
				
			<div class="col-sm-2">
				<h4 class="footer-section-title">Quick Links</h4>
				<?php wp_nav_menu( array('menu' => 'Footer-Quick-Links', 'menu_class' => 'list-unstyled' )); ?>
			</div>
				
			<div class="col-sm-3">
				<h4 class="footer-section-title">Reach Us</h4>
				VIDYASAGAR BHAVAN<br> Directorate of Distance Education<br>  Golapbag<br>Burdwan, West Bengal, 713104<br>Phone: 0342-2657804, 2657912<br>Email: dde@buruniv.ac.in</div>
		</div>
	</div>	
</div>


<div class="footer dark-grey-bg">
	<div class="container">
		<div class="row copyright">
			<div class="col-sm-6">
				<p>Copyright &copy; 2016 Directorate of Distance Education, The Universtiy of Burdwan</p> 
			</div>
			<div class="col-sm-6">
				<p class="pull-right">
					Made with <i class="fa fa-heart"></i> by
					<a target="_blank" href="http://www.aranaxweb.com">Aranax Technologies</a>
				</p>
			</div>
		</div>
	</div>
</div>
    
<?php wp_footer(); ?>

</body>
</html>
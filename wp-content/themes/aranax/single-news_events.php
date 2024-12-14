<?php get_header(); ?>

	
<?php
 
add_filter( 'single_template', function( $template ) {
    global $post;
    if ( $post->post_type === 'news_events' ) {
        $locate_template = locate_template( "single-news_events.php" );
        if ( ! empty( $locate_template ) ) {
            $template = $locate_template;
        }
    }
    return $template;
} );
 
?>


<!-- Page Content -->
<div class="container">

	<!--<div class="row top-mrg-md btm-mrg-sm">
		<div class="col-sm-9 col-sm-offset-3">
			<h2 class="page-header"><?php echo $page_title; ?></h2>
		</div>
	</div>-->
	
	<div class="row top-mrg-xs btm-mrg-lg">
	
		<div class="col-sm-3 hidden-xs">
			<?php get_sidebar(); ?>	
		</div>
		
		<div class="col-sm-9">
			<div class="top-mrg-md btm-mrg-sm">		
			<h2 class="page-header-my"><?php the_title(); ?></h2>		
	        </div>
	        
	
	        
	       welcome
							
							
	        
	        
	        
	        
	        
	        
	        
	        
	        
			
		</div>	
		
	</div>
	

	
</div>

<?php get_footer(); ?>
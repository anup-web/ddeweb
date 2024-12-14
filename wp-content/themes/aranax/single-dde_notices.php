<?php get_header(); ?>

	
<?php

add_filter( 'single_template', function( $template ) {
    global $post;
    if ( $post->post_type === 'dde_notices' ) {
        $locate_template = locate_template( "single-dde_notices.php" );
        if ( ! empty( $locate_template ) ) {
            $template = $locate_template;
        }
    }
    return $template;
} );
 
?>


<!-- Page Content -->
<div class="container">	
	
	<div class="row top-mrg-xs btm-mrg-lg">
	
		<div class="col-sm-3 hidden-xs">
			<?php get_sidebar(); ?>	
		</div>
		
		<div class="col-sm-9">
			<div class="top-mrg-md btm-mrg-sm">		
			<h2 class="page-header-my"><?php the_title(); ?></h2>		
	        </div>
	        
	
	        
	       welcome notice
							
							
	        
	        
	        
	        
	        
	        
	        
	        
	        
			
		</div>	
		
	</div>
	

	
</div>

<?php get_footer(); ?>
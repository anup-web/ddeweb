<?php get_header(); ?>

	
<?php
 
add_filter( 'single_template', function( $template ) {
    global $post;
    if ( $post->post_type === 'study_centres' ) {
        $locate_template = locate_template( "single-study_centres.php" );
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
	        
	    <div class="row">
	    	<div class="col-md-12 col-sm-12">
	    		<div class="staff_img_em">
								<?php 
								$img = get_field('primary_images_em');
								?>
						<img class="img-responsive" src="<?php echo $img['sizes']['large'];?>">
							</div>		
				
	    	</div>
	    	
	    </div> 
	        
	   
		<div class="row">			
				 <div class="col-sm-6 col-xs-12">
                             <div class="inner-content_em">
                         
                              
                             <?php the_field('id'); ?>                                        
                              <br>
                              <?php the_field('code'); ?>                                                 
                              <br>
                              <?php the_field('address'); ?> , <?php the_field('city'); ?>
							  <br>
							  <?php the_field('state'); ?> , <?php the_field('pin_code'); ?>                                        <br>
							     <?php 
								 $field = get_field_object('phone_number');
								 echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
								 ?>                              
							  <br>
                                 <?php 
								 $field = get_field_object('e-mail_id');
								 echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
								 ?>	
								 
							   <br>
                                 <?php 
								 $field = get_field_object('centre_incharge');
								 echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
								 ?>	 
								 
								<br> 							 
								 <?php the_field('programs_em'); ?>
								 
								 
							</div>
					    	
					    	  </div>
			
			
			<div class="col-sm-6 col-xs-12">
				
			</div>
		</div>						
							
	        
	    <div class="row sec_img_coll">
	    	<div class="col-sm-3">
				<?php 
				$img = get_field('secondary_images');
				?>
				<img class="img-responsive" src="<?php echo $img['sizes']['large'];?>">
			</div>
	    	
	    	<div class="col-sm-3">
				<?php 
				$img = get_field('secondary_images_1');
				?>
				<img class="img-responsive" src="<?php echo $img['sizes']['large'];?>">
			</div>
			
			<div class="col-sm-3">
				<?php 
				$img = get_field('secondary_images_2');
				?>
				<img class="img-responsive" src="<?php echo $img['sizes']['large'];?>">
			</div>
			
			<div class="col-sm-3">
				<?php 
				$img = get_field('secondary_images_3');
				?>
				<img class="img-responsive" src="<?php echo $img['sizes']['large'];?>">
			</div>
	    </div>     
	        
	        
	        
	        
	        
	        
	        
			
		</div>	
		
	</div>
	

	
</div>

<?php get_footer(); ?>
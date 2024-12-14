<?php
/**
* Template Name: study_centres_details
*/
?>
<?php get_header(); ?>

<!-- Page Content -->
<div id="content">
	<div class="page">
		<div class="container">
			<!--<div class="row">
			<div class="col-sm-9 col-sm-offset-3">
			<h1 class="page-header"><?php //the_title(); ?></h1>
			</div>
			</div>-->
			
			<div class="row bottom-margin-sm">		
				<div class="col-sm-3 hidden-xs">
					<?php get_sidebar(); ?>	
				</div>
				
				<div class="col-sm-9">
					<div class="top-mrg-md btm-mrg-sm">		
			        <h2 class="page-header"><?php the_title(); ?></h2>		
	                </div>
					<?php
					$type = 'study_centres_details';
					$args=array(
						'post_type' => $type,
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'caller_get_posts'=> 1);

					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ){
						while($my_query->have_posts()) : $my_query->the_post(); 
						?>
					    
					    <div class="row">
					    	<div class="col-sm-6 col-xs-12 box">
                             <div class="inner-content">
                         
                              <?php the_field('name'); ?>
                              <br>
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
							  <br> 	 										                    <br>
                                <a href="<?php the_field('page_link'); ?>">Read this!</a>             

                              </div>
					    	
					    	  </div>
					    	
					    	
					    	
					    	
					    	
					    </div>   
					        
					
						<?php
						endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
					?>
				</div>
				
			</div><!-- /.row -->
		</div>	
	</div>	
</div>


<?php get_footer(); ?>
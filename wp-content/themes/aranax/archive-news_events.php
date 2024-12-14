<?php
/**
* Template Name: news_events
*/
?>
<?php get_header(); ?>

<!-- Page Content -->
<div id="content">
	<div class="page">
		<div class="container">
			
			
			<div class="row bottom-margin-sm">		
				<div class="col-sm-3 hidden-xs">
					<?php get_sidebar(); ?>	
				</div>
				
				<div class="col-sm-9">
					<div class="top-mrg-md btm-mrg-sm">		
			        <h2 class="page-header"><?php the_title(); ?></h2>		
	                 </div>
					<?php
					$type = 'news_events';
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
					       
					      <a href="<?php the_permalink();?>"><?php the_title(); ?></a> 
					       
					      </br>
					      <?php 
							$field = get_field_object('date_em');		
							echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
						  ?> 
						  
						  </br>
					      <?php 
							$field = get_field_object('time_em');		
							echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
						  ?>  
						  
					      </br>
					      <?php 
							$field = get_field_object('description_em');		
							echo '<b>' . $field['label'] . ':</b> ' . $field['value'];
						  ?>
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
<?php get_header(); ?>


<!-- Page Content -->

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	
			
<?php the_content(); ?>
			
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<!-- News/Events/Notices -->
<div class="container">
	<div class="row">
		
		<div class="col-sm-4">
			<div class="vertical-scroller-container">
				<h2 class="thin-section-title">News & Events</h2>
				<div class="vertical-scroller">
					<ul id="news-scroller">
					<?php query_posts('cat=3&orderby=ID&order=desc&posts_per_page=5'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li>
							<h3 class="news-section-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<h4 class="news-section-date"><?php echo date("M d, Y", strtotime(get_post_meta($post->ID, "Event_Date", true)));?></h4>
							<p class="news-section-content"><?php the_excerpt(); ?></p>
							<?php echo aranax_excerpt_more("Read more");?>
						</li>	
						<?php endwhile; else: ?>
							<li><?php _e('Sorry, no news & events found.'); ?></li>
						<?php endif; ?>	
						<?php wp_reset_query();?>
					</ul>
				</div>	
			</div>		
			<div class="pull-right"><a class="read-more" href="news-events">All News & Events <i class="fa fa-angle-double-right" aria-hidden="true"></i>
</a></div>
		</div>
		
		<div class="col-sm-4">
			<div class="vertical-scroller-container">
				<h2 class="thin-section-title">Notices</h2>
				<div class="vertical-scroller">
					<ul id="notice-scroller" >
						<?php query_posts('cat=4&orderby=ID&order=desc&posts_per_page=5'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<h3 class="news-section-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<h4 class="news-section-date"><?php echo date("M d, Y", strtotime(get_post_meta($post->ID, "Notice_Date", true)));?></h4>
								<p class="news-section-content"><?php the_excerpt(); ?></p>
								<?php echo aranax_excerpt_more("Read more");?>
							</li>
							<?php endwhile; else: ?>
								<li><p><?php _e('Sorry, no notices found.'); ?></p></li>
						<?php endif; ?>	
						<?php wp_reset_query();?>
					</ul>
				</div>	
			</div>	
			<div class="pull-right"><a class="read-more" href="notices">All Notices <i class="fa fa-angle-double-right" aria-hidden="true"></i>
</a></div>
		</div>	
		
		<div class="col-sm-4 login-section">
			<div class="study-center">View Our <a class="" href="study-centres">Authorised Study Centers</a></div>
			<a class="btn btn-success homepage-login-btn" href="http://localhost/budde/students/studentlogin">Student Login</a> <br><br>
			<a class="btn btn-primary homepage-login-btn" href="http://localhost/budde/users/login">Study Center/Staff Login</a>
		</div>	
		
	</div>
</div>	

<?php get_footer(); ?>


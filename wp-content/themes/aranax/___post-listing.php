<?php
/**
* Template Name: Custom Post List
*/
?>
<?php get_header(); ?>

<?php
	$category_name	=	"";
	$page_title		=	"";
	$custom_date	=	"";
	
	if( is_page( "news-events" )  ){
		$category_name	=	"3";
		$page_title		=	"News & Events";
		$custom_date	=	"Event_Date";
	}/*else if( is_page( "notices" )  ){
		$category_name	=	"4";
		$page_title		=	"Notices";
		$custom_date	=	"Notice_Date";
	}*/
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
			<h2 class="page-header"><?php the_title(); ?></h2>		
	        </div> 
			<?php query_posts('cat=' . $category_name); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<div class="notice-item">
					<div class="col-sm-1">
						<?php 
							$date	=	date("d-M-Y", strtotime(get_post_meta($post->ID, $custom_date, true))); 
							
							$event_date	=	explode("-", $date);
							
						?>
						<div class="date">
							<span class="day"><?php echo $event_date[0];?></span>
							<span class="month"><?php echo $event_date[1];?></span>
							<span class="year"><?php echo $event_date[2];?></span>
						</div>
					</div>
					
					<div class="col-sm-10 col-sm-offset-1 notice-item-content">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
						<?php echo aranax_excerpt_more("Read more");?>
					</div>
						
				</div>
			
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no data found.'); ?></p>
			<?php endif; ?>
		</div>	
	</div>
	

	
</div>

<?php get_footer(); ?>
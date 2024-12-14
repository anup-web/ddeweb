<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Directorate of Distance Education, The Universtiy of Burdwan is a leading university with distance mode education in and around the West Bengal, India." />
    <meta name="keywords" content="Directorate of Distance Education,Distance Education,Universtiy of Burdwan,Burdwan,Online,Admission,Result,Online Admission,Online Result,Post Graduate Admission,Post Graduate Result,B.Ed.,MBA,Management,Students">
    <meta name="author" content="Aranax Technologies Pvt Ltd">

    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

    <!-- CSS -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

</head>

<body>
	<?php 
		$header_id = "page-header";
		if ( is_front_page() ) {	
			 $header_id	=	"header";
		}
	?>
	<header id="<?php echo $header_id;?>">
		<nav class="main-nav" role="navigation">
			<div class="container">
				<div class="row">
						<div class="navbar-header">
							<a class="navbar-brand visible-xs" href="">
								<img src="<?php echo get_bloginfo('template_directory');?>/images/bu_logo90.png" alt="Directorate of Distance Education, The Universtiy of Burdwan" />
							</a>
							<h4 class="website-title pull-left visible-xs">Directorate of Distance Education<br>The Universtiy of Burdwan</h4>
							<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-main-collapse">
								<i class="fa fa-bars"></i>
							</button>
						</div>
						
						<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
							<?php
							/* Primary navigation */
							wp_nav_menu( array(
							    'menu'       => 'primary',
							    'depth'      => 2,
							    'container'  => false,
							    'menu_class' => 'nav navbar-nav',
							    'walker'     => new wp_bootstrap_navwalker())
							);
							?>
						</div><!-- /.navbar-collapse -->
						
				</div>
	        </div><!-- /.container -->
	        
	    </nav>
	</header><!--/header-->
						
	<div class="container hidden-xs">
		<div class="row university-logo">
			<div class="pull-left">
				<a class="navbar-brand" href="">
					<img src="<?php echo get_bloginfo('template_directory');?>/images/bu_logo90.png" alt="Directorate of Distance Education, The Universtiy of Burdwan" />
				</a>
			</div>	
			<div class="pull-right">
				<h1 class="website-title">Directorate of Distance Education<br>The Universtiy of Burdwan</h1>
			</div>	
		</div>
	</div>
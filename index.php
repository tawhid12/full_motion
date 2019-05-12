<!DOCTYPE HTML>
<?php get_header(); ?>
	<body id="top">

			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
				<section id="banner" data-video="images/banner">
					<div class="inner">
						<header>
							<h1><?php bloginfo('name'); ?></h1>
							<p><?php bloginfo('description'); ?></p>
						</header>
						<a href="#main" class="more">Learn More</a>
					</div>
				</section>

			<!-- Main -->
				<div id="main">
					<div class="inner">
						<?php get_template_part('templates/post_templates');?>
					</div>
				</div>

<?php get_footer(); ?>
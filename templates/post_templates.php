<?php /* Template Name: Example Template */ ?>

<!-- Boxes -->
<div class="thumbnails">
	<?php
		while(have_posts()){
			the_post();
	?>
	<div class="box">
		<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><?php  the_post_thumbnail('post-image')?></a>
		<div class="inner">
			<h3><?php the_title() ?></h3>
			<p><?php the_content() ?></p>
			<a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Watch</a>
		</div>
	</div>
	<?php
		}
	?>
	<!--<div class="box">
		<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="<?php echo get_template_directory_uri(); ?>/images/pic01.jpg" alt="" /></a>
		<div class="inner">
			<h3>Nascetur nunc varius commodo</h3>
			<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
			<a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Watch</a>
		</div>
	</div>

	<div class="box">
		<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="<?php echo get_template_directory_uri(); ?>/images/pic02.jpg" alt="" /></a>
		<div class="inner">
			<h3>Nascetur nunc varius commodo</h3>
			<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
			<a href="https://youtu.be/s6zR2T9vn2c" class="button style2 fit" data-poptrox="youtube,800x400">Watch</a>
		</div>
	</div>

	<div class="box">
		<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="<?php echo get_template_directory_uri(); ?>/images/pic03.jpg" alt="" /></a>
		<div class="inner">
			<h3>Nascetur nunc varius commodo</h3>
			<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
			<a href="https://youtu.be/s6zR2T9vn2c" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>
		</div>
	</div>

	<div class="box">
		<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="<?php echo get_template_directory_uri(); ?>/images/pic04.jpg" alt="" /></a>
		<div class="inner">
			<h3>Nascetur nunc varius commodo</h3>
			<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
			<a href="https://youtu.be/s6zR2T9vn2c" class="button style2 fit" data-poptrox="youtube,800x400">Watch</a>
		</div>
	</div>

	<div class="box">
		<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="<?php echo get_template_directory_uri(); ?>/images/pic05.jpg" alt="" /></a>
		<div class="inner">
			<h3>Nascetur nunc varius commodo</h3>
			<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
			<a href="https://youtu.be/s6zR2T9vn2c" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>
		</div>
	</div>

	<div class="box">
		<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="<?php echo get_template_directory_uri(); ?>/images/pic06.jpg" alt="" /></a>
		<div class="inner">
			<h3>Nascetur nunc varius commodo</h3>
			<p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
			<a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Watch</a>
		</div>
	</div>-->

</div>
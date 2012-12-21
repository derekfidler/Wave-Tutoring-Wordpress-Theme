<?php get_header(); ?>
<section role="main" class="grid clearfix">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class('grid_7 align-left') ?> id="post-<?php the_ID(); ?>">
			<header><hgroup role="heading"><h2>The Wave Difference:</h2><h3>High-Tech Private Tutoring</h3></hgroup></header>
			<div class="entry">
				<?php the_content(); ?>
			</div>
			<div id="action" class="clearfix">
				<a href="1-on-1-programs" class="btn green align-left">Our 1 on 1 Courses</a>
				<a href="enroll" class="btn orange align-right">Register for a Course</a>
			</div>

		</article>

		<article id="video" class="grid_8 align-right">
			<iframe width="480" height="320" src="http://www.youtube.com/embed/mArLyQLYhU8?rel=0" frameborder="0" allowfullscreen></iframe>
		</article>

	<?php endwhile; ?>

	<?php else : ?>

		<h2>Something's Gone Wrong!</h2>

	<?php endif; ?>

</section>

<section id="testimonial" class="grid">
	<img src="<?php bloginfo('template_directory'); ?>/_/img/z-yale.jpg" />
	<img src="<?php bloginfo('template_directory'); ?>/_/img/z-stanford.jpg" />
	<img src="<?php bloginfo('template_directory'); ?>/_/img/z-michigan.jpg" />
	<img src="<?php bloginfo('template_directory'); ?>/_/img/z-cal.jpg" />
	<img src="<?php bloginfo('template_directory'); ?>/_/img/z-ucla.jpg" />
</section>

<section id="callouts" class="grid clearfix">
<?php the_meta(); ?>
</section>
<?php get_footer(); ?>
<?php get_header(); ?>
<section role="main" class="grid clearfix">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class('grid_16 align-left') ?> id="post-<?php the_ID(); ?>">
			<header><hgroup role="heading"><h2><?php the_title(); ?></h2></hgroup></header>
			
			<div class="entry clearfix">
				<?php the_content(); ?>
				
			</div>
		</article>	
	<?php endwhile; ?>
	<?php endif; ?>
</section>

<?php get_footer(); ?>
<?php get_header(); ?>
<section role="main" class="grid clearfix">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class('grid_16 align-left') ?> id="post-<?php the_ID(); ?>">
			<header><hgroup role="heading"><h2><?php the_title(); ?></h2></hgroup></header>
			
			<div class="entry clearfix">
				<?php the_content(); ?>
				
			</div>

			<?php endwhile; ?>
			<?php endif; ?>
			<?php rewind_posts(); ?>

			<h2>Our Founders</h2>
			<?php query_posts('cat=7&order=ASC'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="entry clearfix bios">
				<div class="align-left"><?php the_post_thumbnail(); ?> </div>
				<div class="align-right"><h3><?php the_title(); ?></h3><?php the_content(); ?></div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>


		</article>
</section>

<?php get_footer(); ?>
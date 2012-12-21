<?php get_header(); ?>
<section role="main" class="grid clearfix">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class('grid_16 align-left') ?> id="post-<?php the_ID(); ?>">
			<header><hgroup role="heading"><h2><?php the_title(); ?></h2></hgroup></header>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php rewind_posts(); ?>
			
			<div class="entry clearfix">
				<nav>
				<?php query_posts('cat=5&order=ASC'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h4><?php the_title(); ?></h4>
				<?php endwhile; ?>
				<?php endif; ?>
				</nav>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="text">
				<?php the_content(); ?>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query();
					  wp_reset_postdata(); 
				?>
			</div>
			<div class="extra">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="align-left">
				<?php echo get_post_meta($post->ID, 'left', true); ?>
				</div>
				<div class="align-right">
				<?php echo get_post_meta($post->ID, 'right', true); ?>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</article>	

</section>

<?php get_footer(); ?>
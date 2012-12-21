<?php get_header(); ?>
<section role="main" class="grid clearfix">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class('grid_16 align-left') ?> id="post-<?php the_ID(); ?>">
			<header><hgroup role="heading"><h2><?php the_title(); ?></h2></hgroup></header>
			
			<?php endwhile; ?>
			<?php endif; ?>
			<?php rewind_posts(); ?>


			<?php query_posts('cat=6&order=ASC'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="entry clearfix">
				<span class="q">Q</span><em><?php the_title(); ?></em>
				<br/><br/>
				<span class="a">A</span> <?php the_content(); ?>
				
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</article>	
	
</section>

<?php get_footer(); ?>
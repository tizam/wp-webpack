<?php get_header(); ?>



<main role="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h2><?php the_title() ?> | <span><?php the_field('date') ?></span></h2>
						<?php the_content() ?>
					<?php endwhile;
				else : ?>
					<article>
						<p>Nothing to see.</p>
					</article>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-4">
				<?php dynamic_sidebar('new-widget-area') ?>
			</div>
		</div>
	</div>
</main>


<?php get_footer(); ?>
<?php get_header(); ?>


	<div class="single-building">
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h2 class="text-center"><?php the_title() ?></h2>
						<h3 class="photo-date text-center"><?php the_field('date') ?></h3>
						<h5 class="text-center mb-3">Photos de: <?php the_author() ?></h5>
						<div class="img-wrapper text-center">
							<?php the_post_thumbnail('medium') ?>
						</div>
						<hr />
						<?php the_content() ?>
					<?php endwhile;
				else : ?>
					<article>
						<p>Nothing to see.</p>
					</article>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-4 sidebar">
				<?php dynamic_sidebar('new-widget-area') ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
<?php get_header(); ?>



<main role="main">
	<div class="container">
		<div class="row mb-5">
			<div class="col-sm-12 col-md-12">
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
		</div>
	</div>
</main>


<?php get_footer(); ?>
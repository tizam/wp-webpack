<?php get_header(); ?>

<div class="search-result">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                    <?php the_excerpt(); ?>
                    <p class="card-text"><?php echo get_the_date() ?></p>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">Voir les details</a>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile;
else : ?>
    <article>
        <p>La recherche n'a rien trouver</p>
    </article>
<?php endif; ?>
<?php wp_pagenavi(); ?>
</div>


<?php get_footer(); ?>
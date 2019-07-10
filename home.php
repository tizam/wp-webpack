<?php get_header(); ?>

<div class="row">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="col">
            <div class="box text-center border rounded">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        </div>
    <?php endwhile; ?>
    <?php else : ?>
        <p>Pas d'informations pour le momement</p>
    <?php endif; ?>
    <?php wp_pagenavi(); ?>
</div>
<?php get_footer(); ?>
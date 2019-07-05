<?php get_header(); ?>
<?php
$args = [
    'post_type' => 'batiment',
    'posts_per_page' => 12,
];

$buildings = new WP_Query($args);
?>

<?php if (is_home() || is_front_page()) : ?>
    <div class="jumbotron">
        <h1 class="display-4"><?php bloginfo('title') ?></h1>
        <p class="lead">Un simple site web ou vous pouvez ajouter les photos des chantiers, afin de pouvoir suivre la progression.</p>
    </div>
<?php endif; ?>

<div class="card-deck mb-5">
    <?php if ($buildings->have_posts()) : while ($buildings->have_posts()) : $buildings->the_post(); ?>
            <div class="card text-center" style="width: 18rem;">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="<?php echo get_the_post_thumbnail_caption() ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_field('date') ?></p>
                    <a href="<?php echo get_the_permalink() ?>" class="btn btn-primary">Voir les détails</a>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <article>
            <p>Nothing to see.</p>
        </article>
    <?php endif; ?>
</div>
<a type="button" class="btn btn-primary btn-lg btn-block mb-3" href="/batiments">Voir tout les batiments</a>







<?php get_footer(); ?>
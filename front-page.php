<?php get_header(); ?>

<?php

$francais = get_field('francais') ?? '';
$arabe = get_field('arabe') ?? '';
?>

<div class="row mb-3">
    <div class="col-sm-12 col-md-6">
        <div class="card">
            <h5 class="card-header">Bienvenue</h5>
            <div class="card-body">
                <h5 class="card-title">Présentation</h5>
                <p class="card-text"><?= $francais; ?></p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="card arabe-text">
            <h5 class="card-header">مرحبا</h5>
            <div class="card-body">
                <h5 class="card-title">مقدمة</h5>
                <p class="card-text"><?= $arabe; ?></p>
            </div>
        </div>
    </div>
</div>
<hr />
<?php
$args = [
    'post_type' => 'batiment',
    'posts_per_page' => 12,
];

$buildings = new WP_Query($args);
?>

<div class="row">
    <h2 class="mb-3">Derniére photos ajoutée</h2>
    <div class="card-deck mb-5">
        <?php if ($buildings->have_posts()) : while ($buildings->have_posts()) : $buildings->the_post(); ?>
                <div class="col-sm-12 col-md-3">
                    <div class="card text-center mb-3">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="<?php echo get_the_post_thumbnail_caption() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_field('date') ?></p>
                            <a href="<?php echo get_the_permalink() ?>" class="btn btn-primary">Voir les détails</a>
                        </div>
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
</div>
<?php get_footer(); ?>
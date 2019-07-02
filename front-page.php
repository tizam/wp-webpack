<?php get_header(); ?>
<?php
$args = ['post_type' => 'batiment'];
$buildings = new WP_Query($args);
?>

<main role="main">
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4"><?php bloginfo('title') ?></h1>
            <p class="lead">Un simple site web ou vous pouvez ajouter les photos des chantiers, afin de pouvoir suivre la progression.</p>
        </div>
        <div class="card-deck">
            <?php if ($buildings->have_posts()) : while ($buildings->have_posts()) : $buildings->the_post(); ?>
                    <div class="card text-center" style="width: 18rem;">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="<?php echo get_the_post_thumbnail_caption() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php echo get_the_excerpt() ?></p>
                            <a href="<?php echo get_the_permalink() ?>" class="btn btn-primary">Voir les détails</a>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <article>
                    <p>Nothing to see.</p>
                </article>
            <?php endif; ?>
        </div>
    </div>
</main>


<?php get_footer(); ?>
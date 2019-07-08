<?php  

$cat = get_query_var('cat');
$entries = new WP_Query(['cat' => $cat]);

// var_dump($entries);

?>

<div class="row">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="col">
            <div class="box text-center border rounded">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
</div>
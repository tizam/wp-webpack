<?php get_header(); ?>
<?php

$categories = get_categories();

var_dump($categories);

?>

<div class="row">
    <?php foreach ($categories as $category) : ?>
    <?php $category_link = get_category_link($category->term_id); ?>
        <div class="col">
            <div class="box text-center border rounded">
                <h2><?php echo $category->name ?></h2>
                <a href="<?php echo esc_url($category_link); ?>">cat</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php get_footer(); ?>
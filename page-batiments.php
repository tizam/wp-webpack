<?php get_header(); ?>
<?php

$categories = get_categories(['orderby' => 'name', 'order' => 'ASC', 'parent' => 0]);


?>

<div class="row">
    <?php foreach ($categories as $category) : ?>
    <?php $category_link = get_category_link($category->term_id); ?>
        <div class="col">
            <div class="box text-center border rounded">
            <a href="<?php echo esc_url($category_link); ?>"><h2><?php echo $category->name ?></h2></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php get_footer(); ?>
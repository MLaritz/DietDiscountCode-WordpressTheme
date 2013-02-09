<?php get_header(); ?>

<!-- Section -->
<section id="content">

    <h1><?php echo sprintf(__('%s Search Results for ', 'html5blank'), $wp_query->found_posts); echo get_search_query(); ?></h1>

    <?php if (have_posts()) {
    while (have_posts()) : the_post();

        get_template_part('loop');

    endwhile;
} ?>

    <div id="pagination">
        <?php html5wp_pagination(); ?>
    </div>

</section>
<!-- /Section -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
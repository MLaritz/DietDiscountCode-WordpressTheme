<?php get_header(); ?>

<!-- Section -->
<section>

    <h1><?php _e('Archives', 'html5blank'); ?></h1>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php get_template_part('loop'); ?>

    <?php endwhile; ?>

    <?php else: ?>

    <!-- Article -->
    <article>

        <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

    </article>
    <!-- /Article -->

    <?php endif; ?>


    <!-- Pagination -->
    <div id="pagination">
        <?php html5wp_pagination(); ?>
    </div>
    <!-- /Pagination -->

</section>
<!-- /Section -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
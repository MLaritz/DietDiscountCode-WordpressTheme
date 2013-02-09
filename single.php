<?php get_header(); ?>

<!-- Section -->
<section id="content">

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

    <?php

    $cat = get_the_category($post->ID);
    $args = array(
        'cat' => $cat[0]->term_id,
        'posts_per_page' => 10,
        'post__not_in' => array($post->ID)
    );
    $q = new WP_Query($args);

    if ($q) {
        ?>
        <div class="h3">More Coupons From <?php echo $cat[0]->cat_name; ?></div>
<ul>
	<?php while ($q->have_posts()) : $q->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile;
        echo '</ul>';
    }

    comments_template( '', true ); // Remove if you don't want comments
    ?>

</section>
<!-- /Section -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
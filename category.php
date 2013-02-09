<?php get_header(); ?>

<section id="content">

        <?php $cat = single_cat_title('', false); ?>
        <h1 class="title"><?php echo $cat ?> Discount Codes</h1>
        <?php
        $count = 0;
//$the_trans = clpr_vote_transient();
        if (have_posts()) {
            while (have_posts()) : the_post();
                $count++;
                if ($count == 1) {
                    ?>
                    <?php get_template_part('loop', 'category'); ?>
                    <h2>About <?php echo $cat; ?></h2>
                    <?php if (((get_query_var('paged')) ? get_query_var('paged') : 1) == 1) { ?>
                        <div class="category-description">
                            <?php echo category_description(); ?>
                        </div>
                        <?php
                    }
                } else {
                    get_template_part('loop', 'category');
                }
            endwhile;
        }
        ?>


        <?php if (((get_query_var('paged')) ? get_query_var('paged') : 1) == 1) { ?>
        <div class="category-description">
            <?php $cat_id = get_query_var('cat');
            $tag_extra_fields = get_option(MY_CATEGORY_FIELDS); ?>
            <?php if (strlen($tag_extra_fields[$cat_id]['my_description']) > 0) { ?>
            <h3>Using <?php single_cat_title(); ?> Discount Codes</h3>
            <?php echo $tag_extra_fields[$cat_id]['my_description']; ?>
            <?php } ?>
        </div>
        <?php } ?>

        <?php
        if ($wp_query->max_num_pages > 1) : ?>
                <div class="nav-previous"><?php  $older = '&larr; Older ' . $cat . ' coupons';
                    next_posts_link($older); ?></div>
                <div class="nav-next"><?php $newer = 'Newer ' . $cat . ' coupons &rarr;';
                    previous_posts_link($newer); ?></div>
            <?php endif; ?>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
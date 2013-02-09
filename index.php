<?php get_header(); ?>

<section>
    <h2>The Newest Discount Codes and Coupons</h2>

    <div id="homepage">
        <div class="h3">Featured Diets</div>
        <div id="featured">
            <?php
            $category = get_term_by('name', 'Nutrisystem', 'category');
            $excludedCats = $category->term_id . '';
            $args = array(
                'posts_per_page' => 1,
                'cat' => $category->term_id
            );
            $q = new WP_Query($args);
            if ($q->have_posts()) {
                echo '<div class="featuredCoupon">';
                echo '<h3><a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>' . $category->name . ' Discount Code</a></h3>';
                $q->the_post();
                $customFields = get_post_custom();
                $code = $customFields['_coupon_code_code'][0];
                $link = $customFields['_coupon_code_link'][0];
                echo '<p class="coupon"><span>Code:</span> <a rel="nofollow" href="' . $link . '">' . 'CLICK HERE' . '</a></p>';
                echo '<a rel="nofollow" href="' . $link . '"><img src="/images/nutrisystem.gif" alt="Nutrisystem" /></a>';
                echo '<h4><a rel="nofollow" href="' . get_permalink() . '">' . get_the_title() . '</a></h4>';
                echo '</div>';
            }

            $category = get_term_by('name', 'Medifast', 'category');
            $excludedCats = $excludedCats . ',' . $category->term_id;
            $args = array(
                'posts_per_page' => 1,
                'cat' => $category->term_id
            );
            $q = new WP_Query($args);
            if ($q->have_posts()) {
                echo '<div class="featuredCoupon">';
                echo '<h3><a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>' . $category->name . ' Discount Code</a></h3>';
                //$post = reset($q);
                //setup_postdata($post);
                //while ($q->have_posts()) {
                $q->the_post();
                $customFields = get_post_custom();
                $code = $customFields['_coupon_code_code'][0];
                $link = $customFields['_coupon_code_link'][0];
                echo '<p class="coupon"><span>Code:</span> <a rel="nofollow" href="' . $link . '">' . 'CLICK HERE' . '</a></p>';
                echo '<a rel="nofollow" href="' . $link . '"><img src="/images/medifast.gif" alt="Medifast" /></a>';
                echo '<h4><a rel="nofollow" href="' . get_permalink() . '">' . get_the_title() . '</a></h4>';
                echo '</div>';
                //}
            } // if ($posts

            $category = get_term_by('name', 'eDiets', 'category');
            $excludedCats = $excludedCats . ',' . $category->term_id;
            $args = array(
                'posts_per_page' => 1,
                'cat' => $category->term_id
            );
            $q = new WP_Query($args);
            if ($q->have_posts()) {
                echo '<div class="featuredCoupon">';
                echo '<h3><a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>' . $category->name . ' Discount Code</a></h3>';
                //$post = reset($q);
                //setup_postdata($post);
                //while ($q->have_posts()) {
                $q->the_post();
                $customFields = get_post_custom();
                $code = $customFields['_coupon_code_code'][0];
                $link = $customFields['_coupon_code_link'][0];
                echo '<p class="coupon"><span>Code:</span> <a rel="nofollow" href="' . $link . '">' . 'CLICK HERE' . '</a></p>';
                echo '<a rel="nofollow" href="' . $link . '"><img src="/images/ediets.gif" alt="eDiets" /></a>';
                echo '<h4><a rel="nofollow" href="' . get_permalink() . '">' . get_the_title() . '</a></h4>';
                echo '</div>';
                //}
            } // if ($posts

            $category = get_term_by('name', 'Diet To Go', 'category');
            $excludedCats = $excludedCats . ',' . $category->term_id;
            $args = array(
                'posts_per_page' => 1,
                'cat' => $category->term_id
            );
            $q = new WP_Query($args);
            if ($q->have_posts()) {
                echo '<div class="featuredCoupon">';
                echo '<h3><a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>' . $category->name . ' Discount Code</a></h3>';
                //$post = reset($q);
                //setup_postdata($post);
                //while ($q->have_posts()) {
                $q->the_post();
                $customfields = get_post_custom();
                $code = $customfields['_coupon_code_code'][0];
                $link = $customfields['_coupon_code_link'][0];
                echo '<p class="coupon"><span>Code:</span> <a rel="nofollow" href="' . $link . '">' . 'CLICK HERE' . '</a></p>';
                echo '<a rel="nofollow" href="' . $link . '"><img src="/images/diet-to-go.gif" alt="Diet To Go" /></a>';
                echo '<h4><a rel="nofollow" href="' . get_permalink() . '">' . get_the_title() . '</a></h4>';
                echo '</div>';
                //}
            } // if ($posts

            echo '<div class="clear"></div>';
            $catargs = array('exclude' => $excludedCats);
            $categories = get_categories($catargs);
            ?>
        </div>
        <div class="h3" style="text-align: center">More Diets and Coupon Codes</div>
        <ul id="otherDiets">
            <?php
            foreach ($categories as $category) {

                echo '<li><a href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all posts in %s"), $category->name) . '" ' . '>' . $category->name . '</a></li>';
            }
            ?>
        </div>
    <section id="content">
    <div class="h3">Diet Discount Code</div>
    <p><em>Diet Discount Code</em> is here to provide you with the best coupons for all the popular online diets.
        It's
        our goal to help you save money when you go to sign up for a new diet. We search the internet for the best
        online diets, then we do our research to find the top money saving discounts in order to help you save the
        greatest amount of money possible.</p>

    <p>If you are looking at an online diet, or diet-related store, but you don't see any coupons on our site, feel
        free
        to contact us. We will be more than glad to help find a way for you to save some money. Finding coupons and
        discount codes is what we are good at, and we love helping people save money and lose weight.</p>

    <p>With the start of 2013 comes New Year's Resolutions to lose weight. <em>Diet Discount Code</em> is here to
        help
        with your 2013 resolutions by finding the top coupons to help you save money on your the diet program you
        choose
        to assist with your weight loss. We have all the top online diets, and they all win be trying to win your
        business by offering excellent coupon codes to lure in customers. </p>
    </div>
    </section>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
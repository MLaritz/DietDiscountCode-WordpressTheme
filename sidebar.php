<aside id="sidebar">

    <h3>Search for Coupons</h3>
    <?php get_template_part('searchform'); ?>


    <h3>Connect With Us</h3>

    <div id="socialIcons">
        <a rel="nofollow" href="http://twitter.com/DietDiscounts/"><span class="icon-twitter"></span></a>
        <a rel="nofollow" href="https://www.facebook.com/DietDiscountCode/"><span class="icon-facebook"></span></a>
        <a rel="nofollow" href="http://feeds.feedburner.com/DietDiscountCode"><span class="icon-feed"></span></a>
    </div>
    <div class="clear"></div>

    <?php if (!is_home()) { ?>

    <h3>Coupons</h3>

    <ul>
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
            echo '<li><a rel="nofollow" href="' . get_category_link($category->term_id) . '" title="' . sprintf(__("View all %s Discount Codes"), $category->name) . '" ' . '>' . $category->name . '</a> </li> ';
        }
        ?>
    </ul>

    <?php } ?>

    <h3>Subscribe to our Newsletter</h3>

    <p>Get the latest updates right in your inbox.</p>

    <form id="subscribe" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow"
          onsubmit="window.open('http://feedburner.google.com/fb/a/emailverifySubmit?uri=dietdiscountcode', 'popupwindow', 'scrollbars=yes,width=550,height=520'); return true">
            <span class="input"><input type="text" value="Enter your email address"
                                       onfocus="if (this.value == 'Enter your email address') {this.value = '';}"
                                       onblur="if (this.value == '') { this.value = 'Enter your email address'; }"
                                       name="email"/></span>
        <button type="submit"><span>Sign Up Now</span></button>
        <input type="hidden" value="dietdiscountcode" name="uri"/>
        <input type="hidden" value="News Subscribe" name="title"/>
    </form>

</aside>
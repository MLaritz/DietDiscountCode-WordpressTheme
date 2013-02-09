<?php
//$the_trans = clpr_vote_transient();
?>
<article itemscope itemtype="http://data-vocabulary.org/Review-aggregate"
         id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    $customfields = get_post_custom();
    $code = $customfields['_coupon_code_code'][0];
    $link = $customfields['_coupon_code_link'][0];
    ?>
    <a class="thumbnail" rel="nofollow" href="<?php echo $link ?>"
       title="<?php the_title_attribute(); ?>">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        }
        ?>
    </a>

    <h2><a itemprop="itemreviewed" href="<?php the_permalink() ?>"
           rel="bookmark"
           title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php //vote_box($post->ID, $the_trans); ?>
    <div class="excerpt">
        <?php if (!empty($code) && !empty($link)) { ?>
        <p class="coupon"><span>Code:</span> <a rel="nofollow"
                                                href="<?php echo $link;?>"><?php echo $code; ?></a>
        </p>
        <?php } ?>
        <?php the_content(); ?>
    </div>
    <div class="clear"></div>

</article>
<ul id="sidebarleft">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1)) : else : ?>
        <h2>Blog Lounge</h2>
        <ul>
            <li><a href="feed:<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss_feed.png" alt="Subscribe Now!" border="0" align="top" /></a></li>
            <li><a href="http://technorati.com/faves?add=<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/techno.png" alt="Add to Technorati Favorites!" border="0" align="top" /></a></li>
        </ul>
        <li id="categories"><?php _e('<h2>Categories</h2>'); ?>
            <ul>
                <?php wp_list_cats(''); ?>
            </ul>
        </li>

        <li id="archives"><?php _e('<h2>Archives</h2>'); ?>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </li>


    <?php endif; ?>
</ul>

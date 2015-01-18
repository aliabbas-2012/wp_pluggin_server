<ul id="sidebarleft">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1)) : else : ?>
        <li id="meta"><?php _e('<h2>Meta</h2>'); ?>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
                <?php wp_meta(); ?>
            </ul>
        </li>
    <?php endif; ?>
</ul>
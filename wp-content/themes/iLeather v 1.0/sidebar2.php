<ul id="sidebarright">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2)) : else : ?>

        <?php get_links_list(); ?>
        <li id="meta"><?php _e('<h2>Categories</h2>'); ?>
            <ul>
                <?php
                $args = array(
                    'type' => 'post',
                    'child_of' => 0,
                    'parent' => '',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => 1,
                    'hierarchical' => 1,
                    'exclude' => '',
                    'include' => '',
                    'number' => '',
                    'taxonomy' => 'category',
                    'pad_counts' => false);
                $categories = get_categories($args);


                foreach ($categories as $cat) {
                    
                    echo "<li>";
                    echo '<a href="' . get_category_link($cat->cat_ID) . '">';
                    echo $cat->name;
                    echo '</a>';
                    echo "</li>";
                }
                ?> 

            </ul>
        </li>
        <li id="meta"><?php _e('<h2>Pages</h2>'); ?>
            <ul>
                <?php
                $args = array(
                    'sort_order' => 'ASC',
                    'sort_column' => 'post_title',
                    'hierarchical' => 1,
                    'exclude' => '',
                    'include' => '',
                    'meta_key' => '',
                    'meta_value' => '',
                    'authors' => '',
                    'child_of' => 0,
                    'parent' => -1,
                    'exclude_tree' => '',
                    'number' => '',
                    'offset' => 0,
                    'post_type' => 'page',
                    'post_status' => 'publish'
                );
                $pages = get_pages($args);
               
                foreach ($pages as $page) {
                    echo "<li>";
                    echo '<a href="' . get_page_link($page->ID) . '">';
                    echo $page->post_title;
                    echo '</a>';
                    echo "</li>";
                }
                ?>

            </ul>
        </li>

        <li id="meta"><?php _e('<h2>Links</h2>'); ?>
            <ul class="">
                <li><a href="http://www.cosmetics.im" title="Skin Care, Cosmetics, Hair Care &amp; Fragrance" target="_blank">Cosmetics</a></li>
                <li><a href="http://www.cosmos22.com/fashion" title="Fashion Articles &amp; Interesting Information" target="_blank">Fashion Articles</a></li>
                <li><a href="http://www.fashioncyber.com" target="_blank">Fashion Cyber</a></li>
                <li><a href="http://www.garmentschannel.com" title="Garments and Apparel Shopping Online" target="_blank">Fashion Shopping</a></li>
                <li><a href="http://www.gems22.com" target="_blank">Jewelry Collection</a></li>
                <li><a href="http://feedburner.google.com/fb/a/mailverify?uri=pkgarment&amp;loc=en_US" title="Join Our Mailing List Here" target="_blank">Subscribe Newsletter</a></li>
                <li><a href="http://www.watches.im" title="Beautiful Branded Watches for both Ladies &amp; Gents" target="_blank">Watches</a></li>

            </ul>
        </li>
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
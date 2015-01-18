<?php get_header(); ?>
<div id="container">

    <div id="leftnav">
        <?php //get_sidebar(); ?>
        <?php include (TEMPLATEPATH . '/_sidebar_first.php'); ?>
    </div>
    <div id="rightnav">
        <?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
    </div>


    <div id="content">
        <?php
        $args = array(
            'post_type' => 'product',

        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : ?>

            <?php while ($query->have_posts()) : $query->the_post(); ?>

                <div class="post" id="post-<?php the_ID(); ?>">

                    <div class="date"><?php the_time('d') ?>
                        <?php the_time('M') ?> </div>
                    
                    <h3 class="posttitle"><a href="<?php echo post_permalink(get_the_ID()); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>


                    <div class="entry">
                        <?php
                        $attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image'));
                        foreach ($attachments as $attachment_id => $attachment) {
                            echo wp_get_attachment_image($attachment_id);
                            break;
                        }
                        ?>
                        <?php the_content('Continue Reading &raquo;'); ?>
                    </div>

                </div>
                <p class="postmetadata"><img src="<?php bloginfo('template_directory'); ?>/images/clock.png" alt="Filed" border="0" align="top" /> Posted in <?php the_category(', ') ?> by: <?php the_author() ?><?php edit_post_link('Edit', ' ', ''); ?> 
                    <img src="<?php bloginfo('template_directory'); ?>/images/comments.png" alt="Comments" border="0" align="top" /> 
                    <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>


            <?php endwhile; ?>

            <div class="navigation">
                <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
                <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
            </div>

        <?php else : ?>

            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>
            <?php include (TEMPLATEPATH . "/searchform.php"); ?>

        <?php endif; ?>
    </div>

    <?php get_footer(); ?>
</div>
</body>
</html>
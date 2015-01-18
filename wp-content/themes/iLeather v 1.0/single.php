<?php get_header(); ?>
<div id="container" class="clearfix">
    <div id="leftnav">
        <?php get_sidebar(); ?>
    </div>
    <div id="rightnav">
        <?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
    </div>
    <div id="content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



                <div class="post" id="post-<?php the_ID(); ?>">
                    <div class="date"> <?php the_time('d') ?>
                        <?php the_time('M') ?> </div>
                    <h3 class="posttitle"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h3>

                    <div class="entry">
                        <?php
                        $attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image'));
                        foreach ($attachments as $attachment_id => $attachment) {
                            echo wp_get_attachment_image($attachment_id);
                        }
                        ?>
                        <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                        `
                        <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
                    </div>
                </div>

                <p class="postmetadata alt">
                    <small>
                        <img src="<?php bloginfo('template_directory'); ?>/images/bullet.png" border="0" align="top" /> Posted

                        on 
                        <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
                    </small><small> under 
                        <?php the_category(', ') ?>
                        .</small> </p>
                <div class="navigation">
                    <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
                    <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
                </div>
                <div class="post">

                    <?php comments_template(); ?>

                    <?php
                endwhile;
            else:
                ?>

                <p>Sorry, No entries matched your criteria.</p>

            <?php endif; ?>

        </div>

    </div>

    <?php get_footer(); ?>
</div>
</body>
</html>
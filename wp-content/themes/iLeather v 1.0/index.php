<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ngalary.css" media="screen" type="text/css" />
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
        $attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image'));
        ?>
        <div id="entrytext">
            <div class="ngg-albumoverview">
                <?php
                foreach ($attachments as $attachment_id => $attachment):
                    ?>
                    <div class="ngg-album-compact">
                        <div class="ngg-album-compactbox">
                            <div class="ngg-album-link">
                                <a href="<?php echo get_permalink($attachment->post_parent); ?>" class="Link"><br>
                                    <?php echo wp_get_attachment_image($attachment_id); ?>
                                </a></div>
                            <p></p></div>
                        <h4>
                            <a href="<?php echo get_permalink($attachment->post_parent); ?>" ><br>
                                <?php echo get_the_title($attachment->post_parent) ?>
                            </a>
                        </h4>
                        <p></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>



    </div>

    <?php get_footer(); ?>
</div>
</body>
</html>
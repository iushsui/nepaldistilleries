<?php get_header() ?>

    <?php
        while (have_posts()):
            the_post(); 
    ?>

        <?php //the_content(); ?>

    <?php
        endwhile;

        if (have_rows('contents')) {
            while (have_rows('contents')) {
                the_row();
                get_template_part('/partials/flexible-content/' . get_row_layout());
            }
        }
    ?>

<?php get_footer(); ?>

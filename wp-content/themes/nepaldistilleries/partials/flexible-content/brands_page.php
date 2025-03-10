<div class="brand-posts">
    <?php
        // Query custom posts of type 'brand'
        $args = array(
            'post_type' => 'brand',
            'order_by' => 'decs',
            'posts_per_page' => -1 // Retrieve all posts
        );
        $brand_query = new WP_Query($args);

        // Loop through the posts
        if ($brand_query->have_posts()) :
            $counter = 0;
            while ($brand_query->have_posts()) : $brand_query->the_post();
            $counter++;
            $bg = ($counter % 2 == 0) ? 'dark-bg' : '';
            $white = ($counter % 2 == 0) ? 'white-vr' : '';
            $type = ($counter % 2 == 0) ? 'twelve' : 'two';
    ?>
            <div class="vcamp-text-block-twelve pt-100 pb-100 <?php echo $bg; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-6 col-lg-7">
                            <div class="text-wrapper">
                                <div class="title-style-nine <?php echo $white; ?> pb-45 lg-pb-30">
                                    <h2 class="title font-recoleta"><?php the_title(); ?></h2>
                                </div>
                                <p class="meta-info-text"><?php the_content(); ?></p>

                                <?php //if(get_field('accordion')): ?>

                                <div class="col-xl-12 col-lg-12 ms-auto" >
                                <?php
                                // Check if the ACF repeater field has rows
                                if (have_rows('accordion')): ?>
                                    <div class="accordion accordion-style-five md-mt-30" id="accordionOne">
                                        <?php
                                        $count = 0; // To create unique IDs
                                        while (have_rows('accordion')): the_row();
                                            $count++;
                                            $title = get_sub_field('title'); // Get the title
                                            $description = get_sub_field('description'); // Get the description
                                            $is_active = ($count === 1) ? 'show' : ''; // Make the first item open by default
                                            $aria_expanded = ($count === 1) ? 'true' : 'false';
                                            $collapsed_class = ($count === 1) ? '' : 'collapsed';
                                            ?>
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="heading<?php echo $count; ?>">
                                                    <button class="accordion-button <?php echo $collapsed_class; ?>" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse<?php echo $count; ?>" aria-expanded="<?php echo $aria_expanded; ?>" 
                                                            aria-controls="collapse<?php echo $count; ?>">
                                                        • <?php echo esc_html($title); ?>
                                                    </button>
                                                </div>
                                                <div id="collapse<?php echo $count; ?>" class="accordion-collapse collapse <?php echo $is_active; ?>" 
                                                    aria-labelledby="heading<?php echo $count; ?>" data-bs-parent="#accordionOne">
                                                    <div class="accordion-body">
                                                        <p><?php echo esc_html($description); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                                </div>

                                <?php //endif; ?>

                                <!-- <ul class="style-none">
                                    <li>XXX Rum  <span>purchase</span> your product, service and quis interact website due.</li>
                                    <li>Holds and catches their <span>attention</span> lorem.</li>
                                    <li>Diverts them to your brand.</li>
                                </ul> -->
                                <a href="contactV2.html" class="theme-btn-<?php echo $type; ?> outline mt-45 lg-mt-30">Consult with an exprt now!</a>
                            </div> <!-- /.text-wrapper -->
                        </div>
                    </div>
                </div>
                <div class="right-img-meta">
                <?php
                    // Check if the post has a featured image
                    if (has_post_thumbnail()) {
                        // Get the URL of the featured image
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    }
                ?>

                    <img src="<?php echo $featured_image_url; ?>" alt="" class="w-60 main-img">
                    <?php 
                        // Display featured image
                        // if (has_post_thumbnail()) {
                        //     echo get_the_post_thumbnail(get_the_ID());
                        // } 
                    ?>
                    <!-- <a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0" tabindex="0">
                        <img src="images/icon/icon_41.svg" alt="">
                    </a> -->
                </div> <!-- /.right-img-meta -->
            </div> <!-- /.vcamp-text-block-twelve -->
            <?php
        endwhile;
        wp_reset_postdata(); // Reset post data
    else :
        echo '<p>No brand posts found.</p>';
    endif;
    ?>
</div>


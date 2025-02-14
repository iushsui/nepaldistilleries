<!-- 
=============================================
    Feedback Section Fourteen
============================================== 
-->
<div class="feedback-section-fourteen" data-aos="fade-up"
style="background-image: url('<?php the_sub_field('background_image'); ?>');">
<div class="container">
    <div class="icon d-flex align-items-center justify-content-center mb-40 lg-mb-20"><img
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon_117.svg" alt="" class="icon"></div>
    <div class="row">
        <div class="col-xl-10 col-lg-9 m-auto">
            <div class="feedback_slider_nine">

                <?php 
                    if(have_rows('reviews')):
                        while(have_rows('reviews')):
                            the_row();
                ?>

                <div class="item">
                    <div class="testimonial-block-five text-center tran3s">
                        <p class="font-zen"><?php the_sub_field('message'); ?></p>
                        <h6><?php the_sub_field('name'); ?>, <span><?php the_sub_field('address'); ?></span></h6>
                    </div> <!-- /.testimonial-block-five -->
                </div>

                <?php 
                    endwhile;
                    endif;
                ?>

            </div> <!-- /.feedback_slider_nine -->
        </div>
    </div>
</div> <!-- /.container -->
<div class="rating-box">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape/shape_72.svg" alt="">
    <div class="rate font-zen"><?php the_sub_field('rating'); ?> <br><span>Rating</span></div>
</div>
</div> <!-- /.feedback-section-fourteen -->
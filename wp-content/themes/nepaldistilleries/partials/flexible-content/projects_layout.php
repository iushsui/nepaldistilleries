<!--
=====================================================
    Portfolio Gallery Nine
=====================================================
-->
<div class="portfolio-gallery-nine border-top mt-100 lg-mt-100 pt-100" data-aos="fade-up">
<div class="container">
    <div class="row align-items-center justify-content-between">
        <!-- <div class="col-xxl-5 col-xl-6 col-lg-5 col-md-7 col-sm-9"> -->
            <div class="title-style-thirteen text-sm-start">
                <h2 class="font-recoleta fw-bold text-center"><?php the_sub_field('heading'); ?></h2>
            </div> <!-- /.title-style-thirteen -->
        <!-- </div> -->
        <div class="col-md-5 col-sm-3 d-flex justify-content-center justify-content-sm-end">
            <ul class="slider-arrows d-flex style-none xs-mt-20">
                <li class="prev_btn2 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-left"></i></li>
                <li class="next_btn2 slick-arrow ripple-btn" style=""><i class="bi bi-arrow-right"></i></li>
            </ul>
        </div>
    </div>
</div>

<div class="portfolio-slider-five pt-80 lg-pt-40">
    <?php 
       if (have_rows('projects')):
        while (have_rows('projects')):
            the_row();

            $image = get_sub_field('image');
            $heading = get_sub_field('heading');
            // $description = get_sub_field('description');
            $url = get_sub_field('url');
    ?>
    <div class="item">
        <div class="gallery-item">
            <div class="img-holder position-relative">
                <img src="<?php echo $image; ?>" alt="" class="w-100">
                <div class="caption">
                    <a href="<?= $url; ?>" class="arrow tran3s"><i
                            class="bi bi-arrow-up-right"></i></a>
                    <h6><a href="portfolio-detailsV5.html" class="pj-title font-zen tran3s"><?php echo $heading; ?></a></h6>
                </div> <!-- /.caption -->
            </div> <!-- /.img-holder -->
        </div> <!-- /.gallery-item -->
    </div>

    <?php 
        endwhile;
        endif;
    ?>
    
</div>
</div> <!-- /.portfolio-gallery-nine -->
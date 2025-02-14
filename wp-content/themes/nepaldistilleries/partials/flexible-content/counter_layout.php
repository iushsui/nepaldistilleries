<!-- 
=============================================
    Vcamp Feature Section Fifteen
============================================== 
-->
<div class="vcamp-feature-section-fifteen mt-150 lg-mt-100 bg-light">
<div class="container">
    <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
            <div class="title-style-thirteen md-mb-20">
                <h2 class="title fw-bold"><?php the_sub_field('heading'); ?></h2>
            </div> <!-- /.title-style-thirteen -->
        </div>
        <div class="col-xxl-5 col-lg-6 ms-auto" data-aos="fade-left">
            <p class="sub-text"><?php the_sub_field('subheading'); ?></p>
            <a href="about-usV1.html" class="theme-btn-eighteen font-zen">More About us</a>
        </div>
    </div>

    <div class="inner-wrapper position-relative mt-80 lg-mt-50" data-aos="fade-up">
        <div class="row gx-0">
            <?php 
                if(have_rows('count')):
                    while(have_rows('count')):
                        the_row();
            ?>
            <div class="col-lg-4">
                <div class="card-style-fifteen text-center">
                    <div class="main-count font-zen"><span class="counter"><?php the_sub_field('number'); ?></span><?php the_sub_field('unit'); ?></div>
                    <h4 class="font-zen"><?php the_sub_field('title'); ?></h4>
                    <p><?php the_sub_field('short_description'); ?></p>
                    <a href="#" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
                </div> <!-- /.card-style-fifteen -->
            </div>
            <?php 
                endwhile;
                endif;
            ?>            
        </div>
    </div>
</div>
</div> <!-- /.vcamp-feature-section-fifteen -->

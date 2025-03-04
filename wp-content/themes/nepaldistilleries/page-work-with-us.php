<?php get_header(); ?>

<?php
    if (have_rows('contents')) {
        while (have_rows('contents')) {
            the_row();
            get_template_part('/partials/flexible-content/' . get_row_layout());
        }
    }
?>

<?php
    // if(have_rows()):
    //     while(have_rows()):
    //         the_row();
?>

<?php 
    //     endwhile;
    // endif;
?>

<!--
=====================================================
    Vcamp Feature Section Eight
=====================================================
-->
<div class="vcamp-feature-section-eight mt-80 lg-mt-100 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xxl-11 m-auto">

                <div class="row">

                    <?php
                        if(have_rows('why_with_us')):
                            while(have_rows('why_with_us')):
                                the_row();
                    ?>

                    <div class="col-lg-4 col-sm-6">
                        <div class="card-style-eight">
                            <div class="icon d-flex align-items-end"><?php the_sub_field('icon'); ?></div>
                            <h4><?php the_sub_field('title'); ?></h4>
                            <p><?php the_sub_field('description'); ?></p>
                        </div> <!-- /.card-style-eight -->
                    </div>                   

                    <?php 
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.vcamp-feature-section-eight -->

<!-- 
=============================================
    Vcamp Feature Section Three
============================================== 
-->
<div class="vcamp-feature-section-three bg-light mt-160 lg-mt-120 p0">
    <div class="container">

        <div class="row pt-100 pb-100">

            <?php
                if(have_rows('opportunities')):
                    while(have_rows('opportunities')):
                        the_row();
            ?>

            <div class="col-lg-4 col-sm-6">
                <div class="card-style-eight bg-white">
                    <h4><?php the_sub_field('title'); ?></h4>
                    <p><?php the_sub_field('description'); ?></p>
                    <a href="<?php the_sub_field('button_link'); ?>" class="theme-btn-eight ripple-btn"><?php the_sub_field('button_text'); ?></a>

                </div> <!-- /.card-style-eight -->
            </div>

            <?php 
                    endwhile;
                endif;
            ?>
        </div>

        
    </div>
</div> <!-- /.vcamp-feature-section-three -->



<div class="vcamp-feature-section-eight mt-80 lg-mt-100 pb-5">
    <div class="container">
        <div class="row">
            <h3 class="">Current Openings</h3>
            <div class="job pb-40 mt-50 border-bottom">
                <h4>Job title</h4>
                <p>Kathmandu | Full Time</p>
                <a href="#" class="theme-btn-eight ripple-btn">Apply Now</a>
            </div>

            <div class="job pb-50 mt-80 border-bottom">
                <h4>Job title</h4>
                <p>Kathmandu | Full Time</p>
                <a href="#" class="theme-btn-eight ripple-btn">Apply Now</a>
            </div>
        </div>
    </div>
</div>


<!--
=====================================================
    Vcamp Fancy Banner Seven
=====================================================
-->
<div class="fancy-banner-seven mt-40">
    <div class="container">
        <div class="inner-content position-relative">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-9 text-center text-lg-start">
                    <h3 class="font-recoleta">Don't See Your Perfect Role?</h3>
                    <p>We're always interested in talented individuals</p>
                </div>
                <div class="col-xl-4 col-lg-3 text-center text-lg-end">
                    <a href="contactV1.html" class="theme-btn-four ripple-btn">Submit Your CV</a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.fancy-banner-seven -->


<?php get_footer(); ?>
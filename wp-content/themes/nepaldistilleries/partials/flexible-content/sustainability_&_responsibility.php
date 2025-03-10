<!--
=====================================================
    Vcamp Feature Section Eight
=====================================================
-->
<div class="vcamp-feature-section-eight mt-200 lg-mt-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-11 m-auto">
                <div class="row align-items-center mb-80 lg-mb-20">
                    <div class="col-lg-5 col-md-6">
                        <!-- <div class="title-style-four"> -->
                            <h2 class="title font-recoleta"><?php the_sub_field('title'); ?></h2><br>
                            <p class="font-cinzel-rg"><?php the_sub_field('after_title'); ?></p>
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-5 col-md-6 ms-auto">
                        <p class="text-lg theme-mb-0 sm-mt-20"><?php the_sub_field('description'); ?></p>
                    </div>
                </div>

                <div class="row">
                    <?php 
                        if(have_rows('cards')):
                            while(have_rows('cards')):
                                the_row();
                    ?>
                    <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card-style-eight">
                            <div class="icon d-flex align-items-end justify-content-center"><span class="fs-1" style="color: #9e1c20;"><?php the_sub_field('icon'); ?></span></div>
                            <h4 class="text-center fw-bold"><?php the_sub_field('title'); ?></h4>
                            <p class="text-center font-cinzel-rg"><?php the_sub_field('after_title'); ?></p>
                            <p class="text-justify"><?php the_sub_field('description'); ?></p>
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
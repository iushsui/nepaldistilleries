<!-- 
=============================================
    Vcamp Feature Section Fourteen
============================================== 
-->
<div class="vcamp-feature-section-fourteen border-top  pt-100 lg-mt-120">
<div class="container">
    <div class="row">
        <div class="col-xl-4 col-lg-5" data-aos="fade-right">
            <div class="title-style-thirteen">
                <div class="upper-title"><?php the_sub_field('before_title'); ?></div>
                <h2 class="title fw-bold"><?php the_sub_field('title'); ?></h2>
            </div> <!-- /.title-style-thirteen -->
            <p class="pt-25 pb-30"><?php the_sub_field('after_title'); ?></p>
            <a href="<?php the_sub_field('button_url'); ?>" class="theme-btn-four ripple-btn"><?php the_sub_field("button_text"); ?></a>
        </div>
        <div class="col-lg-7 ms-auto md-mt-60">

               

            <?php 
               if( have_rows('services') ):

                // Loop through rows.
                while( have_rows('services') ) : the_row();
            
                    // Load sub field value.
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $url = get_sub_field('url');
            ?>
            
            <div class="card-style-fourteen d-md-flex align-items-center" data-aos="fade-up">
                <div class="icon"><img src="<?= $image; ?>" alt=""></div>
                <div class="title-wrapper">
                    <h4><a href="#"><?= $title; ?> .</a></h4>
                    <p>
                        <?= $description; ?>
                    </p>
                </div> <!-- /.title-wrapper -->
                <a href="<?php echo $url; ?>/service" class="arrow tran3s"><i class="bi bi-arrow-up-right"></i></a>
            </div> <!-- /.card-style-fourteen -->

            <?php 
               endwhile;
               endif;
            ?>

        </div>
    </div>
</div>
</div> <!-- /.vcamp-feature-section-fourteen -->
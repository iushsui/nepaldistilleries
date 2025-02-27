<!--
=====================================================
    Vcamp Feature Section Thirteen
=====================================================
-->
<div class="vcamp-feature-section-thirteen pt-200 lg-pt-120 pb-150 lg-pb-100 bg-light">
    <div class="container">
        <div class="row">
            <div class="row align-items-center mb-80 lg-mb-40">
                <div class="col-md-6">
                    <div class="title-style-thirteen">
                        <h2 class="title fw-bold"><?php the_sub_field('heading'); ?></h2><br>
                    <p class="theme-mb-0 sm-mt-20"><?php the_sub_field('sub_heading'); ?></p>

                    </div>
                </div>
                <div class="col-xl-5 col-md-6 ms-auto">
                    <p class="text-lg theme-mb-0 sm-mt-20">Our vision is to be recognized as a global leader in spirits, renowned for:</p>
                </div>
            </div>
            <div class="img-meta mb-60 lg-mb-40"><img src="images/media/img_91.jpg" alt=""></div>
            <?php 
                $one = get_sub_field('point_one');
                $two = get_sub_field('point_two');
                $three = get_sub_field('point_three');
            ?>
            <div class="row gx-xxl-5">
                <!-- <p class="text-center">Our vision is to be recognized as a global leader in spirits, renowned for:</p> -->
                <div class="col-md-4">
                    <div class="card-style-twelve text-center mt-20">
                        <div class="num">01</div>
                        <h4><?php echo $one['title']; ?></h4>
                        <p><?php echo $one['description']; ?></p>
                    </div> <!-- /.card-style-twelve -->
                </div>
                <div class="col-md-4">
                    <div class="card-style-twelve text-center mt-20">
                        <div class="num">02</div>
                        <h4><?php echo $two['title']; ?></h4>
                        <p><?php echo $two['description']; ?></p>
                    </div> <!-- /.card-style-twelve -->
                </div>
                <div class="col-md-4">
                    <div class="card-style-twelve text-center mt-20">
                        <div class="num">03</div>
                        <h4><?php echo $three['title']; ?></h4>
                        <p><?php echo $three['description']; ?></p>
                    </div> <!-- /.card-style-twelve -->
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.vcamp-feature-section-thirteen -->
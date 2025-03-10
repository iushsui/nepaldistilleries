		<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
            <div class="hero-banner-six">
                <div class="social-elemnet">
                    <ul class="style-none d-flex align-items-center">
                        <li><a href="#" class="tran3s text-white">Fb.</a></li>
                        <li><a href="#" class="tran3s text-white">Tw.</a></li>
                        <li><a href="#" class="tran3s text-white">Inst.</a></li>
                    </ul>
                </div>
                <!-- <div class="scroll-bar"><span>Scroll</span></div> -->
                <!-- <div class="shop-hero-slider-one "> -->
                <div id="heroCarousel" class="carousel slide shop-hero-slider-one " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php 
                        $isActive = true; // To set the first slide as active
                        while (have_rows('banners')):
                        the_row()
                        ?>

                        <div class="item bg-cover carousel-item <?php if ($isActive) { echo 'active'; $isActive = false; } ?>"   style="background-image: url('<?php the_sub_field('image')?>');">
                            <div class="container">
                                <div class="row align-items-end">
                                    <div class="col-xl-8 col-md-6">
                                        <div id="home-banner" class="product-text text-white">
                                            <h2 class="font-recoleta display-3 lh-base text-white"><?php the_sub_field('title');?>
                                            </h2>
                                            <p class="text-lg mb-50 lg-mb-30"><?php the_sub_field('sub_title');?>
                                            </p>
                                            <a href="<?php the_sub_field('button_url');?>" class="theme-btn-seven ripple-btn">SHOW
                                                NOW</a>
                                        </div> <!-- /.product-text -->
                                    </div>
                                </div>
                            </div>
                            <div class="section-no"><?php the_sub_field('section_number')?></div>
                        </div>
                        <?php endwhile;?>


                        <!-- Carousel Controls (Optional) -->
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> -->

                        <button class="slick-prev slick-arrow" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" style="color:white;">
                        </button>
                        <button class="slick-next slick-arrow" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" style="color:white;">
                        </button>

                    </div>
                </div> <!-- /.hero-banner-six -->
            </div>
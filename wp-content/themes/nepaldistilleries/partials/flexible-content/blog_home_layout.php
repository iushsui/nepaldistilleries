<?php //use function NextGenImage\getWebPHTML;  ?>
<!--
=====================================================
    Blog Section Seven
=====================================================
-->
<div class="blog-section-seven mb-110 lg-mt-80 mt-100">
    <div class="container">
        <div class="title-style-thirteen text-center pb-35 lg-pb-10" data-aos="fade-up">
            <h2 class="title fw-bold"><?php the_sub_field('heading'); ?></h2>
        </div> <!-- /.title-style-thirteen -->

        <div class="row gx-xl-5">

            <?php 
                $args = [
                    'post_type'         => 'blog',
                    'post_status'       => 'publish',
                    'posts_per_page'    => 2
                ];

                $query = new WP_Query( $args );

                if ($query->have_posts()) {
                    while ($query->have_posts()) :
                        $query->the_post();
            ?>

            <div class="col-sm-6" data-aos="fade-up">
                <article class="blog-meta-six mt-40">
                    <div class="img-meta position-relative">

                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="w-100">
                        <?php 
                            // $image = get_the_post_thumbnail_url();
                            // $image = getResizedImage( $image, [ 636, 424 ] );
                            
                            //     echo getWebPHTML( $image['webp'], $image['orig'], array(
                            //         'class' => 'w-100',
                            //         // 'loading' => 'lazy',
                            //         'alt'   => get_the_title( get_the_ID() )
                            //     ) );                   
                        ?>
                        <?php 
                            $terms = get_the_terms( $post->ID, 'blog-category' );
                            $term= [];
                            if ( !empty( $terms ) ){

                                foreach($terms as $term_key){
                                    array_push($term, $term_key->name);
                                }
                                $term_string = implode(", ", $term);
                            }
                        ?>

                        <a href="blog-detailsV3.html" class="tag"><?= $term_string;?></a>
                    </div>

                    

                    <div class="post-info"><?php if(!empty($term_string)): ?><?= $term_string;?> - <?php endif; ?><span class="date"><?php echo get_the_date(); ?></span></div>
                    <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                    <a href="<?php the_permalink(); ?>" class="read-more font-zen tran3s">Continue reading <i
                            class="fas fa-angle-right"></i></a>
                </article> <!-- /.blog-meta-six -->
            </div>

            <?php 
                endwhile;
                wp_reset_postdata();
                }
            ?>

            <!-- <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <article class="blog-meta-six mt-40">
                    <div class="img-meta position-relative">
                        <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/making-a-latte-in-a-coffee-shop.jpg" alt="" class="w-100">
                        <a href="blog-detailsV3.html" class="tag">MARKETING</a>
                    </div>
                    <div class="post-info"><span class="date">18 Jul 2022</span></div>
                    <a href="blog-detailsV3.html" class="title">Discount 20%, every transaction with credit card
                        or paypay</a>
                    <a href="blog-detailsV1.html" class="read-more font-zen tran3s">Continue reading <i
                            class="fas fa-angle-right"></i></a>
                </article>  -->
                <!-- /.blog-meta-six -->
            <!-- </div> -->

        </div>
    </div>
</div> <!-- /.blog-section-seven -->
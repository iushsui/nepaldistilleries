<?php get_header(); ?>
<!-- 
=============================================
    Inside Page Banner
============================================== 
-->
<div class="inside-hero-one hero-spacing">
    <div class="container">
        <h2 class="page-title font-recoleta">New & Events</h2>
        <p>Stay updated with the latest news, announcements, and events from The Nepal Distilleries.</p>
    </div>
</div> <!-- /.inside-hero-one -->

<!--
=====================================================
    Blog Section Four
=====================================================
-->
<div class="blog-section-four mt-160 mb-150 lg-mt-100 lg-mb-120">
    <div class="container">
        <div class="row gx-xl-5">
            <div class="col-lg-8">
                <div class="blog-meta-wrapper">

                    <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = [
                            'post_type'         => 'news-events',
                            'post_status'       => 'publish',
                            'paged'          	=> $paged,
                            'posts_per_page'    => 4
                        ];
    
                        $query = new WP_Query( $args );
        
                        if ($query->have_posts()) {
                            while ($query->have_posts()) :
                                $query->the_post();
                            
                            $author_id = get_the_author_meta( 'ID' );
                    ?>

                    <article class="blog-meta-four">
                        <div class="img-meta position-relative">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="w-100">

                            <?php 
                                $terms = get_the_terms( $post->ID, 'news-events-category' );
                                $term= [];
                                if ( !empty( $terms ) ){

                                    foreach($terms as $term_key){
                                        array_push($term, $term_key->name);
                                        $slug = $term_key->slug;
                                    }
                                    $term_string = implode(", ", $term);
                                }
                            ?>

                            <a href="<?php echo home_url(); ?>/news-events-category/<?= $slug; ?>" class="tag"><?= $term_string;?></a>
                        </div>

                        <div class="post-info"><?php if(!empty($term_string)): ?><?= $term_string;?> - <?php endif; ?><span class="date"><?php echo get_the_date(); ?></span></div>
                        <a href="<?php the_permalink(); ?>" class="title">
                            <?php //if(has_excerpt()){ ?>
                                <?php //the_excerpt(); ?>
                            <?php //}else{ ?>
                                <?php 
                                    // $content = get_the_content();
                                    // $content = strip_tags($content);
                                    // echo substr($content, 0, 50); 
                                ?>
                                <!-- ... -->
                            <?php //} ?>
                            <?php the_title(); ?>
                        </a>
                        <div class="post-footer d-flex align-items-center justify-content-between">
                            <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/blog/logo_07.png" alt="" class="logo"> -->
                            <a href="<?php the_permalink(); ?>" class="read-more tran3s"><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon/icon_16.svg" alt=""></a>
                        </div>
                    </article> <!-- /.blog-meta-four -->

                    <?php 
                        endwhile;
                        wp_reset_postdata();
                        }
                    ?>
                </div> <!-- /.blog-meta-wrapper -->

                <?php my_pagination(); ?>
                
            </div>

            <div class="col-lg-4 col-md-8">
                <div class="blog-sidebar md-mt-80">
                    <div class="blog-sidebar-search mb-60">
                        <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                            <input type="text" name="s" placeholder="Search.." />
                            <input type="hidden" name="post_type" value="news-events" /> <!-- // hidden 'players' value -->
                            <button><i class="bi bi-search"></i></button>
                        </form>
                    </div> <!-- /.blog-sidebar-search -->
                    <div class="blog-sidebar-category mb-80 md-mb-50">
                        <h4 class="sidebar-title">Category</h4>
                        <ul class="style-none">

                            <?php
                                $taxonomy = 'news-events-category';
                                $tax_terms = get_terms($taxonomy);
                            ?>

                            <?php
                                foreach ($tax_terms as $tax_term) {
                                echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'<span> ('. $tax_term->count. ')</span></a></li>';
                                }
                            ?> 

                        </ul>
                    </div> <!-- /.blog-sidebar-category -->

                    <div class="sidebar-banner-add"
                        style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog/add-bg.jpg);">
                        <div class="banner-content">
                            <h4>Banner Advertise <br>Heading</h4>
                            <p>From its medieval origins digital</p>
                            <a href="#" class="ripple-btn">Download</a>
                        </div>
                    </div> <!-- /.sidebar-banner-add -->
                </div> <!-- /.blog-sidebar -->
            </div>
        </div>
    </div>
</div> <!-- /.blog-section-four -->

<?php get_footer(); ?>
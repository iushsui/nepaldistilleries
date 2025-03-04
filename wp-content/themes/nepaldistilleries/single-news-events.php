<?php get_header(); ?>

<!-- 
=============================================
    Inside Page Banner
============================================== 
-->
<div class="inside-hero-seven">
    <div class="bg-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-10 col-lg-7">
                    <h2 class="blog-heading-two"><?php the_title(); ?></h2>
                </div>
            </div>
            <?php 
                $terms = get_the_terms( $post->ID, 'news-events-category' );
                $term= [];
                if ( !empty( $terms ) ){

                    foreach($terms as $term_key){
                        array_push($term, $term_key->name);
                    }
                    $term_string = implode(", ", $term);
                }
            ?>
            <p class="blog-pubish-date"><?= $term_string; ?> . <?php echo get_the_date(); ?> . </p>
        </div>
    </div> <!-- /.bg-wrapper -->
    <div class="container">
        <nav class="blog-breadcrumb mt-60 md-mt-20">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>/news-events/">News & Events</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $term_string; ?></li>
            </ol>
        </nav>
    </div>
</div> <!-- /.inside-hero-seven -->



<!--
=====================================================
    Blog Details One
=====================================================
-->
<div class="blog-details-one mt-70 mb-150 lg-mt-60 lg-mb-100">
    <div class="container">
        <div class="row gx-xl-5">
            <div class="col-lg-8">
                <div class="blog-meta-wrapper pe-xxl-5">
                    <article class="blog-details-content">
                        <!-- <p>Tomfoolery crikey bits and bobs brilliant bamboozled down the pub amongst brolly hanky panky, cack bonnet arse over tit burke bugger all mate bodge. cillum dolore eu fugiat  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Suspendisse interdum consectetur libero id faucibu nisl. Lacus vel facilisis volutpat est velit egestas.</p>
                        <p>Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum. Sit amet ris nullam eget felis. Enim praesent elementum facilisis leo. Ultricies leo integer.</p>
                        <img src="<?php //echo get_template_directory_uri(  ); ?>/assets/images/blog/blog_img_20.jpg" alt="" class="image-meta w-100">
                        <h4>This response is important for our ability to from mistakes but it alsogives rise to self-criticism.</h4>
                        <p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in  future The same is true as we experienc the emotional of stress from our instances. We are quickly learn to fear and thus automatically. Lorem ipsum dolor sit amet, consectetur adipis elit quis extraction labore.</p>
                        <h2>Work Harder & Gain Succsess</h2>
                        <p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in quis elit future. The same Duis aute irure dolor in reprehenderit .</p>
                        <p>is true as we experience the emotional sensation of stress from our firs social rejec ridicule.We quickly learn to fear and thus automatically. potentially stressful situation of wlir ext quiert all kinds, including the most common of all.</p> -->
                        <?php the_content(); ?>
                        <div class="bottom-widget d-sm-flex align-items-center justify-content-between">
                            <ul class="d-flex tags style-none pb-20">
                                <li>Tag:</li>
                                <?php 
                                    $tags = get_tags(array(
                                        'hide_empty' => false
                                    ));
                                    
                                    $tagList = array();
                                    foreach ($tags as $tag) {
                                        $tagList[] = '<li><a href="#">' . $tag->name . '</a></li>';
                                    }
                                    echo implode(',&nbsp', $tagList);      
                                ?>
                                <!-- <li><a href="#">business</a>,</li>
                                <li><a href="#">makreting</a>,</li>
                                <li><a href="#">tips</a></li> -->
                            </ul>
                            <ul class="d-flex share-icon align-items-center style-none pb-20">
                                <li>Share:</li>
                                <li><a href="#"><i class="bi bi-google"></i></a></li>
                                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                            </ul>
                        </div> <!-- /.bottom-widget -->
                    </article> <!-- /.blog-details-content -->

                    <!-- <div class="blog-comment-area">

                        <?php 
                            // $post_id = get_the_ID(); // Get the current post ID
                            // $comments_number = get_comments_number($post_id); // Get the number of comments for the post
                        ?>
                        <h3 class="blog-inner-title pb-15"><?php //echo $comments_number; ?> Comments</h3>
                        <div class="comment d-flex">
                            <img src="images/blog/avatar_01.jpg" alt="" class="user-avatar">
                            <div class="comment-text">
                                <div class="name">Al Hasani</div>
                                <div class="date">13 June, 2018, 7:30pm</div>
                                <p>One touch of a red-hot stove is usually all we need to avoid that kind of lorem discomfort in future. The same true we experience </p>
                                <a href="#" class="reply-btn">Reply</a>
                            </div> /.comment-text
                        </div> /.comment
                        <div class="comment d-flex">
                            <img src="images/blog/avatar_02.jpg" alt="" class="user-avatar">
                            <div class="comment-text">
                                <div class="name">Rashed ka.</div>
                                <div class="date">13 June, 2018, 7:30pm</div>
                                <p>One touch of a red-hot stove is usually all we need to avoid that kind of lorem discomfort in future. The same true we experience </p>
                                <a href="#" class="reply-btn">Reply</a>
                            </div> /.comment-text
                        </div> /.comment
                    </div> /.blog-comment-area

                    <div class="blog-comment-form">
                        <h3 class="blog-inner-title">Leave A Comment</h3>
                        <p>Sign in to post your comment or signup if you dont have any account.</p>
                        <form action="#" class="mt-50 lg-mt-30">
                            <div class="input-wrapper mb-25">
                                <label>Name*</label>
                                <input type="text" placeholder="Rashed Kabir">
                            </div> /.input-wrapper
                            <div class="input-wrapper mb-40">
                                <label>Email*</label>
                                <input type="email" placeholder="rshdkabir@gmail.com">
                            </div> /.input-wrapper
                            <div class="input-wrapper mb-30">
                                <textarea placeholder="Your Comment"></textarea>
                            </div> /.input-wrapper
                            <a href="#" class="theme-btn-one ripple-btn">Post Comment</a>
                        </form>
                    </div> /.blog-comment-form -->
                </div> <!-- /.blog-meta-wrapper -->
             </div>

            <div class="col-lg-4 col-md-8">
                <div class="blog-sidebar md-mt-80">
                    <div class="blog-sidebar-search mb-60">
                        <form action="#">
                            <input type="text" placeholder="Search..">
                            <button><i class="bi bi-search"></i></button>
                        </form>
                    </div> <!-- /.blog-sidebar-search -->
                    <div class="blog-sidebar-category mb-80 md-mb-50">
                        <h4 class="sidebar-title">Category</h4>
                        <!-- <ul class="style-none">
                            <li><a href="blogV2.html">Digital (3)</a></li>
                            <li><a href="blogV3.html">Marketing (4)</a></li>
                            <li><a href="blogV4.html">Design (2)</a></li>
                            <li><a href="blogV1.html">WordPress (8)</a></li>
                            <li><a href="blogV2.html">Plugin (5)</a></li>
                        </ul> -->
                        <ul class="style-none">
                        <?php 
                            $terms = get_terms( array(
                                'taxonomy' => 'news-events-category',
                                'hide_empty' => false,
                            ));

                            if ( !empty($terms) && !is_wp_error($terms) ) {
                                foreach($terms as $term) {
                                    echo '<li><a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . ' (' . $term->count . ')</a></li>';
                                }
                            } else {
                                echo '<li>No categories found.</li>';
                            }
                        ?>

                        </ul> 
                    </div> <!-- /.blog-sidebar-category -->

                    <!-- <div class="sidebar-banner-add" style="background-image:url(images/blog/add-bg.jpg);">
                        <div class="banner-content">
                            <h4>Banner Advertise <br>Heading</h4>
                            <p>From its medieval origins digital</p>
                            <a href="#" class="ripple-btn">Download</a>
                        </div>
                    </div> /.sidebar-banner-add -->
                </div> <!-- /.blog-sidebar -->
            </div>
        </div>
    </div>
</div> <!-- /.blog-details-one -->

<?php get_footer(); ?>
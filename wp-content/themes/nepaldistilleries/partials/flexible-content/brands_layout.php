<?php $social = get_field('social', 'option'); ?>
<!-- 
=============================================
    Theme Hero Banner
============================================== 
-->
<div class="hero-banner-eight">
    <!-- <div class="social-elemnet">
        <ul class="style-none d-flex align-items-center">
            <li><a href="<?//= $social['facebook']; ?>" target="_blank" class="tran3s">Fb.</a></li>
            <li><a href="<?//= $social['twitter']; ?>" target="_blank" class="tran3s">Tw.</a></li>
            <li><a href="<?//= $social['instagram']; ?>" target="_blank" class="tran3s">Inst.</a></li>
        </ul>
    </div> -->
    <div class="scroll-bar"></div>
    
    <?php 
        if(have_rows('brands')):
            $counter = 0; // Initialize counter
            while(have_rows('brands')):
                the_row();
                $counter++; // Increment counter each loop iteration
                $alignment = ($counter % 2 == 0) ? 'text-right' : 'text-left bg-light'; // Determine alignment based on even or odd count
    ?>
    <div id="brand<?php echo $counter; ?>" class="banner-content h-100 d-md-flex align-items-center justify-content-between <?php echo $alignment; ?>">
        <?php if($counter % 2 == 0): ?>
            <div class="img-wrapper position-relative" data-aos="fade-right">
                <img src="<?php the_sub_field('image'); ?>" alt="">
            </div>
            <div class="text-wrapper"  data-aos="fade-left">
                <h2 class="title fw-bold"><?php the_sub_field('title'); ?></h2>
                <p class="hero-sub-heading text-lg"><?php the_sub_field('description'); ?></p>
                <a href="<?php the_sub_field('button_link'); ?>" class="theme-btn-four ripple-btn">Find Our more</a>
                <!-- <p class="term-text">Already a member? <a href="sign-in.html">Sign in.</a></p> -->
            </div> <!-- /.text-wrapper -->
        <?php else: ?>
            <div class="text-wrapper" data-aos="fade-right">
                <h2 class="title fw-bold"><?php the_sub_field('title'); ?></h2>
                <p class="hero-sub-heading text-lg"><?php the_sub_field('description'); ?></p>
                <a href="<?php the_sub_field('button_link'); ?>" class="theme-btn-four ripple-btn">Find Our more</a>
                <!-- <p class="term-text">Already a member? <a href="sign-in.html">Sign in.</a></p> -->
            </div> <!-- /.text-wrapper -->
            <div class="img-wrapper position-relative" data-aos="fade-left">
                <img src="<?php the_sub_field('image'); ?>" alt="">
            </div>
        <?php endif; ?>
    </div> <!-- /.banner-content -->
    <?php 
            endwhile;
        endif;
    ?>

</div>
<!-- 
=============================================
    Team Section Five
============================================== 
-->
<div class="team-section-five border-top mt-130 md-mt-100 pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="row align-items-center mb-80 lg-mb-20">
                <div class="col-lg-5 col-md-6">
                    <div class="title-style-four">
                        <h2 class="title"><?php the_sub_field('title'); ?></h2><br>
                        <p><?php the_sub_field('after_title'); ?></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 ms-auto">
                    <p class="theme-mb-0 sm-mt-20"><?php the_sub_field('description'); ?></p>
                </div>
            </div>
            <?php
                if(have_rows('cards')):
                    while(have_rows('cards')):
                        the_row();
            ?>
            <div class="col-lg-3 col-sm-6">
                <div class="team-block-four text-center mt-40">
                    <div class="img-meta"><img src="<?php the_sub_field('image'); ?>" alt="" class="w-100"></div>
                    <p><?php the_sub_field('designation'); ?></p>
                    <h4 class="name"><?php the_sub_field('name'); ?></h4>
                </div> <!-- /.team-block-four -->
            </div>
            <?php 
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div> <!-- /.team-section-five -->
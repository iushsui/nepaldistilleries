<!--
=====================================================
    Vcamp Fancy Banner Two
=====================================================
-->
<div class="container">
<div class="fancy-banner-ten mt-140 lg-mt-100" data-aos="fade-up"
    style="background-image:url('<?php the_sub_field('cover_image'); ?>')">
    <div class="inner-content h-100 position-relative d-flex align-items-center justify-content-center">
        <?php 
			$video = get_sub_field('video_link', false, false); 
            $video = array_shift(explode('&', $video));
				// var_dump($video);
		?>
        <a class="fancybox video-icon d-flex align-items-center justify-content-center" data-fancybox=""
            href="<?= $video ?>" tabindex="0">
            <i class="bi bi-play-fill"></i>
        </a>
    </div> <!-- /.inner-content -->
</div>
</div> <!-- /.fancy-banner-ten -->
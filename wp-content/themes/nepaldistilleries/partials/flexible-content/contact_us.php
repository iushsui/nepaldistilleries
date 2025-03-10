<!-- 
=============================================
    Contact Section Six
============================================== 
-->

<?php $contact_details = get_field('footer', 'option'); ?>

<div class="contact-section-six mt-160 mb-50 lg-mt-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="form-style-three ps-0 sm-pb-80">
                    <form action="inc/contact.php" id="contact-form" data-toggle="validator">
                        <div class="messages"></div>
                        <div class="row controls">
                            <!-- <div class="col-12">
                                <div class="input-group-meta form-group mb-25">
                                    <label>Name*</label>
                                    <input type="text" placeholder="Rashed Kabir" name="name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-25">
                                    <label>Email*</label>
                                    <input type="email" placeholder="rshdkabir@gmail.com" name="email" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-40">
                                    <label>Select Service*</label>
                                    <select class="theme-select-menu" placeholder="Choose a Service...." name="category" required="required">
                                        <option value="">Choose a Service....</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                        <option value="Website Design">Website Design</option>
                                        <option value="WordPress">WordPress</option>
                                        <option value="Web Analytics">Web Analytics</option>
                                        <option value="Web Programming">Web Programming</option>
                                        <option value="Infographic Design">Infographic Design</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-35">
                                    <textarea placeholder="Your message*" name="message" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12"><button class="theme-btn-one ripple-btn w-100">Send Message</button></div> -->
                        </div>
                    </form>
                    <?php echo do_shortcode('[contact-form-7 id="00a623d" title="Contact form 1"]') ?>

                </div> <!-- /.form-style-three -->
            </div>
            <div class="col-lg-5 col-md-6 ms-auto">
                <div class="address-block-three d-flex mb-80 lg-mb-40">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_17.svg" alt=""></div>
                    <div class="text">
                        <h5 class="title fw-bold">Our Address</h5>
                        <p><?php echo $contact_details['address']; ?></p>
                    </div>
                </div> <!-- /.address-block-three -->
                <div class="address-block-three d-flex mb-80 lg-mb-40">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_18.svg" alt=""></div>
                    <div class="text">
                        <h5 class="title fw-bold">Contact Info</h5>
                        <p>Open a chat or give us call at <br><a href="tel:<?php echo $contact_details['phone_number']; ?>" class="call"><?php echo $contact_details['phone_number']; ?></a></p>
                    </div>
                </div> <!-- /.address-block-three -->
                <div class="address-block-three d-flex">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_19.svg" alt=""></div>
                    <div class="text">
                        <h5 class="title fw-bold">Live Support</h5>
                        <p>Urgent go to live chat portal  <br><a href="#" class="webaddress"><?php echo $contact_details['email']; ?></a></p>
                    </div>
                </div> <!-- /.address-block-three -->
            </div>
        </div>
    </div>

    <div class="map-area-one mt-150 lg-mt-100">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe src="<?php echo $contact_details['map']; ?>" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div> <!-- /.contact-section-six -->
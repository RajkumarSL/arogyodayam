<!-- Start: Header Slider
    ============================= -->
    <header>
        <div class="row">
            <div class="col-md-12">
                <div class="header-slider">
					<?php 
					foreach($get_slider as $row_slider)
					{
					?>
					<div class="header-single-slider">
                        <figure>
                            <img src="<?php echo base_url(); ?>uploads/slider/<?php echo $row_slider->slider; ?>" alt="">
                            <!-- <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-left">
                                        <h3>Welcome To Hantus Spa</h3>
                                        <h1>Beauty & Spa Wellness</h1>
                                        <p>The Spa at Sun Valley is a serene oasis amid all the exciting  activities our iconic valley has delivered for decades.</p>
                                        <a href="#" class="boxed-btn">Make an Appoinment</a>
                                    </div>
                                </div>
                            </figcaption> -->
                        </figure>
                    </div>
					<?php
					}
					?>
                    
                </div>
            </div>
        </div>
    </header>

    <!-- End: Header Slider
    ============================= -->

    <!-- Start: Contact
    ============================= -->

    <section id="contact">
        <div class="container contact-wrapper text-center text-xl-left">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-6 single-contact">
                    <img src="<?php echo base_url(); ?>assets/img/icons/icon01.png" alt="">
                    <h4>Opening Time</h4>
                    <p><?php echo $settings->opening_days; ?> : <?php echo $settings->opening_times; ?></p>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6 single-contact">
                    <img src="<?php echo base_url(); ?>assets/img/icons/icon02.png" alt="">
                    <h4>Address</h4>
                    <p><?php echo $settings->address_one; ?>, <?php echo $settings->address_two; ?>, <br> <?php echo $settings->city; ?>, <?php echo $settings->state; ?> – <?php echo $settings->zipcode; ?></p>
                </div>
                <div class="col-xl-4 offset-xl-0 col-md-6 col-sm-6 offset-sm-3 single-contact">
                    <img src="<?php echo base_url(); ?>assets/img/icons/icon03.png" alt="">
                    <h4>Telephone</h4>
                    <p><?php echo $settings->contact_one; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Contact
    ============================= -->


    <!-- Start: Our Service
    ============================= -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12 text-center">
                    <div class="section-title">
                        <h2>Our Treatments</h2>
                        <hr>
                        <p>These are the services we provide, these makes us stand apart.</p>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php 
					foreach($get_ourtreatments as $row_ot)
					{
				?>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-5 mb-lg-0">                    
                    <div class="service-box text-center">                        
                        <figure>
                            <img src="<?php echo base_url(); ?>uploads/our_treatments/<?php echo $row_ot->images; ?>" alt="" style="border-radius: 50%;">
                        </figure>
                        <h4><?php echo $row_ot->title; ?></h4>
                        <p><?php echo substr($row_ot->description, 0, 100).'...'; ?></p>
                    </div>
                </div>
				<?php					
					}
				?>
            </div>
			<p>&nbsp;</p>
			<div class="row">
				<div class="col-md-12" style="text-align:center">
					<a href="<?php echo base_url(); ?>home/our_treatments" class="btn btn-success" style="background-color: #F5E807;border-color: #f5e804;color:#000;font-weight: 400;">View More Treatments <i class="fas fa-angle-double-right"></i></a>
				</div>
			</div>
        </div>
    </section>


    <!-- End: Portfolio
    ============================= -->

    <!-- Start: Feature
    ============================= -->
    <section id="feature" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12 text-center">
                    <div class="section-title">
                        <h2>AROGYODYAM AYURVEDA</h2>
                        <hr>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-5 mb-lg-0">                    
                    <div class="feature-box text-center">                        
                        <div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uGoGyuLZyEA"></iframe>
					  </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- End:  Our Feature
    ============================= -->


    <!-- Start: Pricing
    ============================= -->


    <!-- End:  Fun Fact
    ============================= -->


    <!-- Start: Our Product
    ============================= -->
    
    <section id="product" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12 text-center">
                    <div class="section-title">
                        <h2>Our Product</h2>
                        <hr>
                        <p>We are using only the high quality original product</p>
                    </div>
                </div>                
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-carousel">
                        <?php 
                        foreach($get_our_products as $row)
                        {
                        ?>
                        <div class="single-product text-center">
                            <div class="product-img">
                                <img src="<?php echo base_url(); ?>uploads/our_products/<?php echo $row->image; ?>" alt="" style="height:210px">
                            </div>
                            <h5><?php echo $row->name; ?></h5>
                            <div class="price">&nbsp;</div>

                            <div class="overlay">
                                <ul class="icons">
                                    <li><a href="#"><i class="ei ei-icon_bag_alt"></i></a></li>
                                    <li><a href="<?php echo base_url(); ?>uploads/our_products/<?php echo $row->image; ?>" class="mfp-popup"><i class="fas fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="text-align:center">
                    <a href="<?php echo base_url(); ?>testimonials" class="btn btn-success" style="background-color: #F5E807;border-color: #f5e804;color:#000;font-weight: 400;">View More Products <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Our Product
    ============================= -->


    <!-- Start: Testimonial
    ============================= -->
    
    <section id="testimonial" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel text-center">
						<?php 
							foreach($get_testimonials as $row_tm)
							{
						?>
                        <div class="single-testimonial">
							<h3><?php echo $row_tm->title; ?></h3>
                            <p><?php echo substr($row_tm->description, 0, 150).'...'; ?></p>
                            <h5 class="title"><?php echo $row_tm->author; ?></h5>
                        </div>
						<?php 
							}
						?>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
			<div class="row">
				<div class="col-md-12" style="text-align:center">
					<a href="<?php echo base_url(); ?>testimonials" class="btn btn-success" style="background-color: #F5E807;border-color: #f5e804;color:#000;font-weight: 400;">View More Testimonials <i class="fas fa-angle-double-right"></i></a>
				</div>
			</div>
        </div>
    </section>

    <!-- End: Testimonial
    ============================= -->

    <!-- Start: Expert Beauticians
    ============================= -->
    
    <section id="beauticians" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12 text-center">
                    <div class="section-title">
                        <h2>OUR TEAM</h2>
                        <hr>
                        <p>DOCTORS</p>
                    </div>
                </div>                
            </div>

            <div class="row">
				<?php 
				foreach($get_ourteams as $row_oteams)
				{
				?>
					<div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-lg-0">
						<div class="single-beauticians">
							<div class="img-wrapper">
								<img src="<?php echo base_url(); ?>uploads/our_teams/<?php echo $row_oteams->images; ?>" alt="">
								<div class="beautician-footer-text">
									<h5><?php echo $row_oteams->title; ?></h5>
									<p><?php echo $row_oteams->position; ?></p>
								</div>
							</div>
							<div class="beautician-content">
								<div class="inner-content">
									<h5><?php echo $row_oteams->title; ?></h5>
									<p class="title"><?php echo $row_oteams->position; ?></p>
									<p><?php echo substr($row_oteams->description, 0, 100).'...'; ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
            </div>
			<p>&nbsp;</p>
			<div class="row">
				<div class="col-md-12" style="text-align:center">
					<a href="<?php echo base_url(); ?>home/our_teams" class="btn btn-success" style="background-color: #F5E807;border-color: #f5e804;color:#000;font-weight: 400;">View More Teams <i class="fas fa-angle-double-right"></i></a>
				</div>
			</div>
        </div>
    </section>

    <!-- End: Expert Beauticians
    ============================= -->

    <!-- Start: Appoinment
    ============================= -->
    

    <!-- End: Appoinment
    ============================= -->


    <!-- Start: Our partner
    ============================= -->

    <!-- End: Our Partner
    ============================= -->


    <!-- Start: Subscribe
    ============================= -->
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 text-lg-left text-center mb-lg-0 mb-3">
                    <i class="ei ei-icon_mail"></i>
                    <h3>SIGN UP FOR NEWS AND OFFRERS</h3>
                    <p>Subcribe to lastest smartphones news & great deals we offer</p>
                </div>
                <div class="col-lg-5 col-md-12 text-center">
                    <form id="subscribe-form" action="#" method="POST">
                        <input type="email" name="email" id="subscribe-mail" placeholder="Email" required>
                        <button>Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Subscribe
    ============================= -->
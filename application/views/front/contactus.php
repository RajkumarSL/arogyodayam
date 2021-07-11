<section id="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Contact Us</h2>
				<ul class="breadcrumb-nav list-inline">
					<li ><a href="<?php echo base_url(); ?>">Home</a></li>
					<li >Contact Us</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="contact" class="section-padding" style="padding:80px 0 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contact-form" >

					<div class="col-lg-12" style="padding:0px">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2771.2802942207227!2d76.65091256511137!3d10.79735502877444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba86f7a3f9bf7e1%3A0xa5062bdb3eb46093!2sArogyodayam%20Ayurveda%20Hospital!5e0!3m2!1sen!2sin!4v1587309366781!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
                    <form action="<?php echo base_url(); ?>sendmail/contactus" method="post">
                        <?php
                            if($this->session->flashdata('item')) {
                            $message = $this->session->flashdata('item');
                            ?>
                            <div class="<?php echo $message['class'] ?>" style="color:white; border:1px solid green;background-color:green;margin-bottom:15px;" id="msg"><?php echo $message['message']; ?>

                            </div>
                            <?php
                            }
                        ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input placeholder="Name" id="name" class="form-control" name="name" type="text" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input placeholder="Email" id="email" class="form-control" name="email" type="text" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input placeholder="Phone No" id="phoneno" class="form-control" name="phoneno" type="text" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="6" id="message" name="message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="boxed-btn" value="Send Message" name="submit_mail" style="color: #fff!important;">
                    </form>
                </div>
                <div class="col-lg-6 contact-info mt-5 mt-lg-0">
                    <h2 style="font-size: 30px;">Contact Information</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                    <div class="info-box mt-4">
                        <i class="fas fa-map-marker"></i>
                        <h4>Address </h4>
                        <p><?php echo $settings->address_one; ?>, <?php echo $settings->address_two; ?>,<br><?php echo $settings->city; ?>, <?php echo $settings->state; ?>, <?php echo $settings->country; ?> - <?php echo $settings->zipcode; ?> 
						</p>
                    </div>
					<div class="info-box mt-4">
                        <p><b>Landline No : </b><?php echo $settings->contact_one; ?></p>
                        <p><b>Mobile No : </b>+91 94978 49821 &nbsp; <b> | &nbsp; </b> +91 7025651753</p>
                    </div>
                    <div class="info-box">
                        <i class="fas fa-clock"></i>
                        <h4>Opening Hours:</h4>
                        <p><?php echo $settings->opening_days; ?> : <?php echo $settings->opening_times; ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
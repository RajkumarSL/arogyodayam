<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/settings/favicon/<?php echo $settings->favicon; ?>" type="image/x-icon" />
    <title>AROGYODAYAM : The Rise of Good Health</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	    <!-- Scripts -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.shuffle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.meanmenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    
    <!-- Custom Script -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    
    <!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+91 9447532252", // WhatsApp number
            call_to_action: "Live chat", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
</head>

<body>

 <!-- Start: Preloader
    ============================= -->

    <!--div class="preloader">        
        <div class="wrapper">
            <div class="circle circle-1"></div>
            <div class="circle circle-1a"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
        <h1>Loading&hellip;</h1>
    </div-->

    <!-- End: Preloader
    ============================= -->

    <!-- Start: Header Top
    ============================= -->
    <section id="header-top">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center text-md-left">
                    <p><i class="fas fa-clock"></i>Opening Hours - <?php echo $settings->opening_times; ?></p>
                    <ul class="header-social d-inline-block">
                        <li><a href="<?php echo $settings->social_facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $settings->social_twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?php echo $settings->social_linkedin; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="<?php echo $settings->social_instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    
                </div>
                <div class="col-lg-6 col-md-6 text-center text-md-right header-top-right">
                    <ul>
                        <li><a href="#"><i class="fas fa-envelope"></i><?php echo $settings->email_one; ?></a></li>
                        <li><a href="#"><i class="fas fa-phone"></i><?php echo $settings->contact_one; ?></a></li>
                    </ul>       
                </div>
            </div>
        </div>
    </section>
    <!-- End: Header Top
    ============================= -->
    
    <!-- Start: Sidenav
    ============================= -->

    <span class="cart-overlay"></span>

    <!-- End: Sidenav
    ============================= -->

    <!-- Start: Navigation
    ============================= -->
    <section class="navbar-wrapper">
        <div class="navbar-area sticky-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-6">
                        <div class="logo main">
                            <a href="<?php echo base_url(); ?>"><img class="responsive" src="<?php echo base_url(); ?>uploads/settings/logo/<?php echo $settings->logo; ?>" alt="Startkit" style="max-width: 215px;padding:3px 0px 0px 0px;"></a>
							<p style="width: 215px;text-align: center;font-size: 13px;">An ISO 9001:2008 Company</p>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul>
                                <li class="<?php if($this->uri->segment(1) == ""){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li class="<?php if($this->uri->segment(1) == "aboutus"){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?>aboutus">About Us</a>
                                </li>
								<li>
                                    <a href="#">Establishment</a>
                                </li>
								<li>
                                    <a href="#">Articles</a>
                                </li>
								<li class="<?php if($this->uri->segment(1) == "testimonials"){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?>testimonials">Testimonials</a>
                                </li>

                                <li class="<?php if($this->uri->segment(1) == "gallery"){ echo "active"; } ?>"><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
                                <li class="<?php if($this->uri->segment(1) == "contactus"){ echo "active"; } ?>"><a href="<?php echo base_url(); ?>contactus">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    
                </div>
            </div>
            <!-- Start Mobile Menu -->
            <div class="mobile-menu-area d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav class="mobile-menu-active">
                                    <ul>
                                        <li class="<?php if($this->uri->segment(1) == ""){ echo "active"; } ?>">
                                            <a href="<?php echo base_url(); ?>">Home</a>
                                        </li>
                                        <li class="<?php if($this->uri->segment(1) == "aboutus"){ echo "active"; } ?>">
											<a href="<?php echo base_url(); ?>aboutus">About Us</a>
										</li>
										<li>
											<a href="#">Establishment</a>
										</li>
										<li>
											<a href="#">Articles</a>
										</li>
										<li class="<?php if($this->uri->segment(1) == "testimonials"){ echo "active"; } ?>">
											<a href="<?php echo base_url(); ?>testimonials">Testimonials</a>
										</li>

                                        <li class="<?php if($this->uri->segment(1) == "gallery"){ echo "active"; } ?>"><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
										<li class="<?php if($this->uri->segment(1) == "contactus"){ echo "active"; } ?>"><a href="<?php echo base_url(); ?>contactus">Contact</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mobile Menu -->
        </div>        
    </section>
    <!-- End: Navigation
    ============================= -->
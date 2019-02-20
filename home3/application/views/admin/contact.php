   <head>
     <link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet" type="text/css" /> 
</head>
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(<?php echo base_url();?>assets/vendor/img/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Contact Us</h5>
                            <h2>Keep in touch</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form id="" action="<?php echo base_url('contact/contactpost');?>" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="name" type="text" placeholder="Your name" required>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" placeholder="Email" required>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="subject" type="text" placeholder="Subject" required>
                                        </div> <!-- singel form --> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="phone" type="text" placeholder="Phone" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea name="messege" placeholder="Messege" required></textarea>
                                        </div> <!-- singel form -->
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" class="main-btn">Send</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-address mt-30">
                        <ul>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>1Plot No. 177, Sri Vani Nilayam, 1st floor, Beside Sri Chaitanya High School, Sardar Patel Nagar, Opp Nizampet X-Road, Hyderabad,Telangana - 500072</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>040-48541273</p>
                                      
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@psaaket.com</p>
                                        <p>support@psaaket.com</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                    <div class="map mt-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15221.050281280799!2d78.388458!3d17.494975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe33ae6c3ea74c04e!2sPrachaTech+Software+Solutions!5e0!3m2!1sen!2sin!4v1549259275474" width="100%" height="215" frameborder="0" style="border:0; border-radius: 5px;" allowfullscreen></iframe>
                    </div> <!-- map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PART ENDS ======-->
   
<?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
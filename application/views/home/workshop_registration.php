<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PSAAKET | <?php echo $pageTitle; ?></title>
    <?php echo $links; ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrapValidator.min.css'); ?>">
  </head>
  <body>
    <?php //echo $header; ?>
    <!--====== PAGE BANNER PART START ======-->


    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row ">
            <div class="col-md-12 text-center ">
			 <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="PSAAKET" class="img-responsive" width="180px">
				<div class="clearfix">&nbsp;</div>
				<h3 class="text-center" style="color:#192f5d"> Workshop Registration Form</h3>
			</div>
			</div>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Personal Info</h5>
                            <!--<h2>Keep in touch</h2>-->
                        </div> <!-- section title -->
                        <div class="main-form">
                            <form id="registerForm" action="<?php echo base_url('workshop/insert'); ?>" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="name" type="text" placeholder="Your name">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" placeholder="Email">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="phone" type="text" placeholder="Phone">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="roll_number" type="text" placeholder="Roll number">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="college_name" type="text" placeholder="College name">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="address" type="text" placeholder="Address">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="text" name="country" value="" placeholder="Country">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="text" name="state" value="" placeholder="State">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="text" name="state" value="" placeholder="City">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="zipcode" type="text" placeholder="Zipcode">
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" class="main-btn">Proceed to payment</button>
                                        </div> <!-- singel form -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
    <?php echo $scripts; ?>
    <?php //echo $footer; ?>
    <script src="<?php echo base_url('assets/js/bootstrapValidator.min.js'); ?>"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#registerForm').bootstrapValidator({
              fields: {
                  name: {
                      validators: {
                          notEmpty: {
                              message: 'Name is required'
                          },
                          regexp: {
                          regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                          message:'Name wont allow <> [] = % '
                          }
                      }
                  },
                  email: {
                     validators: {
                          notEmpty: {
                              message: 'Email is required'
                          },
                          regexp: {
                            regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                            message: 'Please enter a valid email address. For example johndoe@domain.com.'
                          }
                      }
                  },
                  phone: {
                      validators: {
                          notEmpty: {
                              message: 'Phone Number is required'
                          },
                          regexp: {
                          regexp:  /^[0-9]{10,14}$/,
                          message:'Phone Number must be 10 to 14 digits'
                          }

                      }
                  },
                  city: {
                      validators: {
                          notEmpty: {
                              message: 'City is required'
                          }
                      }
                  },
                  state: {
                      validators: {
                          notEmpty: {
                              message: 'State is required'
                          }
                      }
                  },
                  country: {
                      validators: {
                          notEmpty: {
                              message: 'Country is required'
                          }
                      }
                  },
                  zipcode: {
                      validators: {
                          notEmpty: {
                              message: 'Zip Code is required'
                          }
                      }
                  }
              }
          });
      });
    </script>
  </body>
</html>

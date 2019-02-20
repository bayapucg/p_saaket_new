<header id="header-part">

    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="<?php echo base_url('assets/img/map.png'); ?>" alt="icon"><span>some address</span></li>
                            <li><img src="<?php echo base_url('assets/img/email.png'); ?>" alt="icon"><span>example@gmail.com</span></li>
                            <li><img src="<?php echo base_url('assets/img/support.png'); ?>" alt="icon" height="18px"><span>321 325 5678</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-opening-time text-lg-right text-center">
                        <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->

    <div class="navigation">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-11 col-md-10 col-sm-9 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">
                          <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="PSAAKET" class="img-responsive" width="150px">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="active" href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('seminars'); ?>">Seminars</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>">Instructors</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php#patnar-logo">Partners</a>
                                    <!--<ul class="sub-menu">
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="blog-single.php">Blog Single</a></li>
                                    </ul>-->
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-3">
                    <div class="right-icon text-right">
                        <ul>
                            <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal1"><i class="fa fa-user"></i></a></li>
                        </ul>
                    </div> <!-- right icon -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

</header>

<!--====== HEADER PART ENDS ======-->

<!--====== SEARCH BOX PART START ======-->

<div class="search-box">
    <div class="serach-form">
        <div class="closebtn">
            <span></span>
            <span></span>
        </div>
        <form action="#">
            <input type="text" placeholder="Search by keyword">
            <button><i class="fa fa-search"></i></button>
        </form>
    </div> <!-- serach form -->
</div>
<!--notification messages-->
<?php if($this->session->flashdata('success')): ?>
  <div class="alert_msg1 animated slideInUp bg-succ">
    <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
  </div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
  <div class="alert_msg1 animated slideInUp bg-warn">
    <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
  </div>
<?php endif; ?>

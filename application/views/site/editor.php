<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>মাসিক আত-তাহরীক </title>
    <link rel="stylesheet" href="https://fonts.maateen.me/solaiman-lipi/font.css?ver=1540724340">
    <link rel="stylesheet" href="<?php echo base_url(); ?>new_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>new_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>new_assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>new_assets/css/responsive.css">
</head>
<body>
    <style>
        .main-menu::before {
            background-image: url(<?php echo base_url(); ?>new_assets/images/menu-corner-left.jpg);
        }

        .main-menu::after {
            background-image: url(<?php echo base_url(); ?>new_assets/images/menu-corner-right.jpg);
        }
        h4.sidebar-title::before {
            background-image: url(<?php echo base_url(); ?>new_assets/images/right-colum-top-bar-left.jpg);
        }
        h4.sidebar-title::after {
            background-image: url(<?php echo base_url(); ?>new_assets/images/right-colum-top-bar-right.jpg);
        }
        footer.footer-section {
            background: url(<?php echo base_url(); ?>new_assets/images/header-bg.jpg);
        }
    </style>

    <header class="hedar-baner-section" style="background-image: url(<?php echo base_url(); ?>new_assets/images/header-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-baner">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>new_assets/images/header_baner.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <?php $this->load->view('site/topnav'); ?>
                </div>
            </div>
        </div>
    </header>
    <section class="main-content-section">
        <div class="container">
            <div class="row main-content-inner-section">
                <div class="col-sm-9">
                    <div class="middle-content">
                        <h3 class="post-category-name">সম্পাদনা পরিষদ</h3>
                        <div class="post-item single-post">
                            <p>                               <span style="text-decoration:underline;color:#508424">সম্পাদক মন্ডলীর সভাপতি</span><br/>
                                প্রফেসর ড. মুহাম্মাদ আসাদুল্লাহ আল-গালিব<br/>
                                <br/>

                                <span style="text-decoration:underline;color:#508424">সম্পাদক</span><br/>
                                ড. মুহাম্মাদ সাখাওয়াত হোসাইন<br/>
                                <br/>

                                <span style="text-decoration:underline;color:#508424">সহকারী সম্পাদক</span><br/>
                                ড. মুহাম্মাদ কাবীরুল ইসলাম<br/>
                                <br/>

                                <span style="text-decoration:underline;color:#508424">গবেষণা সহকারী</span><br/>
                                ড. নূরুল ইসলাম
                                <br/>
                                আহমাদ আব্দুল্লাহ ছাকিব<br/>
                                আহমাদ আব্দুল্লাহ নাজীব <br/>
                                মুহাম্মাদ আব্দুর রহীম <br/>

                                <br/>

                                <span style="text-decoration:underline;color:#508424">সার্কুলেশন ম্যানেজার</span><br/>
                                মুহাম্মাদ কামরুল হাসান<br/>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <?php $this->load->view('site/rightnav'); ?>
                </div>
            </div>
        </div>
    </section>
    <div class="scroll-top">
      <div class="scroll-to-up">
          <i class="fa fa-angle-up"></i>
      </div>
    </div>
    <?php $this->load->view('site/footernav'); ?>

    <script src="<?php echo base_url(); ?>new_assets/js/jquery-3.2.0.min.js"></script>
    <script src="<?php echo base_url(); ?>new_assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>new_assets/js/custom.js"></script>
</body>
</html>
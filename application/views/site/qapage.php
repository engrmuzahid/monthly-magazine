
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
                <div class="col-sm-5 col-sm-offset-2">
                    <div class="qa-form">
                        <h3 class="qa-heading">প্রশ্ন করুন</h3>

                        <?php if (isset($success)): ?>
                            <span class="article-type"> <?php echo $success; ?></span>
                        <?php elseif (isset($error)): ?>
                           
                            <span class="article-type"> <?php echo $error; ?></span>
                            
                        <?php endif; ?>

                        <form method="post" action="<?php echo site_url('site/qapage'); ?>"    enctype="multipart/form-data">
                            <input type="text" name="QA[sender_name]" class="form-control" placeholder="নাম" >
                            <span class="error"><?php echo form_error('QA[sender_name]'); ?></span>
                            <input type="email" name="QA[sender_email]" class="form-control" placeholder="ই-মেইল">
                            <span class="error"><?php echo form_error('QA[sender_email]'); ?></span>
                            <input type="text" name="QA[sender_address]" class="form-control" placeholder="ঠিকানা ">
                            <span class="error"><?php echo form_error('QA[sender_address]'); ?></span>
                            <textarea name="QA[question]" class="form-control" id="" cols="30" rows="10" placeholder="প্রশ্ন"></textarea>
                            <span class="error"><?php echo form_error('QA[question]'); ?></span>
                            <button name="sendqa" type="submit">প্রশ্ন  করুন</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-2">
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
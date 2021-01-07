<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $article->title ?>  - মাসিক আত-তাহরীক </title>
    <link rel="icon" type="image/ico" href="images/fevicon.gif" />
    <meta name="keywords" content="Monthly At-Tahreek, Tahreek, At-Tahreek, At Tahreek, তাহরীক, আত-তাহরীক, islamic magazin in bangla, Ahle Hadith Magazin, Magazin of Pure sunnah, islamic question answer,<?php echo $article->name ?>,<?php echo $article->writer ?>,<?php echo $article->title ?>"/>
    <meta name="description" content="<?php echo mb_substr(strip_tags($article->description), 0, 250) . "..."; ?>" />
    <meta name="author" content="<?php echo $article->writer ?>" email="tahreek@ymail.com" phone="+8801770800900"/>
    <link rel="stylesheet" href="https://fonts.maateen.me/solaiman-lipi/font.css?ver=1540724340">
    <link rel="stylesheet" href="<?php echo base_url(); ?>new_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>new_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>new_assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>new_assets/css/responsive.css">

    <script type="text/javascript">   var base_url = '<?php echo base_url(); ?>';</script>
        <script type="text/javascript">var switchTo5x = true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "3c2fcc9d-d593-42a4-acb2-99bfdc57ecc1", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=273480586078649';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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

                    <input type="hidden" value="<?php echo $this->session->userdata("visit_month") ? $this->session->userdata("visit_month") : date("MY", strtotime("NOW")); ?>" id="book_id"/>

                    <h3 class="post-category-name"><a href="<?php echo site_url('site/details?catID=' . $article->category_id . '&monthName=' . $this->session->userdata("visit_month")); ?>"><?php echo $article->name ?></a></h3>
                    <div class="post-item single-post">
                        <h4><?php echo $article->title ?></h4>
                        <p align="right"><em><?php echo $article->writer ?></em></p>
                        <p><?php echo $article->description ?></p>
                        <p><?php echo $article->reference ?> </p>
                        <div class="social-share">
                            <span class='st_sharethis_large' displayText='ShareThis'></span>
                            <span class='st_facebook_large' displayText='Facebook'></span>
                            <span class='st_twitter_large' displayText='Tweet'></span>
                            <span class='st_linkedin_large' displayText='LinkedIn'></span>
                            <span class='st_pinterest_large' displayText='Pinterest'></span>
                            <span class='st_email_large' displayText='Email'></span>
                            <hr/>
                            <div class="fb-comments" data-href="http://at-tahreek.com/site/show/<?php echo $article->id; ?>"  data-width="100%" data-numposts="70"></div>
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

    <script type="text/javascript">

        var current_url = '<?php echo site_url('site/load_user_comments') ?>/<?php echo $article->id; ?>';

            function load_data(url) {
                $("#load_comments").html('<h4>Loading ....</h4>');
                var data = {}
                $.post(url, data, function (resp) {
                    $("#load_comments").html(resp);

                });
            }

            function reset_form(id) {
                $(':input', "#" + id)
                        .not(':button, :submit, :reset, :hidden')
                        .val('')
                        .removeAttr('checked')
                        .removeAttr('selected');
            }


            $(document).ready(function () {

               // load_data(current_url);

                $("#userCommentBtn").die('click').live('click', function (e) {
                    e.preventDefault();
                    $(this).hide();
                    $("#errorDiv").html('<h4>Sending ....</h4>');
                    var data = new FormData(document.getElementById("user_comment_box"));
                    var url = $("#user_comment_box").attr('action');
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: data,
                        async: false,
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function (resp) {
                            if (resp != 'DONE') {
                                $("#errorDiv").html(resp);
                                $("#userCommentBtn").show();
                            } else {
                                $("#errorDiv").html("Successfully sent your comments...");
                                reset_form('user_comment_box');
                                load_data(current_url);

                            }
                        }
                    });
                });

            });
    </script>
</body>
</html>
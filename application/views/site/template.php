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


            <script type="text/javascript">
            function load_cover_image() {
                var data = {'bookID': $("#book_id").val()};

                $.post("<?php echo site_url('site/load_cover_image'); ?>", data, function (resp) {
                    $("#load_cover_image").html(resp);
                });
            }

            function load_header_image() {
                var data = {'bookID': $("#book_id").val()};

                $.post("<?php echo site_url('site/load_header_image'); ?>", data, function (resp) {
                    $("#header_background").attr("src", resp);
                });
            }
            function load_leftmenu() {
                $("#leftmenu").html("Loading...");
                var data = {'bookID': $("#book_id").val()};

                $.post("<?php echo site_url('site/leftmenu'); ?>", data, function (resp) {
                    $("#leftmenu").html(resp);
                });
            }
        </script>
        <script type="text/javascript">
            var base_url = '<?php echo base_url(); ?>';
            function load_homepage() {
                $("#main_index").html("Loading...");
                var data = {'bookID': $("#book_id").val()};

                $.post("<?php echo site_url('site/mainindex'); ?>", data, function (resp) {
                    $("#load_data").html(resp);
                });
            }
            $(document).ready(function () {
                load_header_image();
                load_homepage();
                load_cover_image();
                load_leftmenu();

            });
        </script>



        <script type="text/javascript">

            $(document).ready(function () {
                $("body").on("click", ".category", function (e) {
                    e.preventDefault();
                    var cat_id = $(this).attr("data-id");
                    var book_id = $("#book_id").val();
                    $.post("<?php echo site_url('site/details'); ?>", {'catID': cat_id, 'bookID': book_id}, function (resp) {
                        $("#load_data").html(resp);
                    });
                });
                $("body").on("click", ".show_details", function (e) {
                    e.preventDefault();
                    var article_id = $(this).attr("data-id");
                    window.location.href = '<?php echo site_url('site/show'); ?>/' + article_id;
                });
            });
        </script>

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
                <div class="col-sm-3">
                    <?php echo $leftsidebar_content; ?>
                </div>
                <div class="col-sm-6">
                    <?php echo $post_content; ?>
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
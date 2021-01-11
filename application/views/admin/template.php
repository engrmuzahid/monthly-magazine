<!DOCTYPE html>
<html>
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="Ginilab" />
        <meta name="description" content="Ginilab">
        <meta name="author" content="Ginilab">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css"/>
        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/theme/skin/default_skin/css/theme.css">


        <!-- Admin Forms CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/theme/admin-tools/admin-forms/css/admin-forms.css">
        <!-- Favicon -->
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/vendor/jquery/jquery-1.11.1.min.js"></script>
        <link rel="shortcut icon" href="<?php echo base_url('assets'); ?>/theme/img/favicon.ico">

        <?php if (!empty($page_styles)): ?>
            <?php foreach ($page_styles as $href): ?>
                <?php echo link_tag($href); ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/plugins/summernote/summernote.css" rel="stylesheet" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/plugins/datatables/media/css/datatables.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

        <script type="text/javascript">
            var base_url = '<?php echo base_url() ?>';

        </script>


    </head>

    <body class="dashboard-page sb-l-o sb-r-c">

        <!-- Start: Theme Preview Pane -->
        <?php // $this->load->view('admin/themepreview'); ?>
        <!-- End: Theme Preview Pane -->

        <!-- Start: Main -->
        <div id="main">

            <!-- Start: Header -->
            <?php $this->load->view('admin/header'); ?>
            <!-- End: Header -->

            <!-- Start: Sidebar -->
            <?php $this->load->view('admin/sidebarmenu'); ?> 
            <!-- End: Sidebar -->

            <!-- Start: Content -->
            <section id="content_wrapper">

                <!-- Start: Topbar-Dropdown -->
                <?php $this->load->view('admin/topbardropdown'); ?>
                <!-- End: Topbar-Dropdown -->

                <?php isset($content_page) ? $this->load->view($content_page) : "" ?>
            </section>
            <!-- End: Content-Wrapper -->

            <!-- Start: Right Sidebar -->
            <?php echo $this->load->view('admin/rightsidebar'); ?>
            <!-- End: Right Sidebar -->



        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <span id="popup-form"></span>

        <!-- jQuery -->

        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/theme/js/bootstrap/bootstrap.min.js"></script>

        <!-- Holder js  -->
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/theme/js/bootstrap/holder.min.js"></script>

        <!-- Theme Javascript -->
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/theme/js/utility/utility.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/theme/js/main.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/theme/js/demo.js"></script>

        <!-- Admin Panels  -->
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/theme/admin-tools/admin-plugins/admin-panels/json2.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/theme/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/theme/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

        <!-- Page Javascript -->
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/theme/js/pages/widgets.js"></script>


        <script type='text/javascript' src='<?php echo base_url(); ?>assets/vendor/plugins/summernote/summernote.js'></script> 
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/vendor/plugins/sweetalert/sweetalert.min.js'></script> 
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/vendor/plugins/datatables/media/js/datatables.min.js'></script>

        <script type="text/javascript">
            jQuery(document).ready(function () {

                "use strict";

                // Init Theme Core      
                Core.init({
                    sbm: "sb-l-c",
                });

                // Init Demo JS
                Demo.init();


                // Init Admin Panels on widgets inside the ".admin-panels" container
                $('.admin-panels').adminpanel({
                    grid: '.admin-grid',
                    draggable: true,
                    mobile: false,
                    callback: function () {
                        bootbox.confirm('<h3>A Custom Callback!</h3>', function () {});
                    },
                    onFinish: function () {
                        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onLoad');


                        Waypoint.refreshAll();

                    },
                    onSave: function () {
                        $(window).trigger('resize');
                    }
                });

            });
        </script>

        <!-----Custom Main JS ------------------>
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/scripts/maincustom.js"></script>

        <?php if (!empty($page_plugin_js)): ?>         
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <?php foreach ($page_plugin_js as $href): ?>
                <script type='text/javascript' src='<?php echo $href; ?>'></script>  
            <?php endforeach; ?>
            <!-- END PAGE LEVEL PLUGINS -->
        <?php endif; ?>


        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <?php if (!empty($page_script)): ?>
            <?php foreach ($page_script as $href): ?>
                <script type='text/javascript' src='<?php echo base_url() . $href; ?>'></script>  
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- END PAGE LEVEL SCRIPTS -->
        <?php if (!empty($custom_script)): ?>
            <script type="text/javascript">
    <?php echo $custom_script; ?>
            </script>
        <?php endif; ?>

        <!-- END: PAGE SCRIPTS -->

    </body>

</html>

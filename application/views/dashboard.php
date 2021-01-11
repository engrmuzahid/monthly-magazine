<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <title>মাসিক আত-তাহরীক</title>

        <meta name="keywords" content="" />

        <meta name="description" content="">

        <meta name="author" content="Ginilab">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <!-- Font CSS (Via CDN) -->

        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">



        <!-- Theme CSS -->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/css/theme.css">



        <!-- Admin Forms CSS -->

        <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">-->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin-tools/admin-forms/css/admin-forms.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">

        <!-- Favicon -->

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->



        <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.1.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery_ui/jquery-ui.min.js"></script>

        <script type="text/javascript">

            var base_url = '<?php echo base_url(); ?>';

        </script>



    </head>



    <body class="admin-elements-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">



        <!-- Start: Theme Preview Pane -->

        <div id="skin-toolbox">

            <div class="panel">

                <div class="panel-heading">

                    <span class="panel-icon"><i class="fa fa-gear text-primary"></i>

                    </span>

                    <span class="panel-title"> Theme Options</span>

                </div>

                <div class="panel-body pn">



                    <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">

                        <li class="active">

                            <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>

                        </li>

                        <li>

                            <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Color</a>

                        </li>



                    </ul>



                    <div class="tab-content p20 ptn pb15">



                        <div role="tabpanel" class="tab-pane active" id="toolbox-header">

                            <form id="toolbox-header-skin">

                                <h4 class="mv20">Header Skins</h4>



                                <div class="skin-toolbox-swatches">

                                    <div class="checkbox-custom checkbox-disabled fill mb5">

                                        <input type="radio" name="headerSkin" id="headerSkin8" checked value="bg-light">

                                        <label for="headerSkin8">Light</label>

                                    </div>

                                    <div class="checkbox-custom fill checkbox-primary mb5">

                                        <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">

                                        <label for="headerSkin1">Primary</label>

                                    </div>

                                    <div class="checkbox-custom fill checkbox-info mb5">

                                        <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">

                                        <label for="headerSkin3">Info</label>

                                    </div>

                                    <div class="checkbox-custom fill checkbox-warning mb5">

                                        <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">

                                        <label for="headerSkin4">Warning</label>

                                    </div>

                                    <div class="checkbox-custom fill checkbox-danger mb5">

                                        <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">

                                        <label for="headerSkin5">Danger</label>

                                    </div>

                                    <div class="checkbox-custom fill checkbox-alert mb5">

                                        <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">

                                        <label for="headerSkin6">Alert</label>

                                    </div>

                                    <div class="checkbox-custom fill checkbox-system mb5">

                                        <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">

                                        <label for="headerSkin7">System</label>

                                    </div>

                                    <div class="checkbox-custom fill checkbox-success mb5">

                                        <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">

                                        <label for="headerSkin2">Success</label>

                                    </div>

                                    <div class="checkbox-custom fill mb5">

                                        <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">

                                        <label for="headerSkin9">Dark</label>

                                    </div>

                                </div>

                            </form>

                        </div>

                        <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">

                            <form id="toolbox-sidebar-skin">



                                <h4 class="mv20">Site Color</h4>

                                <div class="affix-pane" data-spy="affix" data-offset-top="200">



                                    <div class="animated-delay animated-long" data-animate='["1000","fadeIn"]'>

                                        <div id="skin-switcher" class="row tray-bin alt-btns-hover br-b-n br-h-n mn">

                                            <div class="col-xs-6 pln">

                                                <a class="btn btn-primary btn-gradient btn-alt btn-block item-active" data-form-skin="primary">Primary</a>

                                            </div>

                                            <div class="col-xs-6">

                                                <a class="btn btn-success btn-gradient btn-alt btn-block" data-form-skin="success">Success</a>

                                            </div>

                                            <div class="col-xs-6 pln">

                                                <a class="btn btn-info btn-gradient btn-alt btn-block" data-form-skin="info">Info</a>

                                            </div>

                                            <div class="col-xs-6 ">

                                                <a class="btn btn-warning btn-gradient btn-alt btn-block" data-form-skin="warning">Warning</a>

                                            </div>

                                            <div class="col-xs-6 pln">

                                                <a class="btn btn-danger btn-gradient btn-alt btn-block" data-form-skin="danger">Danger</a>

                                            </div>

                                            <div class="col-xs-6">

                                                <a class="btn btn-alert btn-gradient btn-alt btn-block" data-form-skin="alert">Alert</a>

                                            </div>

                                            <div class="col-xs-6 pln">

                                                <a class="btn btn-system btn-gradient btn-alt btn-block" data-form-skin="system">System</a>

                                            </div>

                                            <div class="col-xs-6">

                                                <a class="btn btn-dark btn-gradient btn-alt btn-block" data-form-skin="dark">Dark</a>

                                            </div>

                                            <!--                                            <div class="col-xs-6 pln">

                                                                                            <a class="btn btn-default btn-gradient btn-alt btn-block" data-form-skin="default">Default</a>

                                                                                        </div>-->

                                        </div>

                                    </div>









                                </div>





                            </form>

                        </div>



                    </div>

                    <!--                    <div class="form-group mn br-t p15">

                                            <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>

                                        </div>-->



                </div>

            </div>

        </div>

        <!-- End: Theme Preview Pane -->



        <!-- Start: Main -->

        <div id="main">



            <!-- Start: Header -->

            <header class="navbar navbar-fixed-top bg-light">

                <div class="navbar-branding">

                    <a class="navbar-brand" href=""> <b>তাওহীদের ডাক</b>  </a>

                    <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>

                    <ul class="nav navbar-nav pull-right hidden">

                        <li>

                            <a href="#" class="sidebar-menu-toggle">

                                <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>

                            </a>

                        </li>

                    </ul>

                </div>

               

                </ul>



            </header>



            <aside id="sidebar_left" class="nano nano-primary">

                <div class="nano-content">

                    <?php $this->load->view('navigation'); ?>

                    <div class="sidebar-toggle-mini">

                        <a href="#">

                            <span class="fa fa-sign-out"></span>

                        </a>

                    </div>

                </div>

            </aside>



            <section id="content_wrapper">



                <!-- Begin: Content -->

                <section id="content">

                   

                    <div class="row">



                        <div class="panel" id="p9">

                            <div class="panel-heading">

                                <span class="panel-title text-info fw700"><i class="fa fa-pencil hidden"></i> সম্পাদনা পরিষদ</span>

                            </div>

                            <div class="panel-body">



                                <div class="main-body-area">

        	<div class="article-homepg">

         

              <span style="text-decoration:underline;color:#508424">সম্পাদক মন্ডলীর সভাপতি</span><br/>

প্রফেসর ডঃ মুহাম্মাদ আসাদুল্লাহ আল-গালিব<br/>

<br/>



<span style="text-decoration:underline;color:#508424">সম্পাদক</span><br/>

ডঃ মুহাম্মাদ সাখাওয়াত হোসাইন<br/>

<br/>



<span style="text-decoration:underline;color:#508424">সহকারী সম্পাদক</span><br/>

ডঃ মুহাম্মাদ কাবীরুল ইসলাম<br/>

<br/>



<span style="text-decoration:underline;color:#508424">গবেষণা সহকারী</span><br/>

ড. নূরুল ইসলাম

              <br/>

ড. আহমাদ আব্দুল্লাহ ছাকিব<br/>

ড. আহমাদ আব্দুল্লাহ নাজীব <br/>

<br/>



<span style="text-decoration:underline;color:#508424">সার্কুলেশন ম্যানেজার</span><br/>

মুহাম্মাদ কামরুল হাসান<br/>

              </p>

            <table width="500" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="153" height="40">

    	

    </td>

    <td width="194"></td>

    <td width="153">

    	

    </td>

  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

</table>

       	  </div>

            

        	

    </div> 

                            </div>

                            <div class="panel-menu admin-form pn">

                                <!-- Panel Break Field(Hidden) -->

                                <label class="field prepend-icon hidden">

                                    <input type="text" name="firstname" id="firstname" class="gui-input br-n br-b" placeholder="Add Network">

                                    <label for="firstname" class="field-icon"><i class="fa fa-plus"></i> </label>

                                </label>



                            </div>









                        </div>

                    </div>











                </section>





            </section>







        </div>







        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script> 

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/rig_demo.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/rig_main.js"></script> 

        <script type="text/javascript">

            jQuery(document).ready(function () {



                "use strict";



                // Init Theme Core    

                Core.init();



                // Init Theme Core    

                Demo.init();



               

            });

        </script>

        <!-- END: PAGE SCRIPTS -->



    </body>



</html>
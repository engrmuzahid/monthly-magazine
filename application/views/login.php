<!DOCTYPE html>

<html>



    <head>

        <!-- Meta, title, CSS, favicons, etc. -->

        <meta charset="utf-8">

            <title><?= appName; ?></title>

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

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin-tools/admin-forms/css/admin-forms.css">



        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">



        <!-- Favicon -->

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>

       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

       <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

       <![endif]-->

    </head>



    <body class="external-page sb-l-c sb-r-c">





           

        <div id="main" class="animated fadeIn">

             <!--<div  style="background-color:rgba(59, 175, 218,0.5);width: 100%;height: 100%;position: fixed;">-->

            <section id="content_wrapper"  >



                    <!-- begin canvas animation bg -->

                    <div id="canvas-wrapper">
                        <canvas id="demo-canvas"></canvas>
                    </div>



                    <section id="content">



                        <div class="admin-form theme-info" id="login1">



                           

                            <div class="panel panel-info mt10 br-n">

                                <div class="panel-heading heading-border bg-white">

                                    <span class="panel-title hidden"><i class="fa fa-sign-in"></i>Register</span>

                                    <div class="section row mn">

                                        <div class="col-sm-12">

                                            <h3 style="text-align: center"><?= appName; ?></h3>

                                        </div>



                                    </div>

                                </div>

                                <form method="post" action="" id="loginFrm">

                                    <div class="panel-body bg-light p30">

                                        <div class="row">

                                            <div class="col-sm-12 pr30">

                                                <div class="section">

                                                    <label for="username" class="field-label text-muted fs18 mb10">Username</label>

                                                    <label for="username" class="field prepend-icon">

                                                        <input type="text" name="USER[username]" id="username" class="gui-input" placeholder="Enter username" value="<?php echo set_value('USER[username]'); ?>">

                                                        <label for="username" class="field-icon"><i class="fa fa-user"></i>

                                                        </label>

                                                    </label>

                                                </div>

                                             

                                                <div class="section">

                                                    <label for="username" class="field-label text-muted fs18 mb10">Password</label>

                                                    <label for="password" class="field prepend-icon">

                                                        <input type="password" name="USER[password]" id="password" class="gui-input" placeholder="Enter password" value="<?php echo set_value('USER[password]'); ?>">

                                                        <label for="password" class="field-icon"><i class="fa fa-lock"></i>

                                                        </label>

                                                    </label>

                                                </div>

                                                <div class="section">

                                                    <label class="pull-left input-align mt10 error error-title">                                    

                                                        <?php echo $msg; ?>

                                                    </label>

                                                </div>

                                            </div>

                                       

                                        </div>

                                    </div>

                                    <!-- end .form-body section -->

                                    <div class="panel-footer clearfix p10 ph15">

                                        <button type="submit" class="button btn btn-primary btn-block" id="loginBtn"> Login </button>



                                    </div>

                                    <!-- end .form-footer section -->

                                </form>

                            </div>

                        </div>



                    </section>

                    <!-- End: Content -->



                </section>

                <!-- End: Content-Wrapper -->



            <!--</div>-->

        </div>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.1.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery_ui/jquery-ui.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/rig_demo.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/rig_main.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

         

    </body>



</html>


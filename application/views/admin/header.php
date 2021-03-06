<header class="navbar navbar-fixed-top bg-light">
    <div class="navbar-branding">
        <a class="navbar-brand" href="<?php echo site_url("admin"); ?>"> <b> Admin </b> Panel
        </a>
        <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
        <ul class="nav navbar-nav pull-right hidden">
            <li>
                <a href="#" class="sidebar-menu-toggle">
                    <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                </a>
            </li>
        </ul>
    </div>
    <ul class="nav navbar-nav navbar-left">

        <li>
            <span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>
        </li>
        <li class="dropdown hidden">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicons glyphicons-settings fs14"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="javascript:void(0);">
                        <span class="fa fa-times-circle-o pr5 text-primary"></span> Reset LocalStorage </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="fa fa-slideshare pr5 text-info"></span> Force Global Logout </a>
                </li>
                <li class="divider mv5"></li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="fa fa-tasks pr5 text-danger"></span> Run Cron Job </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="fa fa-wrench pr5 text-warning"></span> Maintenance Mode </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="request-fullscreen toggle-active" href="#">
                <span class="octicon octicon-screen-full fs18"></span>
            </a>
        </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
                <span><?php echo $this->session->userdata("user_name"); ?></span>
                <span class="caret caret-tp"></span>
            </a>
            <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">

                <li class="br-t of-h">
                    <a href="<?php echo site_url("admin/profile"); ?>" class="fw600 p12 animated animated-short fadeInDown">
                        <span class="fa fa-gear pr5"></span> Account Settings </a>
                </li>
                <li class="br-t of-h">
                    <a href="<?php echo site_url("login/logout"); ?>" class="fw600 p12 animated animated-short fadeInDown">
                        <span class="fa fa-power-off pr5"></span> Logout </a>
                </li>
            </ul>
        </li>
    </ul>

</header>
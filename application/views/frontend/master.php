<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="<?= $title; ?>Monthly AT-TAHREEK, is an extra-ordinary Islamic research Journal of Bangladesh, which has been calling Mankind to Salafi Path, based on pure Tawheed and Saheeh Sunnah following the explanations of the honoured Sahaba & Salaf-i-Saleheen. This journal is enriched with valuable writings of renowned columnists and writers of home and abroad, directed to establish a pure Islamic society in Bangladesh. It has been running since September 1997 from the city of Rajshahi. Monthly At-tahreek, At-tahreek, Attahreek,Attahrik, আত-তাহরীক, তাহরীক, তাহরিক, আহলেহাদিস পত্রিকা, আহলেহাদিস, বাংলা ইসলামিক পত্রিকা, তাওহীদের ডাক, তাওহীদের-ডাক,islamic magazine in bangla"/>
    <?php $meta_desc = strip_tags($meta_desc!=""?$meta_desc: "Monthly At-tahreek, At-tahreek, Attahreek,Attahrik, আত-তাহরীক, তাহরীক, তাহরিক, আহলেহাদিস পত্রিকা, আহলেহাদিস, বাংলা ইসলামিক পত্রিকা, তাওহীদের ডাক, তাওহীদের-ডাক,islamic magazine in bangla"); ?>
    <meta name="description" content="<?php echo shorten_string($meta_desc, 50); ?>"/>
    <meta name="author" content="Monthly At-tahreek" email="tahreek@ymail.com" phone="0247-860861, 01558-340390"/>
    <title><?= $title; ?></title>
    <link rel="canonical" href="<?php echo base_url(); ?>" />
    <meta name=”robots” content=”index, follow”> 
    <meta property="fb:app_id" content="697714071010739" /> 
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:description" content="<?php echo shorten_string($meta_desc, 50); ?>" />
    <meta property="og:image" content="https://at-tahreek.com/logo.png" />
    <meta property="og:url" content="<?php echo $_SERVER['REDIRECT_SCRIPT_URI']?$_SERVER['REDIRECT_SCRIPT_URI']:base_url(); ?>" />
     <meta property="og:updated_time" content="<?php echo time(); ?>" /> 
    <meta property="og:site_name" content=" মাসিক আত-তাহরীক । ধর্ম, সমাজ ও সাহিত্য বিষয়ক গবেষণা পত্রিকা" />
    <meta name="twitter:title" content="<?= $title; ?>">
    <meta name="twitter:description" content="<?php echo shorten_string($meta_desc, 50); ?>">
    <meta name="twitter:image" content="https://at-tahreek.com/logo.png">
    <link href="//fonts.googleapis.com/css?family=Amiri:400,400i,700,700i" rel="stylesheet">
    <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>theme_assets/images/fevicon.gif"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme_assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme_assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme_assets/css/slicknav.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme_assets/css/solaimanlipi.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme_assets/css/style.css?v=<?= time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme_assets/css/responsive.css?v=<?= time(); ?>">
    <style type="text/css">
        .header-top-area {
            background-color: <?php echo $site_info->h_bg_color; ?>
        }

        header.hedar-baner-section {
            /*background-image: url(<?php //echo base_url('assets/site/images/'.$site_info->h_bg_image); ?>);*/
            background: #3da13f;
        }

        .footer_area {
            background-color: <?php echo $site_info->f_bg_color ?>;
        }

        .main-menu::before {
            background-image: url(<?php echo base_url('theme_assets/images/menu-corner-left.jpg'); ?>);
        }

        .main-menu::after {
            background-image: url(<?php echo base_url('theme_assets/images/menu-corner-right.jpg'); ?>);
        }

        .copyright-area {
            background-color: <?php echo $site_info->c_bg_color; ?>
        }
        .main-logo img {
            max-width: 240px;
        }
        .search-btn-change {
            margin: auto;
            margin-right: 0;
            color: #fff;
            cursor: pointer;
            font-size: 1.5em;
        }
        .search-btn-change a {
            color: #fff;
        }
        .mobile-header .search-btn-change {
            display: none;
        }
        @media only screen and (max-width: 767px) {
            .mobile-header .search-btn-change {
                display: block;
            }
            .col-md-4.mobile-hide {
                display: none;
            }
        }
    </style>
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c343a17093e830011451118&product=inline-share-buttons' async='async'></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>theme_assets/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class='mobile-footer-wrapper'>
    <div id="mobileSideNav" class="mobileSideNav">
        <div class="navigation-header">
            <h6>নেভিগেশান</h6>
            <span onclick="closeNav()">&times;</span>
        </div>
        <?php if ($menus) : ?>
            <ul>
                <?php foreach ($menus as $menu) : ?>
                    <?php
                    if ($menu->menu_url == 'writer' || $menu->menu_url == 'category' || $menu->menu_url == 'subject') {
                        $menu_url = '#';
                    } else {
                        $menu_url = base_url() . $menu->menu_url;
                    }
                    ?>
                    <?php
                        if ($menu->menu_url == 'writer') {
                            $table_name = 'writer';
                        } elseif ($menu->menu_url == 'subject') {
                            $table_name = 'subject';
                        } elseif ($menu->menu_url == 'category') {
                            $table_name = 'category';
                        } else {
                            $table_name = '';
                        }
                        ?>
                    <li><?php if($table_name == '') : ?><a href="<?php echo $menu_url; ?>"><?php echo $menu->name; ?></a><?php else: ?>
                        <a href="<?php echo $menu_url; ?>" data-toggle="collapse" data-target="#sub-item_<?php echo $menu->id; ?>" class='collapsed'>
                            <?php echo $menu->name; ?>
                            <i class='fa fa-angle-down'></i>
                            <i class='fa fa-angle-up'></i>
                        </a>
                    <?php endif; ?>


                        <?php if ($table_name !== '') : ?>
                            <?php
                                $this->db->select('*');
                                $this->db->limit(8);
                                $this->db->order_by('sort_order', 'DESC');
                                $dropdown_menus = $this->db->get($table_name)->result();

                                $row_count = $this->db->get($table_name)->result();
                                ?>
                    
                            <ul>
                                <?php
                                $this->db->select('*');
                                $this->db->limit(8);
                                $this->db->order_by('sort_order', 'DESC');
                                $dropdown_menus = $this->db->get($table_name)->result();

                                $row_count = $this->db->get($table_name)->result();
                                ?>

                                
                                
                                <?php if ($table_name == 'writer') : ?>
                                        <li>
                                            <div id="sub-item_<?php echo  $menu->id; ?>" class="collapse">
                                            <ul>
                                                <?php foreach ($dropdown_menus as $row) : ?>
                                                 <li>
                                                    <a href="<?php echo base_url('writer_archive/' . $row->id); ?>"><?php echo $row->writer_name; ?></a>
                                                </li>
                                                <?php endforeach; ?>
                                                <?php if (count($row_count) > 8) : ?>
                                                   <li><a href="<?php echo base_url('/writer-list') ?>">আরও</a></li>
                                                <?php endif; ?>
                                            </ul>
                                          </div>
                                        </li>
                                        
                                <?php endif; ?>

                                
                                
                                <?php if ($table_name == 'category') : ?>
                                        <li>
                                            <div id="sub-item_<?php echo  $menu->id; ?>" class="collapse">
                                            <ul>
                                                <?php foreach ($dropdown_menus as $row) : ?>
                                                 <li>
                                                    <a href="<?php echo base_url('category_archive/' . $row->id); ?>"><?php echo $row->name; ?></a>
                                                </li>
                                                <?php endforeach; ?>
                                                <?php if (count($row_count) > 8) : ?>
                                                    <li><a href="<?php echo base_url('/category-list') ?>">আরও</a></li>
                                                <?php endif; ?>
                                            </ul>
                                          </div>
                                        </li>
                                        
                                <?php endif; ?>
                                
                                
                                <?php if ($table_name == 'subject') : ?>
                                        <li>
                                            <div id="sub-item_<?php echo  $menu->id; ?>" class="collapse">
                                            <ul>
                                                <?php foreach ($dropdown_menus as $row) : ?>
                                                <li>
                                                    <a href="<?php echo base_url('subject_archive/' . $row->id); ?>"><?php echo $row->subject_name; ?></a>
                                                </li>
                                                <?php endforeach; ?>
                                                <?php if (count($row_count) > 8) : ?>
                                                    <li><a href="<?php echo base_url('/subject-list') ?>">আরও</a></li>
                                                <?php endif; ?>
                                            </ul>
                                          </div>
                                        </li>
                                        
                                <?php endif; ?>
                                
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <!--<ul>
            <li>
                <a href="#" data-toggle="collapse" data-target="#sub-item" class='collapsed'>
                    About
                    <i class='fa fa-angle-down'></i>
                    <i class='fa fa-angle-up'></i>
                </a>
                <div id="sub-item" class="collapse">
                <ul>
                    <li><a href="#">sub item</a></li>
                    <li><a href="#">sub item</a></li>
                    <li><a href="#">sub item</a></li>
                </ul>
              </div>
            </li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Clients</a></li>
            <li><a href="#">Contact</a></li>
            </li>
        </ul>-->
    </div>
    <div class="mobile-footer">
        <ul>
        <li>
            <a href="<?php echo base_url(); ?>">
                <i class="fa fa-home"></i><br>
                হোম
            </a>
        </li>
        <li>
            <a href="https://play.google.com/store/apps/details?id=com.attahrik">
                <i class="fa fa-download"></i><br>
                ডাউনলোড
            </a>
        </li>
        <li>
           
            
            <a href="tel:01558340390">
                <i class="fa fa-phone"></i><br>
                কল
            </a>
        </li>
        <li>
            <a href="https://at-tahreek.com/qa">
                <i class="fa fa-edit"></i><br>
                প্রশ্ন
            </a>
        </li>
        <li>
            <a onclick="openNav()" href="#">
                <i class="fa fa-bars"></i><br>
                আরও
            </a>
        </li>
    </ul>
    </div>
</div>
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-9">
                <a href="mailto:<?php echo $site_info->email; ?>"><i
                            class="fa fa-envelope"></i> <?php echo $site_info->email; ?></a>
                <span class="seprator">|</span>
                <a href="tel:<?php echo $site_info->phone_number; ?>"><i
                            class="fa fa-phone"></i> <?php echo $site_info->phone_number; ?></a>
            </div>
            <div class="col-md-6 col-xs-3 text-right">
                <div class="socials-link">
                    <ul>
                        <?php if ($site_info->fb_link) : ?>
                            <li><a href="<?php echo $site_info->fb_link; ?>" target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if ($site_info->twitter_link) : ?>
                            <li><a href="<?php echo $site_info->twitter_link; ?>" target="_blank"><i
                                            class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if ($site_info->googlePlus_link) : ?>
                            <li><a href="<?php echo $site_info->googlePlus_link; ?>" target="_blank"><i
                                            class="fa fa-google-plus"></i></a></li>
                        <?php endif; ?>
                        <?php if ($site_info->vimeo_link) : ?>
                            <li><a href="<?php echo $site_info->vimeo_link; ?>" target="_blank"><i
                                            class="fa fa-vimeo"></i></a></li>
                        <?php endif; ?>
                        <?php if ($site_info->youtube_link) : ?>
                            <li><a href="<?php echo $site_info->youtube_link; ?>" target="_blank"><i
                                            class="fa fa-youtube"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="hedar-baner-section">
    <div class="header-baner">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="header-left">
                        <!--<div class="mobile-search-form">-->
                        <!--    <div class="main-search-form">-->
                        <!--        <script async src="https://cse.google.com/cse.js?cx=013823177316117472213:jxwhcbfllhk"></script>-->
                        <!--        <button class="search-form-close-btn" style="float: right;margin-top: -18px;"><i class="fa fa-close"></i></button>-->
                        <!--        <div class="gcse-search"></div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class='mobile-header'>
                            <div class="main-logo">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url('assets/site/images/' . $site_info->logo); ?>" alt="">
                            </a>
                        </div>
                        <div class="search-btn-change">
                            <a href="<?= base_url('search') ?>"><i class="fa fa-search"></i></a>
                        </div>
                        <!--<div id="responsive_menu"></div>-->
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="header-right">
                        <?php if ($menus) : ?>
                            <div class="main-menu-wrapper" id="slicknav_menu" style="margin-left: 50px;margin-top: 20px;">
                                <ul>
                                    <?php foreach ($menus as $menu) : ?>
                                        <?php
                                        if ($menu->menu_url == 'writer' || $menu->menu_url == 'category' || $menu->menu_url == 'subject') {
                                            $menu_url = '#';
                                        } else {
                                            $menu_url = base_url() . $menu->menu_url;
                                        }
                                        ?>
                                        <li><a href="<?php echo $menu_url; ?>"><?php echo $menu->name; ?></a>
                                            <?php
                                            if ($menu->menu_url == 'writer') {
                                                $table_name = 'writer';
                                            } elseif ($menu->menu_url == 'subject') {
                                                $table_name = 'subject';
                                            } elseif ($menu->menu_url == 'category') {
                                                $table_name = 'category';
                                            } else {
                                                $table_name = '';
                                            }
                                            ?>

                                            <?php if ($table_name !== '') : ?>
                                                <i class="fa fa-caret-down"></i>
                                                <ul>
                                                    <?php
                                                    $this->db->select('*');
                                                    $this->db->limit(8);
                                                    $this->db->order_by('sort_order', 'DESC');
                                                    $dropdown_menus = $this->db->get($table_name)->result();

                                                    $row_count = $this->db->get($table_name)->result();
                                                    ?>
                                                    <?php
                                                    if ($table_name == 'writer') :
                                                        foreach ($dropdown_menus as $row) :
                                                            ?>
                                                            <li>
                                                                <a href="<?php echo base_url('writer_archive/' . $row->id); ?>"><?php echo $row->writer_name; ?></a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                        <?php if (count($row_count) > 8) : ?>
                                                        <li><a href="<?php echo base_url('/writer-list') ?>">আরও</a></li>
                                                    <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php
                                                    if ($table_name == 'category') :
                                                        foreach ($dropdown_menus as $row) :
                                                            ?>
                                                            <li>
                                                                <a href="<?php echo base_url('category_archive/' . $row->id); ?>"><?php echo $row->name; ?></a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                        <?php if (count($row_count) > 8) : ?>
                                                        <li><a href="<?php echo base_url('/category-list') ?>">আরও</a></li>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php
                                                    if ($table_name == 'subject') :
                                                        foreach ($dropdown_menus as $row) :
                                                            ?>
                                                            <li>
                                                                <a href="<?php echo base_url('subject_archive/' . $row->id); ?>"><?php echo $row->subject_name; ?></a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                        <?php if (count($row_count) > 8) : ?>
                                                        <li><a href="<?php echo base_url('/subject-list') ?>">আরও</a></li>
                                                    <?php endif; ?>
                                                    <?php endif; ?>

                                                </ul>
                                            <?php endif; ?>


                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="search-btn-change">
                            <a href="<?= base_url('search') ?>"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-search-form">
                    <!--<form role="search" action="<?php echo base_url('search'); ?>" method="get">-->
                    <!--    <input type="search" required name="search" class="form-control" placeholder="Search">-->
                    <!--    <button class="search-action-btn" type="submit"><i class="fa fa-search"></i></button>-->
                    <!--    <button class="search-form-close-btn"><i class="fa fa-close"></i></button>-->
                    <!--</form>-->
                <script async src="https://cse.google.com/cse.js?cx=013823177316117472213:jxwhcbfllhk"></script><button class="search-form-close-btn" style="float: right;margin-top: -18px;"><i class="fa fa-close"></i></button>
<div class="gcse-search"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--<header class="hedar-baner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-baner">
                    <div class="mobile-search-form">
                        <form role="search" action="<?php /*echo base_url('search'); */?>" method="get">
                            <input type="search" required name="search" id="" placeholder="search...">
                            <button class="submit_btn" type="submit"><i class="fa fa-search"></i></button>
                            <i class="close_btn fa fa-close"></i>
                        </form>
                        <div class="search-open-icon">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <a class="logo" href="<?php /*echo base_url(); */?>"><img
                                src="<?php /*echo base_url('assets/site/images/' . $site_info->logo); */?>" alt=""></a>
                    <div class="search-form">
                        <form role="search" action="<?php /*echo base_url('search'); */?>" method="get">
                            <input type="search" required name="search" id="" placeholder="search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div id="responsive_menu"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php /*if ($menus) : */?>
                    <div class="main-menu-wrapper" id="slicknav_menu">
                        <ul>
                            <?php /*foreach ($menus as $menu) : */?>
                                <?php
/*                                if ($menu->menu_url == 'writer' || $menu->menu_url == 'category' || $menu->menu_url == 'subject') {
                                    $menu_url = '#';
                                } else {
                                    $menu_url = base_url() . $menu->menu_url;
                                }
                                */?>
                                <li><a href="<?php /*echo $menu_url; */?>"><?php /*echo $menu->name; */?></a>
                                    <?php
/*                                    if ($menu->menu_url == 'writer') {
                                        $table_name = 'writer';
                                    } elseif ($menu->menu_url == 'subject') {
                                        $table_name = 'subject';
                                    } elseif ($menu->menu_url == 'category') {
                                        $table_name = 'category';
                                    } else {
                                        $table_name = '';
                                    }
                                    */?>

                                    <?php /*if ($table_name !== '') : */?>
                                        <i class="fa fa-caret-down"></i>
                                        <ul>
                                            <?php
/*                                            $this->db->select('*');
                                            $this->db->limit(8);
                                            $this->db->order_by('sort_order', 'ASC');
                                            $dropdown_menus = $this->db->get($table_name)->result();

                                            $row_count = $this->db->get($table_name)->result();
                                            */?>
                                            <?php
/*                                            if ($table_name == 'writer') :
                                                foreach ($dropdown_menus as $row) :
                                                    */?>
                                                    <li>
                                                        <a href="<?php /*echo base_url('writer_archive/' . $row->id); */?>"><?php /*echo $row->writer_name; */?></a>
                                                    </li>
                                                <?php /*endforeach; */?>
                                                <?php /*if (count($row_count) > 8) : */?>
                                                <li><a href="<?php /*echo base_url('/writer-list') */?>">আরও</a></li>
                                            <?php /*endif; */?>
                                            <?php /*endif; */?>

                                            <?php
/*                                            if ($table_name == 'category') :
                                                foreach ($dropdown_menus as $row) :
                                                    */?>
                                                    <li>
                                                        <a href="<?php /*echo base_url('category_archive/' . $row->id); */?>"><?php /*echo $row->name; */?></a>
                                                    </li>
                                                <?php /*endforeach; */?>
                                                <?php /*if (count($row_count) > 8) : */?>
                                                <li><a href="<?php /*echo base_url('/category-list') */?>">আরও</a></li>
                                            <?php /*endif; */?>
                                            <?php /*endif; */?>
                                            <?php
/*                                            if ($table_name == 'subject') :
                                                foreach ($dropdown_menus as $row) :
                                                    */?>
                                                    <li>
                                                        <a href="<?php /*echo base_url('subject_archive/' . $row->id); */?>"><?php /*echo $row->subject_name; */?></a>
                                                    </li>
                                                <?php /*endforeach; */?>
                                                <?php /*if (count($row_count) > 8) : */?>
                                                <li><a href="<?php /*echo base_url('/subject-list') */?>">আরও</a></li>
                                            <?php /*endif; */?>
                                            <?php /*endif; */?>

                                        </ul>
                                    <?php /*endif; */?>


                                </li>
                            <?php /*endforeach; */?>
                        </ul>
                    </div>
                <?php /*endif; */?>
            </div>
        </div>
    </div>
</header>-->
<?php echo $breadcumb_section; ?>

<?php //echo $month_name; ?>
<div class="main_content_area">
    <div class="container">
        <div class="row">
            <?php echo $main_content; ?>
            <?php echo $right_sidebar; ?>

        </div>
        <?php echo $home_category_post; ?>
    </div>
</div>
<!-- Scroll Top Area Start -->
<div class="scroll-top">
    <div class="scroll-to-up">
        <i class="fa fa-angle-up"></i>
    </div>
</div>
<!-- Scroll Top Area End -->
<div class="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="copyright-text">
                    <p>Monthly At-Tahreek, Which is running from Rajshahi is an extra-ordinary Islamic Research Journal</br>
of Bangladesh is directed to Salafi Path, based on pure Tawheed and Saheeh Sunnah.</p>
                    <p><?php echo $site_info->copyright_text; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="copyright-area">
    <div class="col-md-12 text-center">

    </div>
</div>-->
<script type="text/javascript" src="<?php echo base_url(); ?>theme_assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>theme_assets/js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>theme_assets/js/custom.js"></script>
<script>
    function reset_form(id) {
        $(':input', "#" + id).not(':button, :submit, :reset, :hidden')
            .val('');
    }

    $(document).ready(function () {
        $("#submit_comment").click(function (e) {
            $('input').removeClass('error');
            var commenter_name = $("#commenter_name").val();
            var commenter_email = $("#commenter_email").val();
            if (commenter_name.length == 0) {
                $("#commenter_name").addClass('error');
            }
            if (commenter_email.length == 0) {
                $("#commenter_email").addClass('error');
            }

            e.preventDefault();
            var data = new FormData(document.getElementById("comment_form"));
            var url = $("#comment_form").attr('action');
            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                async: false,
                processData: false,
                contentType: false,
                cache: false,
                success: function (resp) {
                    if (resp == "DONE") {
                        reset_form('comment_form');
                        $("#c_successDiv").html('<p class="alert alert-success">Comment Added Successfully.</p>');
                    } else {
                        $("#c_successDiv").html(resp);
                    }
                }
            });
        });
        $(".search-open-icon i").click(function () {
            $(".mobile-search-form form").show();
            $(this).hide();
        });
        $(".mobile-search-form i.close_btn").click(function () {
            $(".mobile-search-form form").hide();
            $(".search-open-icon i").show();
        });
        
    });
</script>
<script>
    function openNav() {
        document.getElementById("mobileSideNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mobileSideNav").style.width = "0";
    }
</script>
</body>
</html>
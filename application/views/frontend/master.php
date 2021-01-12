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
    <meta property="og:url" content="<?php echo isset($_SERVER['REDIRECT_SCRIPT_URI'])?$_SERVER['REDIRECT_SCRIPT_URI']:base_url(); ?>" />
    <meta property="og:updated_time" content="<?php echo time(); ?>" /> 
    <meta property="og:site_name" content=" মাসিক আত-তাহরীক । ধর্ম, সমাজ ও সাহিত্য বিষয়ক গবেষণা পত্রিকা" />
    <meta name="twitter:title" content="<?= $title; ?>">
    <meta name="twitter:description" content="<?php echo shorten_string($meta_desc, 50); ?>">
    <meta name="twitter:image" content="https://at-tahreek.com/logo.png">
   
    <link rel="stylesheet" href="<?php echo base_url(); ?>ikhlas_assets/css/solaimanlipi.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>ikhlas_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>ikhlas_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>ikhlas_assets/css/style.css">
    <!--<link rel="stylesheet" href="<?php echo base_url(); ?>ikhlas_assets/css/responsive.css">-->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<!--header section start-->
<header class="header-section">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-top-content-wrapper">
                        <div class="left">
                            <p>জানুয়ারি ০২, ২০২১</p>
                        </div>
                        <div class="right">
                            <div class="top-social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-feed"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-bottom-content-wrapper">
                        <div class="logo">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>ikhlas_assets/images/header-bg.jpg" alt="">
                            </a>
                        </div>
                        <div class="header-banner">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>ikhlas_assets/images/header-banner.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header section end-->
<!--main menu section start-->
<section class="main-menu-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="main-menu-wrapper"> 
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
</section>
<!--main menu section end-->
<!--main content wrapper start-->
<section class="main-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="left-sidebar-wrapper">
                    <div class="sidebar-widget">
                        <div class="sidebar-widget-title">
                            <h3>widget title</h3>
                        </div>
                        <div class="widget-cont">
                            <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                            <div class="sidebar-action-btn">
                                <a href="#">PDF Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <div class="widget-cont">
                            <div class="notice-board">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <div class="sidebar-widget-title">
                            <h3>widget title</h3>
                        </div>
                        <div class="widget-cont">
                            <div class="sidebar-post-list">
                                <ul>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                        fugiat.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                        fugiat.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                        fugiat.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                        fugiat.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">  
            <?php $articles = get_category_articles(2); ?>
            <?php if (count($articles) > 0) : ?>
                        <div class="single-category-item">
  
                <div class="post-wrapper">
                    <div class="post-section-title">
                    <a href="<?php echo base_url(); ?>category_archive/2">  <h2>
                                <?php echo "Category name";//$category->name; ?>
                            </h2>                       
</a>
                    </div>
                    <div class="article-wrapper">
                        <div class="big-post-widget"> 
                  
                   
                            <?php foreach ($articles as $article): ?>
                                <div class="cat-post-title">
                                    <?php $writer_name = ($article->id > 1) ? $article->writer_name : $article->writer; ?>
                                    <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                        <i class="fa fa-long-arrow-right" style="color: rebeccapurple;"></i>
                                        <span class="postTitle"  style="font-size:17px;">
                                            <?php echo $article->title; ?> <?= ($writer_name !="" && $writer_name !=".")?" - ":""?>
                                            <span style="font-size:14px;"><?= ($writer_name !=".") ? strip_tags($writer_name):""; ?></span>
                                        </span>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="all-post-link">
                            <a href="<?php echo base_url(); ?>category_archive/2">Show more</a>
                        </div>
                    </div>
                    
                    </div>
                    <?php endif; ?>
                </div>
                <?php $articles = get_category_articles(2); ?>
            <?php if (count($articles) > 0) : ?>
                <div class="post-wrapper">
                    <div class="post-section-title">
                        <h2> <?php echo "Category name";//$category->name; ?></h2>
                    </div>
                    <div class="article-wrapper">
                        <div class="big-post-widget">
                            <div class="big-post-title">
                            <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                        <i class="fa fa-long-arrow-right" style="color: rebeccapurple;"></i>
                                        <span class="postTitle"  style="font-size:17px;">
                                            <?php echo $article->title; ?> <?= ($writer_name !="" && $writer_name !=".")?" - ":""?>
                                            <span style="font-size:14px;"><?= ($writer_name !=".") ? strip_tags($writer_name):""; ?></span>
                                        </span>
                                    </a>
                            </div>
                            <div class="post-meta">
                                <div><span>december 02, 2020</span></div>
                                <div><a href="#"><span>In:</span> সম্পাদকীয়</a></div>
                                <div><a href="#">No comments</a></div>
                            </div>
                            <div class="big-post-content-wrapper">
                                <div class="big-post-thumb">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="big-post-cont">
                                <?php echo $articles[0]->title; ?>

                                </div>
                            </div>
                        </div>
                        <div class="small-post-widget">
                            <ul>

                            <?php foreach ($articles as $article): ?>
                                 
                                <li>
                                    <div class="small-post-content-wrapper">
                                        <div class="small-post-thumb">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="small-post-cont">
                                        <?php $writer_name = ($article->id > 1) ? $article->writer_name : $article->writer; ?>
                                    <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                        <i class="fa fa-long-arrow-right" style="color: rebeccapurple;"></i>
                                        <span class="postTitle"  style="font-size:17px;">
                                            <?php echo $article->title; ?> <?= ($writer_name !="" && $writer_name !=".")?" - ":""?>
                                            <span style="font-size:14px;"><?= ($writer_name !=".") ? strip_tags($writer_name):""; ?></span>
                                        </span>
                                    </a>
                                            <div class="post-meta">
                                                <div><span>december 02, 2020</span></div>
                                                <div><a href="#">No comments</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                        <div class="all-post-link">
                            <a href="<?php echo base_url(); ?>category_archive/2">Show more</a>
                        </div>
                    </div>
                </div>
                
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <div class="right-sidebar-wrapper">
                    <div class="sidebar-widget">
                        <div class="sidebar-widget-title">
                            <h3>widget title</h3>
                        </div>
                        <div class="widget-cont">
                            <div class="old-item">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                                    <p>item title</p>
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                                    <p>item title</p>
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                                    <p>item title</p>
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                                    <p>item title</p>
                                </a>
                            </div>
                        </div>
                        <div class="sidebar-more-btn">
                            <a href="#">see more</a>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <div class="sidebar-widget-title">
                            <h3>widget title</h3>
                        </div>
                        <div class="widget-cont">
                            <div class="sidebar-post-list">
                                <ul>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                        fugiat.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                        fugiat.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                        fugiat.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                        fugiat.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <div class="sidebar-widget-title">
                            <h3>widget title</h3>
                        </div>
                        <div class="widget-cont">
                            <div class="notice-board">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-bannar.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <?php $articles = get_category_articles(2); ?>
            <?php if (count($articles) > 0) : ?>
                <div class="post-wrapper">
                    <div class="post-section-title">
                        <h2> <?php echo "Category name";//$category->name; ?></h2>
                    </div>
                    <div class="article-wrapper">
                        <div class="big-post-widget">
                            <div class="big-post-title">
                            <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                        <i class="fa fa-long-arrow-right" style="color: rebeccapurple;"></i>
                                        <span class="postTitle"  style="font-size:17px;">
                                            <?php echo $article->title; ?> <?= ($writer_name !="" && $writer_name !=".")?" - ":""?>
                                            <span style="font-size:14px;"><?= ($writer_name !=".") ? strip_tags($writer_name):""; ?></span>
                                        </span>
                                    </a>
                            </div>
                            <div class="post-meta">
                                <div><span>december 02, 2020</span></div>
                                <div><a href="#"><span>In:</span> সম্পাদকীয়</a></div>
                                <div><a href="#">No comments</a></div>
                            </div>
                            <div class="big-post-content-wrapper">
                                <div class="big-post-thumb">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="big-post-cont">
                                <?php echo $articles[0]->title; ?>

                                </div>
                            </div>
                        </div>
                        <div class="small-post-widget">
                            <ul>

                            <?php foreach ($articles as $article): ?>
                                 
                                <li>
                                    <div class="small-post-content-wrapper">
                                        <div class="small-post-thumb">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="small-post-cont">
                                        <?php $writer_name = ($article->id > 1) ? $article->writer_name : $article->writer; ?>
                                    <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                        <i class="fa fa-long-arrow-right" style="color: rebeccapurple;"></i>
                                        <span class="postTitle"  style="font-size:17px;">
                                            <?php echo $article->title; ?> <?= ($writer_name !="" && $writer_name !=".")?" - ":""?>
                                            <span style="font-size:14px;"><?= ($writer_name !=".") ? strip_tags($writer_name):""; ?></span>
                                        </span>
                                    </a>
                                            <div class="post-meta">
                                                <div><span>december 02, 2020</span></div>
                                                <div><a href="#">No comments</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                        <div class="all-post-link">
                            <a href="<?php echo base_url(); ?>category_archive/2">Show more</a>
                        </div>
                    </div>
                </div>
                
                <?php endif; ?>
            </div>
            <div class="col-md-6">
            <?php $articles = get_category_articles(2); ?>
            <?php if (count($articles) > 0) : ?>
                <div class="post-wrapper">
                    <div class="post-section-title">
                        <h2> <?php echo "Category name";//$category->name; ?></h2>
                    </div>
                    <div class="article-wrapper">
                        <div class="big-post-widget">
                            <div class="big-post-title">
                            <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                        <i class="fa fa-long-arrow-right" style="color: rebeccapurple;"></i>
                                        <span class="postTitle"  style="font-size:17px;">
                                            <?php echo $article->title; ?> <?= ($writer_name !="" && $writer_name !=".")?" - ":""?>
                                            <span style="font-size:14px;"><?= ($writer_name !=".") ? strip_tags($writer_name):""; ?></span>
                                        </span>
                                    </a>
                            </div>
                            <div class="post-meta">
                                <div><span>december 02, 2020</span></div>
                                <div><a href="#"><span>In:</span> সম্পাদকীয়</a></div>
                                <div><a href="#">No comments</a></div>
                            </div>
                            <div class="big-post-content-wrapper">
                                <div class="big-post-thumb">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="big-post-cont">
                                <?php echo $articles[0]->title; ?>

                                </div>
                            </div>
                        </div>
                        <div class="small-post-widget">
                            <ul>

                            <?php foreach ($articles as $article): ?>
                                 
                                <li>
                                    <div class="small-post-content-wrapper">
                                        <div class="small-post-thumb">
                                            <a href="#">
                                                <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="small-post-cont">
                                        <?php $writer_name = ($article->id > 1) ? $article->writer_name : $article->writer; ?>
                                    <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                        <i class="fa fa-long-arrow-right" style="color: rebeccapurple;"></i>
                                        <span class="postTitle"  style="font-size:17px;">
                                            <?php echo $article->title; ?> <?= ($writer_name !="" && $writer_name !=".")?" - ":""?>
                                            <span style="font-size:14px;"><?= ($writer_name !=".") ? strip_tags($writer_name):""; ?></span>
                                        </span>
                                    </a>
                                            <div class="post-meta">
                                                <div><span>december 02, 2020</span></div>
                                                <div><a href="#">No comments</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                        <div class="all-post-link">
                            <a href="<?php echo base_url(); ?>category_archive/2">Show more</a>
                        </div>
                    </div>
                </div>
                
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!--main content wrapper end-->
<!--footer wrapper start-->
<div class="bottom-banner-widget">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="banner text-center mb-3">
                    <img src="<?php echo base_url(); ?>ikhlas_assets/images/header-banner.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <span class="footer-content">
                    Copyright ©2019-2020 Monthly Al-Ikhlas, Powered By Islamic Research And Reformation Centre. | CloudServerBD | Designed by <a
                        href="http://ginilab.com">Ginilab Ltd.</a>
                </span>
            </div>
        </div>
    </div>
</footer>
<!--footer wrapper end-->

<!--back to top-->
<div class="back_to_top">
    <i class="fa fa-arrow-up"></i>
</div>
<!--back to end-->
<script src="<?php echo base_url(); ?>ikhlas_assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="<?php echo base_url(); ?>ikhlas_assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>ikhlas_assets/js/custom.js"></script>
</body>
</html>
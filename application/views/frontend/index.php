<div class="col-lg-3 order-lg-0 order-md-3 order-3">
    <div class="left-sidebar-wrapper">

        <div class="base-box">
            <header class="nb-header" style="background:var(--theme-color);">
                <h2 class="nb-title"><a href="<?php echo base_url(); ?>monthly_archive/<?php echo $bookinfo->id; ?>" style="background:var(--theme-color);color:#fff"><?= $bookinfo->title; ?></a></h2>
            </header>
            <div class="widget-cont">
                <img src="<?php echo base_url('assets/site/images/' . $bookinfo->cover_photo); ?>" alt="" />
                <div class="sidebar-action-btn">
                    <a target="_blank" href="<?php echo $bookinfo->pdf_url; ?>">PDF Download</a>
                </div>

            </div>
        </div>
    </div>
    <div class="notice-board">

        <div class="notice-item" style="">
            <?php foreach ($notices as $notice) : ?>
                <?php if ($notice->position == 0) : ?>

                    <a target="_blank" href="<?php echo $notice->link_address; ?>" class="snotice-board-list">
                        <img src="<?php echo base_url('assets/site/notice/' . $notice->image_url); ?>" alt="<?php echo $notice->notice_title; ?>">
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <?php $articles = get_category_articles(4); ?>

    <?php if (count($articles) > 0) : ?>


        <div class="base-box">
                <header class="nb-header" style="background:var(--theme-color);">
                    <h2 class="nb-title"><a href="<?php echo base_url(); ?>category_archive/4" style="background:var(--theme-color);color:#fff"><?php echo category_name(4); ?> </a></h2>
                </header>

            <div class="widget-cont">
                <div class="sidebar-post-list">
                    <ul>
                        <?php foreach ($articles as $article) : ?>

                            <li><a href="<?php echo base_url('article_details/' . $article->id); ?>" style="font-size:17px;"><i class="fa fa-edit"></i> <?php echo $article->title; ?></a>
                            </li>


                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <?php $articles = get_category_articles(7); ?>

    <?php if (count($articles) > 0) : ?>


        <div class="base-box">
                <header class="nb-header" style="background:var(--theme-color);">
                    <h2 class="nb-title"><a href="<?php echo base_url(); ?>category_archive/7" style="background:var(--theme-color);color:#fff"><?php echo category_name(7); ?> </a></h2>
                </header>

            <div class="widget-cont">
                <div class="sidebar-post-list">
                    <ul>
                        <?php foreach ($articles as $article) : ?>

                            <li><a href="<?php echo base_url('article_details/' . $article->id); ?>" style="font-size:17px;"><i class="fa fa-edit"></i> <?php echo $article->title; ?></a>
                            </li>


                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

    <?php endif; ?>

</div>

<div class="col-lg-6 order-lg-1 order-md-0 order-0">
    <?php $editor_article = get_category_articles(1); ?>
    <?php if (count($editor_article) > 0) : ?>
        <div class="single-category-item">
            <div class="base-box">
                <header class="nb-header" style="background:var(--theme-color);">
                    <h2 class="nb-title"><a href="<?php echo base_url(); ?>category_archive/1" style="background:var(--theme-color);color:#fff"><?php echo category_name(1); ?> </a></h2>
                </header>

                <div class="article-wrapper">
                    <div class="big-post-widget">
                        <div class="big-post-title">
                            <a href="<?php echo base_url('article_details/' . $editor_article[0]->article_id); ?>">
                                <h4> <?php echo $editor_article[0]->title; ?> </h4>
                            </a>

                        </div>
                        <div class="post-meta">
                            <?php $writer_name = ($editor_article[0]->id > 1) ? $editor_article[0]->writer_name : $editor_article[0]->writer; ?>

                            <div><span><?= ($writer_name != "" && $writer_name != ".") ? " - " : "" ?>
                                    <span style="font-size:14px;"><?= ($writer_name != ".") ? strip_tags($writer_name) : ""; ?></span></div>
                            <div><span> <?php echo category_name(2); ?> </div>

                        </div>
                        <div class="big-post-content-wrapper">
                            <div class="big-post-thumb">
                                <a href="#">
                                    <img src="assets/images/sidebar-img.jpg" alt="">
                                </a>
                            </div>
                            <div class="big-post-cont">
                                <p>
                                    <?php echo mb_substr(strip_tags($editor_article[0]->description), 0, 200, 'UTF-8'); ?> <a href="<?php echo base_url('article_details/' . $editor_article[0]->article_id); ?>">...read more <i class="fa fa-angle-double-right"></i></a>

                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- <div class="all-post-link">
                        <a href="<?php echo base_url('article_details/' . $editor_article[0]->article_id); ?>">Show more</a>
                    </div> -->
                </div>
            </div>


        </div>
    <?php endif; ?>


    <div class="row">


        <?php $articles = get_category_articles(2); ?>
        <?php if (count($articles) > 0) : ?>

            <div class="col-lg-6">
                <div class="base-box">
                    <header class="nb-header" style="background:var(--theme-color);">
                        <h2 class="nb-title"><a href="<?php echo base_url(); ?>category_archive/2" style="background:var(--theme-color);color:#fff"><?php echo category_name(1); ?> </a></h2>
                    </header>

                    <div class="article-wrapper">
                        <div class="small-post-widget listview">
                            <ul>
                                <?php foreach ($articles as $article) : ?>

                                    <li>
                                        <div class="small-post-content-wrapper">
                                            <div class="small-post-thumb">
                                                <a href="#">
                                                    <img src="<?php echo base_url() ?>/ikhlas_assets/images/sidebar-img.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="small-post-cont">
                                                <?php $writer_name = ($article->id > 1) ? $article->writer_name : $article->writer; ?>
                                                <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                                    <span class="postTitle" style="font-size:17px;">
                                                        <?php echo $article->title; ?>

                                                    </span>
                                                </a>
                                                <div class="post-meta">
                                                    <div><span><?= ($writer_name != ".") ? strip_tags($writer_name) : ""; ?></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>
        <?php $articles = get_category_articles(3); ?>
        <?php if (count($articles) > 0) : ?>

            <div class="col-lg-6">
                <div class="base-box">
                    <header class="nb-header" style="background:var(--theme-color);">
                        <h2 class="nb-title"><a href="<?php echo base_url(); ?>category_archive/3" style="background:var(--theme-color);color:#fff"><?php echo category_name(3); ?> </a></h2>
                    </header>

                    <div class="article-wrapper">
                        <div class="small-post-widget listview">
                            <ul>
                                <?php foreach ($articles as $article) : ?>

                                    <li>
                                        <div class="small-post-content-wrapper">
                                            <div class="small-post-thumb">
                                                <a href="#">
                                                    <img src="<?php echo base_url() ?>/ikhlas_assets/images/sidebar-img.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="small-post-cont">
                                                <?php $writer_name = ($article->id > 1) ? $article->writer_name : $article->writer; ?>
                                                <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                                    <span class="postTitle" style="font-size:17px;">
                                                        <?php echo $article->title; ?>

                                                    </span>
                                                </a>
                                                <div class="post-meta">
                                                    <div><span><?= ($writer_name != ".") ? strip_tags($writer_name) : ""; ?></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>


    <?php $articles = get_category_articles(8); ?>

    <?php if (count($articles) > 0) : ?>



        <div class="base-box">
            <header class="nb-header" style="background:var(--theme-color);">
                <h2 class="nb-title"><a href="<?php echo base_url(); ?>category_archive/8" style="background:var(--theme-color);color:#fff"><?php echo category_name(8); ?> </a></h2>
            </header>

            <div class="widget-cont">
                <div class="sidebar-post-list">
                    <ul>
                        <?php foreach ($articles as $article) : ?>

                            <li><a href="<?php echo base_url('article_details/' . $article->id); ?>" style="font-size:17px;"><i class="fa fa-edit"></i> <?php echo $article->title; ?></a>
                            </li>


                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>



</div>
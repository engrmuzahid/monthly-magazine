
            <div class="col-lg-3 order-lg-0 order-md-3 order-3">
                <div class="left-sidebar-wrapper">
                    <div class="sidebar-widget">
                        <div class="sidebar-widget-title">
                            <h3><?= $bookinfo->title; ?></h3>
                        </div>
                        <div class="widget-cont">
                            <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg" alt="">
                            <div class="sidebar-action-btn">
                                <a href="#">PDF Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="notice-board">
                   
                   <div class="notice-item" style="">
                        <?php foreach($notices as $notice) : ?>
                        <?php if($notice->position ==0) : ?>

                        <a target="_blank" href="<?php echo $notice->link_address; ?>" class="snotice-board-list">
                            <img src="<?php echo base_url('assets/site/notice/'.$notice->image_url); ?>" alt="<?php echo $notice->notice_title; ?>">
                        </a>
                        <?php endif; ?>
                        <?php endforeach; ?>
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
            <div class="col-lg-6 order-lg-1 order-md-0 order-0">
                <?php $articles = get_category_articles(2); ?>
                <?php if (count($articles) > 0) : ?>
                <div class="single-category-item">
                    <div class="post-wrapper">
                        <div class="post-section-title">
                            <a href="<?php echo base_url(); ?>category_archive/2"><h2>
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
                                            <span class="postTitle" style="font-size:17px;">
                                            <?php echo $article->title; ?> <?= ($writer_name != "" && $writer_name != ".") ? " - " : "" ?>
                                                <span style="font-size:14px;"><?= ($writer_name != ".") ? strip_tags($writer_name) : ""; ?></span>
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
                                        <span class="postTitle" style="font-size:17px;">
                                            <?php echo $article->title; ?> <?= ($writer_name != "" && $writer_name != ".") ? " - " : "" ?>
                                            <span style="font-size:14px;"><?= ($writer_name != ".") ? strip_tags($writer_name) : ""; ?></span>
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
                                            <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg"
                                                 alt="">
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
                                                        <img src="<?php echo base_url(); ?>ikhlas_assets/images/sidebar-img.jpg"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <div class="small-post-cont">
                                                    <?php $writer_name = ($article->id > 1) ? $article->writer_name : $article->writer; ?>
                                                    <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                                        <i class="fa fa-long-arrow-right"
                                                           style="color: rebeccapurple;"></i>
                                                        <span class="postTitle" style="font-size:17px;">
                                            <?php echo $article->title; ?> <?= ($writer_name != "" && $writer_name != ".") ? " - " : "" ?>
                                                            <span style="font-size:14px;"><?= ($writer_name != ".") ? strip_tags($writer_name) : ""; ?></span>
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
                <div class="row">
                    <div class="col-lg-6">
                        <div class="post-wrapper">
                            <div class="post-section-title">
                                <h2>section title</h2>
                            </div>
                            <div class="article-wrapper">
                                <div class="small-post-widget listview">
                                    <ul>
                                        <li>
                                            <div class="small-post-content-wrapper">
                                                <div class="small-post-thumb">
                                                    <a href="#">
                                                        <img src="<?php echo base_url()?>/ikhlas_assets/images/sidebar-img.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="small-post-cont">
                                                    <a href="#">
                                                        ধর্ষণ, খুন, গুম, নারী নির্যাতন : মধ্যযুগীয় বর্বরতার নব-সংস্করণ
                                                    </a>
                                                    <div class="post-meta">
                                                        <div><span>december 02, 2020</span></div>
                                                        <div><a href="#">No comments</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="small-post-content-wrapper">
                                                <div class="small-post-thumb">
                                                    <a href="#">
                                                        <img src="<?php echo base_url()?>/ikhlas_assets/images/sidebar-img.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="small-post-cont">
                                                    <a href="#">
                                                        ধর্ষণ, খুন, গুম, নারী নির্যাতন : মধ্যযুগীয় বর্বরতার নব-সংস্করণ
                                                    </a>
                                                    <div class="post-meta">
                                                        <div><span>december 02, 2020</span></div>
                                                        <div><a href="#">No comments</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="small-post-content-wrapper">
                                                <div class="small-post-thumb">
                                                    <a href="#">
                                                        <img src="<?php echo base_url()?>/ikhlas_assets/images/sidebar-img.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="small-post-cont">
                                                    <a href="#">
                                                        ধর্ষণ, খুন, গুম, নারী নির্যাতন : মধ্যযুগীয় বর্বরতার নব-সংস্করণ
                                                    </a>
                                                    <div class="post-meta">
                                                        <div><span>december 02, 2020</span></div>
                                                        <div><a href="#">No comments</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="small-post-content-wrapper">
                                                <div class="small-post-thumb">
                                                    <a href="#">
                                                        <img src="<?php echo base_url()?>/ikhlas_assets/images/sidebar-img.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="small-post-cont">
                                                    <a href="#">
                                                        ধর্ষণ, খুন, গুম, নারী নির্যাতন : মধ্যযুগীয় বর্বরতার নব-সংস্করণ
                                                    </a>
                                                    <div class="post-meta">
                                                        <div><span>december 02, 2020</span></div>
                                                        <div><a href="#">No comments</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="all-post-link">
                                    <a href="#">Show more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="post-wrapper">
                            <div class="post-section-title">
                                <h2>section title</h2>
                            </div>
                            <div class="article-wrapper">
                                <div class="small-post-widget listview">
                                    <ul>
                                        <li>
                                            <div class="small-post-content-wrapper">
                                                <div class="small-post-thumb">
                                                    <a href="#">
                                                        <img src="<?php echo base_url()?>/ikhlas_assets/images/sidebar-img.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="small-post-cont">
                                                    <a href="#">
                                                        ধর্ষণ, খুন, গুম, নারী নির্যাতন : মধ্যযুগীয় বর্বরতার নব-সংস্করণ
                                                    </a>
                                                    <div class="post-meta">
                                                        <div><span>december 02, 2020</span></div>
                                                        <div><a href="#">No comments</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="small-post-content-wrapper">
                                                <div class="small-post-thumb">
                                                    <a href="#">
                                                        <img src="<?php echo base_url()?>/ikhlas_assets/images/sidebar-img.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="small-post-cont">
                                                    <a href="#">
                                                        ধর্ষণ, খুন, গুম, নারী নির্যাতন : মধ্যযুগীয় বর্বরতার নব-সংস্করণ
                                                    </a>
                                                    <div class="post-meta">
                                                        <div><span>december 02, 2020</span></div>
                                                        <div><a href="#">No comments</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="small-post-content-wrapper">
                                                <div class="small-post-thumb">
                                                    <a href="#">
                                                        <img src="<?php echo base_url()?>/ikhlas_assets/images/sidebar-img.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="small-post-cont">
                                                    <a href="#">
                                                        ধর্ষণ, খুন, গুম, নারী নির্যাতন : মধ্যযুগীয় বর্বরতার নব-সংস্করণ
                                                    </a>
                                                    <div class="post-meta">
                                                        <div><span>december 02, 2020</span></div>
                                                        <div><a href="#">No comments</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="small-post-content-wrapper">
                                                <div class="small-post-thumb">
                                                    <a href="#">
                                                        <img src="<?php echo base_url()?>/ikhlas_assets/images/sidebar-img.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="small-post-cont">
                                                    <a href="#">
                                                        ধর্ষণ, খুন, গুম, নারী নির্যাতন : মধ্যযুগীয় বর্বরতার নব-সংস্করণ
                                                    </a>
                                                    <div class="post-meta">
                                                        <div><span>december 02, 2020</span></div>
                                                        <div><a href="#">No comments</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="all-post-link">
                                    <a href="#">Show more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--             
            <div class="col-lg-3 order-lg-2 order-md-2 order-2">
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
            </div> -->
       

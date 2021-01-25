<div class="col-lg-3 order-lg-2 order-md-2 order-2">
    <?php if ($page_type == 'single_page') : ?>

        <div class="base-box">
            <header class="nb-header" style="background:var(--theme-color);">
                <h2 class="nb-title"><span>সর্বশেষ প্রবন্ধ</span></h2>
            </header>

            <div class="widget-cont">
                <ul>
                    <?php foreach ($latest_articles as $article) : ?>
                        <li><a href="<?php echo base_url('article_details/' . $article->id); ?>"><i class="fa fa-edit"></i> <?php echo $article->title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    <?php elseif ($page_type == 'writer_archive') : ?>
        <div class="post-section-title">
            <h2>লেখকগণ</h2>
        </div>
        <div class="widget-cont">
            <ul>
                <?php foreach ($writer_list as $writer) : ?>
                    <li><a href="<?php echo base_url('writer_archive/' . $writer->id); ?>"><i class="fa fa-user"></i><?php echo $writer->writer_name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php elseif ($page_type == 'category_archive') : ?>
        <div class="post-section-title">
            <h2>বিভাগসমূহ</h2>
        </div>
        <div class="widget-cont">
            <ul>
                <?php foreach ($sidebar_categories as $category) : ?>
                    <li><a href="<?php echo base_url('category_archive/' . $category->id); ?>"><?php echo $category->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php elseif ($page_type == 'subject_archive') : ?>
        <div class="post-section-title">
            <h2>বিষয়সমূহ</h2>
        </div>
        <div class="widget-cont">
            <ul>
                <?php foreach ($sidebar_subjects as $subject) : ?>
                    <li><a href="<?php echo base_url('subject_archive/' . $subject->id); ?>"><i class="fa fa-edit"></i> <?php echo $subject->subject_name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php elseif ($page_type == 'monthly_archive') : ?>
        <div class="base-box">
            <header class="nb-header" style="background:var(--theme-color);">
                <h2 class="nb-title"><span>পুরাতন সংখ্যা</span></h2>
            </header>
        <div class="old-number-posts">
            <div class="row" style="margin-top:20px;">
                
                <?php foreach ($old_items as $old_item) : ?>
                    <div class="col-lg-6">
                        <div class="single-item">
                            <a href="<?php echo base_url('monthly_archive/' . $old_item->id); ?>">
                                <img src="<?php echo base_url('assets/site/images/' . $old_item->cover_photo); ?>" alt="">
                            </a>
                            <h5><a href="<?php echo base_url('monthly_archive/' . $old_item->id); ?>"><?php echo $old_item->title; ?></a></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            </div>
            
            <div class="old-post-more-link" style="text-align: center;background:var(--theme-color);color:#fff;padding:10px;">
                <a href="<?php echo base_url('monthly_archive'); ?>" class="ex-style text-center read-more">আরও</a>
            </div>
         </div>
    <?php else : ?>

    <?php endif; ?>
    <?php if ($page_type !== 'monthly_archive') : ?>
        <div class="base-box">
            <header class="nb-header" style="background:var(--theme-color);">
                <h2 class="nb-title"><span>পুরাতন সংখ্যা</span></h2>
            </header>
            <div class="old-number-posts">
            <div class="row" style="margin-top:20px;">
                    <?php foreach ($old_items as $old_item) : ?>
                        <div class="col-lg-6">
                            <div class="single-item">
                                <a href="<?php echo base_url('monthly_archive/' . $old_item->id); ?>">
                                    <img src="<?php echo base_url('assets/site/images/' . $old_item->cover_photo); ?>" alt="">
                                </a>
                                <h5><a href="<?php echo base_url('monthly_archive/' . $old_item->id); ?>"><?php echo $old_item->title; ?></a></h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="old-post-more-link" style="text-align: center;background:var(--theme-color);color:#fff;padding:10px;">
                <a href="<?php echo base_url('monthly_archive'); ?>" class="ex-style text-center read-more">আরও</a>
            </div>
        </div>
    <?php endif; ?>

    <div class="base-box">
        <header class="nb-header" style="background:var(--theme-color);">
            <h2 class="nb-title"><span>সর্বাধিক পঠিত প্রবন্ধ</span></h2>
        </header>
        <div class="widget-cont">
            <ul>
                <?php foreach ($important_articles as $article) : ?>
                    <li><a href="<?php echo base_url('article_details/' . $article->id); ?>"><i class="fa fa-edit"></i> <?php echo $article->title; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

        <?php if ($notices && !empty($page_type) && ($page_type == 'home_page' || $page_type == 'single_page')) : ?>
            <div class="notice-board">

                <div class="notice-item" style="">
                    <?php foreach ($notices as $notice) : ?>
                        <?php if ($notice->position == 1) : ?>
                            <a target="_blank" href="<?php echo $notice->link_address; ?>" class="snotice-board-list">
                                <img src="<?php echo base_url('assets/site/notice/' . $notice->image_url); ?>" alt="<?php echo $notice->notice_title; ?>">
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($page_type !== 'single_page') : ?>

            <div class="base-box">
                <header class="nb-header" style="background:var(--theme-color);">
                    <h2 class="nb-title"><span>সর্বশেষ প্রবন্ধ</span></h2>
                </header>
                <div class="widget-cont">
                    <ul>
                        <?php foreach ($latest_articles as $article) : ?>
                            <li><a href="<?php echo base_url('article_details/' . $article->id); ?>"><i class="fa fa-edit"></i> <?php echo $article->title; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
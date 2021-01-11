<div class="col-md-3 col-sm-12 default_margin" style="margin-top:30px;">
                <?php if($page_type == 'single_page') : ?>
                <div class="popular-item">
                    <h3>সর্বশেষ প্রবন্ধ</h3>
                    <ul>
                    <?php foreach($latest_articles as $article) : ?>
                        <li><a href="<?php echo base_url('article_details/'.$article->id); ?>"><?php echo $article->title; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                <?php elseif($page_type == 'writer_archive') : ?>
                    <div class="popular-item">
                        <h3>লেখকগণ</h3>
                        <ul>
                        <?php foreach($writer_list as $writer) : ?>
                            <li><a href="<?php echo base_url('writer_archive/'.$writer->id); ?>"><?php echo $writer->writer_name; ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                <?php elseif($page_type == 'category_archive') : ?>
                    <div class="popular-item">
                        <h3>বিভাগসমূহ</h3>
                        <ul>
                            <?php foreach($sidebar_categories as $category) : ?>
                            <li><a href="<?php echo base_url('category_archive/'.$category->id); ?>"><?php echo $category->name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php elseif($page_type == 'subject_archive') : ?>
                    <div class="popular-item">
                        <h3>বিষয়সমূহ</h3>
                        <ul>
                            <?php foreach($sidebar_subjects as $subject) : ?>
                            <li><a href="<?php echo base_url('subject_archive/'.$subject->id); ?>"><?php echo $subject->subject_name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php elseif($page_type == 'monthly_archive') : ?>
                    <div class="popular-item">
                        <h3>পুরাতন সংখ্যা</h3>
                    </div>
                    <div class="old-number-posts">
                        <div class="row">
                            <?php foreach($old_items as $old_item) : ?>
                            <div class="col-md-6">
                                <div class="single-item">
                                    <a href="<?php echo base_url('monthly_archive/'.$old_item->id); ?>">
                                        <img src="<?php echo base_url('assets/site/images/'.$old_item->cover_photo); ?>" alt="">
                                    </a>
                                    <h4><a href="<?php echo base_url('monthly_archive/'.$old_item->id); ?>"><?php echo $old_item->title; ?></a></h4>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else : ?>

                <?php endif; ?>
                        <?php if($page_type !== 'monthly_archive') : ?>
                        <div class="popular-item">
                            <h3>পুরাতন সংখ্যা</h3>
                        </div>
                       
 <div class="old-number-posts">
                            <div class="row">
                                <?php foreach($old_items as $old_item) : ?>
                                <div class="col-md-6">
                                    <div class="single-item">
                                        <a href="<?php echo base_url('monthly_archive/'.$old_item->id); ?>">
                                            <img src="<?php echo base_url('assets/site/images/'.$old_item->cover_photo); ?>" alt="">
                                        </a>
                                        <h4><a href="<?php echo base_url('monthly_archive/'.$old_item->id); ?>"><?php echo $old_item->title; ?></a></h4>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="old-post-more-link">
                            <a href="<?php echo base_url('monthly_archive'); ?>" class="ex-style text-center read-more">আরও</a>
                        </div>
                        
                        <?php endif; ?>
            
                <div class="popular-post-section">
                        <div class="popular-item">
                            <h3>সর্বাধিক পঠিত প্রবন্ধ</h3>
                            <ul>
                            <?php foreach($important_articles as $article) : ?>
                                <li><a href="<?php echo base_url('article_details/'.$article->id); ?>"><?php echo $article->title; ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                            <?php if($notices && !empty($page_type) && ($page_type == 'home_page' || $page_type == 'single_page')) : ?>
                <div class="notice-board">
                    <div class="popular-item" >
                        <h3>নোটিশ বোর্ড</h3>
                    </div>
                    <div class="notice-item" style="">
                        <?php foreach($notices as $notice) : ?>
                          <?php if($notice->position ==1) : ?>
                        <a target="_blank" href="<?php echo $notice->link_address; ?>" class="snotice-board-list">
                            <img src="<?php echo base_url('assets/site/notice/'.$notice->image_url); ?>" alt="<?php echo $notice->notice_title; ?>">
                        </a>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
                        <?php if($page_type !== 'single_page') : ?>
                        <div class="popular-item">
                            <h3>সর্বশেষ প্রবন্ধ</h3>
                            <ul>
                            <?php foreach($latest_articles as $article) : ?>
                                <li><a href="<?php echo base_url('article_details/'.$article->id); ?>"><?php echo $article->title; ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        


                </div>
              

.
            </div>
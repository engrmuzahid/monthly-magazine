<style>
    .new-category-post-design {
        overflow: hidden;
        margin-bottom: 50px;
    }

    .new-category-post-design .single-category-item {
        margin-bottom: 25px;
        padding: 10px;
        -webkit-box-shadow: 0 0 10px #c5c2c2;
        -moz-box-shadow: 0 0 10px #c5c2c2;
        box-shadow: 0 0 10px #c5c2c2;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
    }
    .new-category-post-design .single-category-item:after {
        position: absolute;
        content: '';
        right: 0;
        bottom: 0;
        background-image: url('../../../theme_assets/images/tahreek-hr-icon.png');
        width: 100px;
        height: 100px;
    }

    /*.new-category-post-design .single-category-item h3 {
        color: #007146;
        border-bottom: 1px solid #ddd;
        padding-bottom: 5px;
        margin-bottom: 15px;
        margin-top: 0;
    }*/
    .new-category-post-design .single-category-item h3 {
        position: relative;
        color: #fff;
        padding: 10px 30px;
        margin-bottom: 15px;
        margin-top: 0;
        background: #75AE47;
        display: inline-block;
        font-size: 1.2em;
        border-radius: 30px;
    }
    .new-category-post-design .single-category-item h3 img {
        width: 15px;
        position: absolute;
        left: 9px;
        top: 50%;
        transform: translateY(-50%);
    }
    .new-category-post-design .single-category-item .cat-post-title {
        margin-bottom: 10px;
    }

    .new-category-post-design .single-category-item .cat-post-title a span {
        color: #007146;
        font-style: italic;
    }

    .new-category-post-design .single-category-item .cat-post-title a {
        font-size: 19px;
        color: #000;
        line-height: 30px;
    }

    .new-category-post-design .single-category-item .cat-post-title a span {
        font-size: 17px;
        font-weight: 400;
    }
    .new-category-post-design .single-category-item .cat-post-title a {
        display: grid;
        grid-template-columns: auto 1fr;
    }
    
    .new-category-post-design .single-category-item .cat-post-title a i {
        position: relative;
        top: 4px;
        margin-right: 5px;
    }
    
    .new-category-post-design .single-category-item .cat-post-title a span.postTitle {
        color: initial;
        font-size: initial;
        font-style: initial;
        font-weight: initial;
    }
    .download-book {
        background: #e2e3e5;
        padding: 12px;
        text-align: center;
    }
    .download-book a {
        background: #75AE47;
        display: inline-block;
        padding: 10px 20px;
        margin-top: 15px;
        color: #fff;
        text-transform: uppercase;
        border-radius: 3px;
    }

</style>
<div class="col-md-9 col-sm-12 default_margin">
    <div class="new-category-post-design">
        <div class="row">
            <div class="col-md-4 mobile-hide">
                <div class="popular-item">
<h3 style="margin:0;">২৪তম বর্ষ ৪র্থ সংখ্যা<br>জানুয়ারী ২০২১</h3>
<div class="download-book">
                        <img src="<?php echo base_url('assets/site/images/'.$bookinfo->cover_photo); ?>" alt="" />
                        <a target="_blank" href="<?php echo $bookinfo->pdf_url; ?>">PDF Download</a>                    </div>
                </div>
                <hr>
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
            </div>
            <div class="col-md-8">
                <?php foreach ($categories as $category): ?>
                    <?php $articles = get_category_articles($category->id); ?>
                    <?php if (count($articles) > 0) : ?>
                        <div class="single-category-item">
                          <a href="https://at-tahreek.com/category_archive/<?php echo $category->id; ?>">  <h3>
                                <?php echo $category->name; ?>
                            </h3>
</a>
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
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<style>
    .subjects span {
        padding: 5px 10px;
        background: #797A7E;
        color: #fff;
        border-radius: 2px;
        margin-right: 15px;
    }

    .subjects {
        margin: 30px 0;
    }

    .subjects a {
        margin-right: 8px;
        font-weight: 700;
    }

    .article-details p {
        line-height: 28px !important;
    }

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
 
</style>
<div class="col-md-9 col-sm-12 default_margin">
    <div class="article-details">

        <?php echo $article_details->description; ?>
        <br>
        <?php echo $article_details->reference; ?>
        <br>
        <div class="bread-artile-info">
            <div class="sharethis-inline-share-buttons"></div>
            <!--<ul class="share_btn">-->

            <!--    <li><script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='2';(function(){var js,pf;pf=document.createElement('script');pf.type='text/javascript';pf.src='//cdn.printfriendly.com/printfriendly.js';document.getElementsByTagName('head')[0].appendChild(pf)})();</script><a href="https://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="//cdn.printfriendly.com/buttons/printfriendly-pdf-email-button-md.png" alt="Print"/></a></li>-->
            <!--</ul>-->
        </div>

        <br><br> <?php
                    $this->db->select('subject.id,subject.subject_name');
                    $this->db->from('subject');
                    $this->db->join('subject_relation', 'subject_relation.subject_id = subject.id');
                    $this->db->where('subject_relation.article_id', $article_details->id);
                    $subjects = $this->db->get()->result();
                    if ($subjects) :
                    ?>
            <div class="subjects">
                <span>বিষয়সমূহ: </span>
                <?php foreach ($subjects as $subject) : ?>
                    <a href="<?php echo site_url('subject_archive/' . $subject->id); ?>"><?php echo $subject->subject_name; ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <!--<div class="comments-section">          -->
    <!--    <div class="comment-form">-->
    <!--        <h3>আপনার মন্তব্য</h3>-->
    <!--        <form id="comment_form" action="<?php echo base_url('Welcome/comment_store') ?>" method="POST">-->
    <!--            <input type="hidden" name="article_id" value="<?php echo $article_details->id; ?>">-->
    <!--            <input type="text" id="commenter_name" name="commenter_name" placeholder="আপনার নাম *">-->
    <!--            <input type="email" id="commenter_email" name="commenter_email" placeholder="আপনার ই-মেইল *">-->
    <!--            <textarea id="comment" name="comment" placeholder="মন্তব্য"></textarea>-->
    <!--            <input type="submit" id="submit_comment" value="Submit">-->
    <!--        </form>-->
    <!--        <div id="c_successDiv"></div>-->
    <!--    </div>-->
    <!--<?php if ($comment_list) : ?>-->
    <!--    <div class="comments-list">-->
    <!--        <h3><?php echo count($comment_list); ?> Comments on this post</h3>-->
    <!--    <?php foreach ($comment_list as $comment) : ?>-->
    <!--        <div class="single-comment">-->
    <!--            <div class="comment-author-img">-->
    <!--                <img src="<?= base_url(); ?>attahreek_user.png" alt="">-->
    <!--            </div>-->
    <!--            <div class="comment-content">-->
    <!--                <h4><?php echo $comment->commenter_name; ?></h4>-->
    <!--<h5><?php echo $comment->commenter_email; ?></h5>-->
    <!--                <p><?php echo $comment->comment; ?></p>-->
    <!-- <a href="" class="commments-replay-link">Reply</a> -->
    <!--            </div>-->
    <!--        </div>-->
    <!--    <?php endforeach; ?>-->
    <!--    </div>-->
    <!--<?php endif; ?>-->
    <!--</div>-->


    <?php
    $related_articles = get_related_articles_by_category($category_info->id);
    if ($related_articles) :
    ?>
        <div class="related-articles new-category-post-design">
            <div class="popular-item">
                <h3>এ বিভাগের আরও প্রবন্ধ </h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="single-category-item">
                        <?php foreach ($related_articles as $article) : ?>
                            <div class="cat-post-title">
                                <?php $writer_name = ($article->id > 1) ? $article->writer_name : $article->writer;

                                ?>
                                <a href="<?php echo base_url('article_details/' . $article->article_id); ?>">
                                    <i class="fa fa-long-arrow-right" style="color: rebeccapurple;"></i>
                                    <span class="postTitle">
                                        <?php echo $article->title; ?> <?= ($writer_name != "") ? " - " : "" ?> <span style="font-size:14px"><?php echo strip_tags($writer_name); ?></span>
                                    </span>
                                </a>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
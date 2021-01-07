<style>
    .new-category-post-design {
    overflow: hidden;
    margin-bottom: 50px;
}

.new-category-post-design .single-category-item {
    margin-bottom: 25px;
}

.new-category-post-design .single-category-item h3 {
    color: #007146;
    border-bottom: 1px solid #ddd;
    padding-bottom: 5px;
    margin-bottom: 15px;
    margin-top: 0;
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
</style>
<div class="col-md-9 col-sm-12 default_margin">
    <div class="new-category-post-design">
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($sidebar_categories as  $category): ?>
                    <?php $articles = get_monthly_category_articles($month_id, $category->id); ?>
                    <?php if(count($articles) > 0) : ?>
                    <div class="single-category-item">
                           <a href="https://at-tahreek.com/category_archive/<?php echo $category->id; ?>">  <h3>
                                <?php echo $category->name; ?>
                            </h3>
</a>
                        <?php foreach ($articles as  $article): ?>
                        <div class="cat-post-title">
                            <?php $writer_name = ($article->id > 1) ? $article->writer_name : $article->writer; ?>
                            <a href="<?php echo base_url('article_details/'.$article->article_id); ?>"><i class="fa fa-edit"></i> <?php echo $article->title; ?>
                          <span class="postTitle"  style="font-size:17px;"> <?= ($writer_name !="" && $writer_name !=".")?" - ":""?>
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
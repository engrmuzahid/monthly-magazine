<div class="row">
    <div class="col-md-12">
    <div class="cat_post_area">
        <div class="row">
            <?php foreach ($homepage_categories as $category): ?>

                <div class="col-md-3 col-sm-6">
                    <div class="single_cat_post">
                        <div class="single_cat_name">
                            <h5  style="font-size:1.2em;"><?php echo $category->name; ?></h5>
                            <?php $articles = get_five_articles($category->id); ?>
                            <div class="single_cat_content">
                                <ul>
                                    <?php foreach ($articles as $article): ?>

                                        <li>
                                            <a href="<?php echo base_url('article_details/' . $article->id); ?>" style="font-size:17px;"><?php echo $article->title; ?></a>
                                        </li>

                                    <?php endforeach; ?>
                                </ul>
                                <a href="<?php echo base_url('category_archive/' . $category->id); ?>"
                                   class="ex-style text-center read-more">আরও</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>
</div>
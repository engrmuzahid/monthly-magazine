
            <?php foreach ($homepage_categories as $category): ?>
                <?php $articles = get_five_articles($category->id); ?>
                <?php if (count($articles) > 0) : ?>
                
<div class="col-lg-3 col-sm-6">
         <div class="post-section-title">
            <h2  style="font-size:1.2em;"><?php echo $category->name; ?></h2>
        </div>
            <div class="single_cat_content widget-cont">
                <ul>
                    <?php foreach ($articles as $article): ?>

                        <li>
                        <i class="fa fa-edit"></i> <a href="<?php echo base_url('article_details/' . $article->id); ?>" style="font-size:17px;"><?php echo $article->title; ?></a>
                        </li>

                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo base_url('category_archive/' . $category->id); ?>"
                   class="ex-style text-center read-more">আরও</a>
            </div> 
    </div> 
    <?php endif; ?>
<?php endforeach; ?> 
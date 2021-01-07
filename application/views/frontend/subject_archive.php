<div class="col-md-9 archive-page">
    <?php foreach($subject_articles as $article) : ?>
    <div class="category_article_list">
       <h3><a href="<?php echo base_url('article_details/'.$article->id); ?>"><?php echo $article->title; ?></a></h3>
       <p><?php echo mb_substr(strip_tags($article->description), 0, 250); ?></p>
       <a href="<?php echo base_url('article_details/'.$article->id); ?>" class="read-more">Read More</a>
    </div>
    <?php endforeach; ?>
</div>
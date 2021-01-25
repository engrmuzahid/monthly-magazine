<div class="col-md-9 archive-page">

    <?php foreach($category_articles as $article) : ?>

    <div class="category_article_list">

       <h3><a href="<?php echo base_url('article_details/'.$article->id); ?>"><?php echo $article->title; ?></a></h3>
<?php if($show_status >0): ?>
    <p><?php echo strip_tags($article->description); ?></p>
 <?php else: ?>

    <p><?php echo mb_substr(strip_tags($article->description), 0, 250); ?></p>

<a href="<?php echo base_url('article_details/'.$article->id); ?>" class="read-more">Read More</a>

       <?php endif; ?>
    </div>

    <?php endforeach; ?>

</div>
<div class="col-md-9 archive-page">

	<?php if($search_items) : ?>

    <?php foreach($search_items as $article) : ?>

    <div class="category_article_list">

       <h3><a href="<?php echo base_url('article_details/'.$article->id); ?>"><?php echo $article->title; ?></a></h3>

       <p><?php echo mb_substr(strip_tags($article->description), 0, 250); ?></p>

       <a href="<?php echo base_url('article_details/'.$article->id); ?>" class="read-more">Read More</a>

    </div>

    <?php endforeach; ?>

    <?php else : ?>

    	<h3>Not Found Search Result</h3>

    <?php endif; ?>

</div>


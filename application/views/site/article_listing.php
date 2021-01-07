<div class="main-body-area">
    <div class="article-homepg">
        <h3 style="color:#75AE47;" class="article-type"><?php echo $articles[0]->name ?></h3>
        <hr/>
    </div>
    <?php foreach ($articles as $article): ?>
        <div class="article-homepg">
            <p align="left"><strong><?php echo $article->title ?></strong></p>
            <p> <?php echo mb_substr(strip_tags($article->description), 0, 250) ?> ...<span class="read-more"><a class="" data-id="<?php echo $article->id; ?>" href="<?php echo site_url('site/show'); ?>/<?php echo $article->id; ?>">বিস্তারিত</a></span></p>
    
        </div> 
       <hr/>
    <?php endforeach; ?>

    <div class="article-homepg">
        <p class="article-type">&nbsp;</p>
    </div>
</div>
<div class="article-homepg"></div>
<p>&nbsp;</p>


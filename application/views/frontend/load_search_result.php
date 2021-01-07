<?php if(count($result) > 0) : foreach($result as $article) : ?>

    <div class="category_article_list">

       <h3><a href="<?php echo base_url('article_details/'.$article->id); ?>"><?php echo $article->title; ?></a></h3>

       <p><?php echo mb_substr(strip_tags($article->description), 0, 250); ?></p>

       <div class="info">
           <a href="<?= base_url('monthly_archive/'.$article->bookinfo_id) ?>">প্রছদ: <?= $article->book_name ?></a>, <a href="<?= base_url('category_archive/'.$article->category_id) ?>">বিভাগ: <?= $article->category_name ?></a>, <a href="<?= base_url('writer_archive/'.$article->writer_id) ?>">লেখক: <?= $article->writer_name ?></a>
       </div>
       <div class="read_more">
           <a href="<?php echo base_url('article_details/'.$article->id); ?>" class="read-more">Read More</a>
       </div>

    </div>

<?php endforeach; else: echo '<h3>দুঃখিত কোন কিছু পাওয়া যায়নি</h3>'; endif; ?>
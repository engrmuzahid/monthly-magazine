<div class="main-body-area" id="main_index">
    <?php foreach ($articles as $key => $cat): ?>
        <div class="article-homepg">
            <h3 class="article-type"><a style="color:#508424"  href="<?php echo site_url('site/details?catID=' . $key.'&monthName=' . $this->session->userdata("visit_month")); ?>"><?php echo $cat['name'] ?></a></h3>
        </div>
        <hr/>

        <?php if($key != 8):
             foreach ($cat['article'] as $article): ?>
            <div class="article-homepg <?php echo $key; ?>">
                <p align="left"><strong><?php echo $article->title ?></strong></p>
                <p> <?php echo mb_substr(strip_tags($article->description), 0, 250) ?> ...<span class="read-more"><a class="" data-id="<?php echo $article->id; ?>" href="<?php echo site_url('site/show'); ?>/<?php echo $article->id; ?>">বিস্তারিত</a></span></p>
            </div>
              <hr/>
        <?php endforeach;
        else:
        ?>
             <div class="article-homepg">
                <p align="left"><strong><?php echo $cat['article'][0]->title ?></strong></p>
                <p> <?php echo $cat['article'][0]->description; ?>
                <span class="read-more" style="float:right"><a   href="<?php echo site_url('site/details?catID=' . $key.'&monthName=' . $this->session->userdata("visit_month")); ?>">সব প্রশ্নোত্তর...</a></span></p>
            </div>
              <hr/>
    <?php endif;
    endforeach; ?>
</div>



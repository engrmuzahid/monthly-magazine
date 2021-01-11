<style>
.old_items {
    top: -138px;
    position: relative;
    text-align: right;
}
.old_items a {
    font-size: 20px;
    text-align: center;
}
.all-old-items .single-item img {
    height: 350px;
}
</style>
<div class="col-md-12 all-old-items">
    <div class="old_items">
        <a class="btn btn-success" href="https://at-tahreek.com/site/show/3676" target="_blank">১৯৯৭-২০১৫ পর্যন্ত সকল সংখ্যার PDF লিংক</a> 
        </div>
	<div class="row">
		<?php foreach($old_items as $old_item) : ?>
		<div class="col-md-3">
			<div class="single-item">
                <a href="<?php echo base_url('monthly_archive/'.$old_item->id); ?>">
                    <img src="<?php echo base_url('assets/site/images/'.$old_item->cover_photo); ?>" alt="">
                </a>
                <h3><center><a href="<?php echo base_url('monthly_archive/'.$old_item->id); ?>"><?php echo $old_item->title; ?></a></h3></center>
            </div>
		</div>
		<?php endforeach; ?>
	</div>
</div> 
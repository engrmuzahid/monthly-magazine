<div class="col-md-9 page-content default_margin">
<?php if($category_list) : ?>

	<ul class="list-group">

	<?php foreach($category_list as $row) : ?>

	  <li class="list-group-item"><a href="<?php echo base_url('/category_archive/'.$row->id); ?>"><i class="fa fa-arrow-right"></i> <?php echo $row->name; ?></a></li>

	<?php endforeach; ?>

	</ul>

<?php endif; ?>

</div>
<div class="col-md-12 all-old-items list">
<?php if($writer_list) : ?>
	<ul class="list-group">
	<?php foreach($writer_list as $row) : ?>
	  <li class="list-group-item"><a href="<?php echo base_url('/writer_archive/'.$row->id); ?>"><i class="fa fa-arrow-right"></i> <?php echo $row->writer_name; ?></a></li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>
</div>
<div class="row right_side">
	<div class="col-md-4 entry_image">
		<?php if ($blog->display_image): ?>
			<img src="<?php echo $blog->cover_photo_path?>">
		<?php endif ?>
	</div>
	<div class="col-md-8 padding-default-content">
		<span class="entry_date"><?php echo $blog->formated_date ?></span>
		<span class="entry_title">
			<h3><a href="<?php echo $blog->link ?>"><?php echo $blog->title ?></a></h3>
		</span>
		<p>
			<?php echo $blog->eye ?>
		</p>
	</div>
</div>
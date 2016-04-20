<div class="row left_side">
	<div class="col-md-6 padding-default-content">
		<span class="entry_date"><?php echo $blog->formated_date ?></span>
		<span class="entry_title">
			<h3><a href="<?php echo $blog->link ?>"><?php echo $blog->title ?></a></h3>
		</span>
		<p>
			<?php echo $blog->eye ?>
		</p>
		<?php if (isset($blog->tags)): ?>
			<div class="blog_tags">
				<div class="row">
					<div class="col-md-12">
					    <div class="item-content-block tags">
					    	<?php foreach ($blog->tags as $tag): ?>
					    		<a href="<?php echo $tag->link ?>" rel="tag"><?php echo $tag->title ?></a>
					    	<?php endforeach ?>
					    </div>
                    </div>
				</div>	
			</div>
		<?php endif ?>

	</div>
	<div class="col-md-6 entry_image">
		<?php if ($blog->display_image): ?>
			<img src="<?php echo $blog->cover_photo_path?>">
		<?php endif ?>
	</div>
</div>
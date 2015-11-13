<?php 

$formated_date = $blog->formated_date;
$title = $blog->title;
$link = $blog->link;
$eye = $blog->eye;
$entry_text = "
	<div class='col-md-6 padding-default-content'>
		<span class='entry_date'>{$formated_date}</span>
		<span class='entry_title'>
			<h3><a href='{$link}'>{$title}</a></h3>
		</span>
		<p>
			{$eye}
		</p>
	</div>
";

?>



<div class="row right_side">
	<div class="col-md-6 entry_image">
		<?php if (current($blog_posts)->display_image): ?>
			<img src="<?php echo current($blog_posts)->cover_photo_path?>">
		<?php endif ?>
	</div>
	
		
</div>
<div class="container">
	<div class="row bg-white">
		<div class="col-md-4 full-picture no-padding">
			<img src="<?php echo image_url($about->profile_photo) ?>">
		</div>
		<div class="col-md-8 about-description padding-100">
			<h1>
				<?php echo $about->about_title ?>
			</h1>
			<span>
				<?php echo $about->about_text ?>
			</span>
		</div>
	</div>
	
</div>
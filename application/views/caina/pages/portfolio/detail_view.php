<div class="container container-portfolio">

	<div class="row about-links">
		<div class="col-md-12 breadcrumb-custom no-padding">
			<ul>
				<?php foreach ($categories as $cat): ?>
						<li>
							<a href="<?php echo $cat->link ?>" class="<?php echo $portfolio->portfolio_category_id == $cat->id?'current':'' ?>" rel="tag"><?php echo $cat->title ?></a>
						</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>

	<div class="row bg-white">
		<div class="col-md-4">
			<img src="<?php echo image_url($portfolio->cover_image,400,400) ?>">
		</div>
		<div class="col-md-8 padding-50">
			<div class="row">
				<div class="col-md-12">
					<h1><?php echo $portfolio->title ?></h1>

				</div>
				<div class="col-md-12">
					<div class="row">
						<?php $row_size = 12/round(count($portfolio->tags)); ?>
						<?php foreach ($portfolio->tags as $tag): ?>
							<div class="col-md-<?php echo $row_size ?> portfolio-tag">
								<h2>
									<a href="<?php echo $tag->link ?>"><?php echo $tag->title ?></a>
								</h2>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>

		</div>
	</div>
	
</div>
<div class="container portfolio-detail-container">
	<div class="row bg-white">
		<div class="col-md-12 padding-25">
			<?php echo $portfolio->description ?>
		</div>
	</div>
</div>
